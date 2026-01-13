<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProgramController;
use App\Http\Controllers\Api\BlogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public API Routes (No authentication required)
Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/programs/{program}', [ProgramController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

// Statistics API (Public)
Route::get('/stats/programs', function () {
    return response()->json([
        'total' => \App\Models\Program::active()->count(),
        'categories' => \App\Models\Program::active()
            ->selectRaw('category, COUNT(*) as count')
            ->groupBy('category')
            ->get()
            ->map(function ($item) {
                return [
                    'name' => $item->category,
                    'count' => $item->count
                ];
            })
    ]);
});

Route::get('/stats/donations', function () {
    return response()->json([
        'total_amount' => \App\Models\Donation::where('status', 'completed')->sum('amount'),
        'total_count' => \App\Models\Donation::where('status', 'completed')->count(),
        'monthly' => \App\Models\Donation::where('status', 'completed')
            ->where('created_at', '>=', now()->subMonths(12))
            ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, SUM(amount) as total')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get()
            ->map(function ($item) {
                return [
                    'month' => date('M Y', strtotime($item->year . '-' . $item->month . '-01')),
                    'total' => (float) $item->total
                ];
            })
    ]);
});

// Protected API Routes (Authentication required)
Route::middleware('auth:sanctum')->group(function () {
    // Admin-only routes
    Route::middleware('role:super-admin,admin')->group(function () {
        Route::apiResource('/admin/programs', ProgramController::class)->except(['index', 'show']);
        Route::apiResource('/admin/blog', BlogController::class)->except(['index', 'show']);

        // Additional admin API endpoints
        Route::get('/admin/stats/dashboard', function () {
            return response()->json([
                'donations' => [
                    'total' => \App\Models\Donation::count(),
                    'total_amount' => \App\Models\Donation::where('status', 'completed')->sum('amount'),
                    'pending' => \App\Models\Donation::where('status', 'pending')->count(),
                ],
                'volunteers' => [
                    'total' => \App\Models\Volunteer::count(),
                    'active' => \App\Models\Volunteer::where('status', 'active')->count(),
                    'pending' => \App\Models\Volunteer::where('status', 'pending')->count(),
                ],
                'programs' => [
                    'total' => \App\Models\Program::count(),
                    'active' => \App\Models\Program::active()->count(),
                ],
                'blog' => [
                    'total_posts' => \App\Models\BlogPost::count(),
                    'published' => \App\Models\BlogPost::published()->count(),
                    'total_views' => \App\Models\BlogPost::sum('views'),
                ],
                'inquiries' => [
                    'total' => \App\Models\ContactInquiry::count(),
                    'new' => \App\Models\ContactInquiry::where('status', 'new')->count(),
                ]
            ]);
        });
    });

    // Officer-level routes
    Route::middleware('role:super-admin,admin,officer')->group(function () {
        Route::get('/admin/volunteers', function () {
            return response()->json([
                'data' => \App\Models\Volunteer::with('user')->paginate(20)
            ]);
        });

        Route::get('/admin/donations', function () {
            return response()->json([
                'data' => \App\Models\Donation::latest()->paginate(20)
            ]);
        });

        Route::get('/admin/inquiries', function () {
            return response()->json([
                'data' => \App\Models\ContactInquiry::latest()->paginate(20)
            ]);
        });
    });
});
