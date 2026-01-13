<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Volunteer;
use App\Models\Program;
use App\Models\BlogPost;
use App\Models\Donation;
use App\Models\ContactInquiry;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        \Log::info('Login method called', [
            'method' => $request->method(),
            'email' => $request->input('email'),
            'has_password' => !empty($request->input('password')),
            'all_input' => $request->all()
        ]);

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        \Log::info('Validation passed, attempting auth', ['email' => $credentials['email']]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            \Log::info('Auth successful, redirecting', ['user_id' => Auth::id()]);
            return redirect()->intended('/admin/dashboard');
        }

        \Log::warning('Auth failed', ['email' => $credentials['email']]);
        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function dashboard()
    {
        // Get dashboard statistics
        $stats = [
            'total_donations' => Donation::count(),
            'total_donations_amount' => Donation::where('status', 'completed')->sum('amount'),
            'total_volunteers' => Volunteer::count(),
            'total_programs' => Program::count(),
            'total_blog_posts' => BlogPost::published()->count(),
            'recent_donations' => Donation::latest()->take(5)->get(),
            'pending_volunteers' => Volunteer::where('status', 'pending')->count(),
            'new_inquiries' => ContactInquiry::where('status', 'new')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    // Volunteers Management
    public function volunteers(Request $request)
    {
        $query = Volunteer::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Experience level filter
        if ($request->filled('experience_level') && $request->experience_level !== 'all') {
            $query->where('experience_level', $request->experience_level);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $volunteers = $query->latest()->paginate(20)->withQueryString();

        return view('admin.volunteers', compact('volunteers'));
    }

    public function updateVolunteerStatus(Request $request, Volunteer $volunteer)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected,active,inactive'
        ]);

        $volunteer->update(['status' => $request->status]);

        return back()->with('success', 'Volunteer status updated successfully.');
    }

    public function destroyVolunteer(Volunteer $volunteer)
    {
        $volunteer->delete();

        return back()->with('success', 'Volunteer deleted successfully.');
    }

    // Programs Management
    public function programs(Request $request)
    {
        $query = Program::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('coordinator_name', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Category filter
        if ($request->filled('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $programs = $query->latest()->paginate(20)->withQueryString();

        return view('admin.programs', compact('programs'));
    }

    public function storeProgram(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:programs',
            'description' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|in:planning,active,completed,paused',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'target_amount' => 'nullable|numeric|min:0',
            'location' => 'nullable|string',
            'coordinator_name' => 'nullable|string',
            'coordinator_email' => 'nullable|email',
            'objectives' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $validated;

        // Handle multiple image uploads
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $images[] = $file->store('programs', 'public');
            }
        }
        $data['images'] = $images;

        Program::create($data);

        return redirect()->route('admin.programs')->with('success', 'Program created successfully.');
    }

    public function updateProgram(Request $request, Program $program)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:programs,slug,' . $program->id,
            'description' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|in:planning,active,completed,paused',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'target_amount' => 'nullable|numeric|min:0',
            'location' => 'nullable|string',
            'coordinator_name' => 'nullable|string',
            'coordinator_email' => 'nullable|email',
            'objectives' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remove_images' => 'nullable|array',
            'remove_images.*' => 'string',
        ]);

        $data = $validated;

        // Handle image removals
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imagePath) {
                $program->removeImage($imagePath);
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $program->addImage($file);
            }
        }

        // Remove image-related fields from data array
        unset($data['images'], $data['remove_images']);

        $program->update($data);

        return back()->with('success', 'Program updated successfully.');
    }

    public function destroyProgram(Program $program)
    {
        // Delete associated images
        if ($program->images) {
            foreach ($program->images as $image) {
                $program->removeImage($image);
            }
        }

        $program->delete();

        return back()->with('success', 'Program deleted successfully.');
    }

    // Blog Management
    public function createBlogPost()
    {
        return view('admin.blog-create');
    }

    public function editBlogPost(BlogPost $post)
    {
        return view('admin.blog-edit', compact('post'));
    }

    public function blog(Request $request)
    {
        $query = BlogPost::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('author_name', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Category filter
        if ($request->filled('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $posts = $query->latest()->paginate(20)->withQueryString();

        return view('admin.blog', compact('posts'));
    }

    public function storeBlogPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blog_posts',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
            'author_name' => 'required|string',
            'author_role' => 'nullable|string',
            'read_time' => 'nullable|integer|min:1',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $validated;

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        BlogPost::create($data);

        return redirect()->route('admin.blog')->with('success', 'Blog post created successfully.');
    }

    public function updateBlogPost(Request $request, BlogPost $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blog_posts,slug,' . $post->id,
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
            'author_name' => 'required|string',
            'author_role' => 'nullable|string',
            'read_time' => 'nullable|integer|min:1',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $validated;

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            $post->deleteFeaturedImage();

            // Store new image
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        $post->update($data);

        return back()->with('success', 'Blog post updated successfully.');
    }

    public function destroyBlogPost(BlogPost $post)
    {
        // Delete featured image if exists
        $post->deleteFeaturedImage();

        $post->delete();

        return back()->with('success', 'Blog post deleted successfully.');
    }

    // Donations Management
    public function donations(Request $request)
    {
        $query = Donation::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('transaction_id', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Payment method filter
        if ($request->filled('payment_method') && $request->payment_method !== 'all') {
            $query->where('payment_method', $request->payment_method);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Amount range filter
        if ($request->filled('amount_min')) {
            $query->where('amount', '>=', $request->amount_min);
        }
        if ($request->filled('amount_max')) {
            $query->where('amount', '<=', $request->amount_max);
        }

        $donations = $query->latest()->paginate(20)->withQueryString();

        return view('admin.donations', compact('donations'));
    }

    public function destroyDonation(Donation $donation)
    {
        $donation->delete();

        return back()->with('success', 'Donation deleted successfully.');
    }

    // Contact Inquiries
    public function contactInquiries(Request $request)
    {
        $query = ContactInquiry::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $inquiries = $query->latest()->paginate(20)->withQueryString();

        return view('admin.contact-inquiries', compact('inquiries'));
    }

    public function updateInquiryStatus(Request $request, ContactInquiry $inquiry)
    {
        $request->validate([
            'status' => 'required|in:new,read,responded,closed'
        ]);

        if ($request->status === 'responded') {
            $inquiry->markAsResponded();
        } else {
            $inquiry->update(['status' => $request->status]);
        }

        return back()->with('success', 'Inquiry status updated successfully.');
    }

    public function destroyContactInquiry(ContactInquiry $inquiry)
    {
        $inquiry->delete();

        return back()->with('success', 'Contact inquiry deleted successfully.');
    }

    // Settings Management
    public function settings()
    {
        return view('admin.settings');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
        ]);

        // For demo purposes, we'll store additional profile info in session
        // In a real app, you'd have a profiles table
        session([
            'profile.first_name' => $request->first_name,
            'profile.last_name' => $request->last_name,
            'profile.phone' => $request->phone,
            'profile.bio' => $request->bio,
        ]);

        return back()->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update password
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password changed successfully.');
    }

    public function updateSystemSettings(Request $request)
    {
        $request->validate([
            'language' => 'required|in:en,es,fr',
            'timezone' => 'required|string',
            'auto_save' => 'nullable|boolean',
            'email_notifications' => 'nullable|boolean',
            'push_notifications' => 'nullable|boolean',
            'sms_alerts' => 'nullable|boolean',
        ]);

        // Store system settings in session (in real app, use database)
        session([
            'system.language' => $request->language,
            'system.timezone' => $request->timezone,
            'system.auto_save' => $request->boolean('auto_save'),
            'system.email_notifications' => $request->boolean('email_notifications'),
            'system.push_notifications' => $request->boolean('push_notifications'),
            'system.sms_alerts' => $request->boolean('sms_alerts'),
        ]);

        return back()->with('success', 'System settings updated successfully.');
    }

    public function resetSettings()
    {
        // Clear profile and system settings from session
        session()->forget([
            'profile.first_name',
            'profile.last_name',
            'profile.phone',
            'profile.bio',
            'system.language',
            'system.timezone',
            'system.auto_save',
            'system.email_notifications',
            'system.push_notifications',
            'system.sms_alerts',
        ]);

        return back()->with('success', 'Settings reset to default successfully.');
    }

    // Export Methods
    public function exportVolunteers(Request $request)
    {
        $query = Volunteer::query();

        // Apply same filters as the index method
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('experience_level') && $request->experience_level !== 'all') {
            $query->where('experience_level', $request->experience_level);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $volunteers = $query->latest()->get();

        $filename = 'volunteers_' . date('Y-m-d_H-i-s') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($volunteers) {
            $file = fopen('php://output', 'w');

            // CSV headers
            fputcsv($file, [
                'ID',
                'First Name',
                'Last Name',
                'Email',
                'Phone',
                'Experience Level',
                'Status',
                'Availability',
                'Skills & Interests',
                'Emergency Contact',
                'Emergency Phone',
                'Medical Conditions',
                'Created At'
            ]);

            // CSV data
            foreach ($volunteers as $volunteer) {
                fputcsv($file, [
                    $volunteer->id,
                    $volunteer->first_name,
                    $volunteer->last_name,
                    $volunteer->email,
                    $volunteer->phone,
                    ucfirst($volunteer->experience_level),
                    ucfirst($volunteer->status),
                    $volunteer->availability,
                    $volunteer->skills_interests,
                    $volunteer->emergency_contact_name,
                    $volunteer->emergency_contact_phone,
                    $volunteer->medical_conditions,
                    $volunteer->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportDonations(Request $request)
    {
        $query = Donation::query();

        // Apply same filters as the index method
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('transaction_id', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('payment_method') && $request->payment_method !== 'all') {
            $query->where('payment_method', $request->payment_method);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        if ($request->filled('amount_min')) {
            $query->where('amount', '>=', $request->amount_min);
        }
        if ($request->filled('amount_max')) {
            $query->where('amount', '<=', $request->amount_max);
        }

        $donations = $query->latest()->get();

        $filename = 'donations_' . date('Y-m-d_H-i-s') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($donations) {
            $file = fopen('php://output', 'w');

            // CSV headers
            fputcsv($file, [
                'ID',
                'First Name',
                'Last Name',
                'Email',
                'Amount',
                'Frequency',
                'Payment Method',
                'Transaction ID',
                'Status',
                'Processed At',
                'Created At'
            ]);

            // CSV data
            foreach ($donations as $donation) {
                fputcsv($file, [
                    $donation->id,
                    $donation->first_name,
                    $donation->last_name,
                    $donation->email,
                    $donation->amount,
                    ucfirst($donation->frequency),
                    ucfirst($donation->payment_method),
                    $donation->transaction_id,
                    ucfirst($donation->status),
                    $donation->processed_at ? $donation->processed_at->format('Y-m-d H:i:s') : 'N/A',
                    $donation->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportContactInquiries(Request $request)
    {
        $query = ContactInquiry::query();

        // Apply same filters as the index method
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $inquiries = $query->latest()->get();

        $filename = 'contact_inquiries_' . date('Y-m-d_H-i-s') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($inquiries) {
            $file = fopen('php://output', 'w');

            // CSV headers
            fputcsv($file, [
                'ID',
                'Name',
                'Email',
                'Phone',
                'Subject',
                'Message',
                'Status',
                'Responded At',
                'Created At'
            ]);

            // CSV data
            foreach ($inquiries as $inquiry) {
                fputcsv($file, [
                    $inquiry->id,
                    $inquiry->name,
                    $inquiry->email,
                    $inquiry->phone,
                    $inquiry->subject,
                    $inquiry->message,
                    ucfirst($inquiry->status),
                    $inquiry->responded_at ? $inquiry->responded_at->format('Y-m-d H:i:s') : 'N/A',
                    $inquiry->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // Analytics Dashboard
    public function analytics()
    {
        // Donation Analytics
        $donationStats = [
            'total_amount' => Donation::where('status', 'completed')->sum('amount'),
            'monthly_data' => $this->getMonthlyDonationData(),
            'payment_methods' => $this->getPaymentMethodData(),
            'top_donors' => Donation::where('status', 'completed')
                ->selectRaw('first_name, last_name, SUM(amount) as total_donated')
                ->groupBy('first_name', 'last_name')
                ->orderBy('total_donated', 'desc')
                ->take(10)
                ->get(),
        ];

        // Volunteer Analytics
        $volunteerStats = [
            'status_distribution' => $this->getVolunteerStatusData(),
            'monthly_applications' => $this->getMonthlyVolunteerData(),
            'experience_levels' => $this->getVolunteerExperienceData(),
            'total_active' => Volunteer::where('status', 'active')->count(),
        ];

        // Program Analytics
        $programStats = [
            'category_distribution' => $this->getProgramCategoryData(),
            'status_distribution' => $this->getProgramStatusData(),
            'funding_progress' => $this->getProgramFundingData(),
            'total_raised' => Program::sum('raised_amount'),
            'total_target' => Program::sum('target_amount'),
        ];

        // Blog Analytics
        $blogStats = [
            'monthly_posts' => $this->getMonthlyBlogData(),
            'category_distribution' => $this->getBlogCategoryData(),
            'total_views' => BlogPost::sum('views'),
            'avg_views_per_post' => BlogPost::avg('views'),
        ];

        // Contact Analytics
        $contactStats = [
            'monthly_inquiries' => $this->getMonthlyContactData(),
            'status_distribution' => $this->getContactStatusData(),
            'avg_response_time' => $this->getAverageResponseTime(),
        ];

        return view('admin.analytics', compact(
            'donationStats',
            'volunteerStats',
            'programStats',
            'blogStats',
            'contactStats'
        ));
    }

    private function getMonthlyDonationData()
    {
        return Donation::where('status', 'completed')
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
            });
    }

    private function getPaymentMethodData()
    {
        return Donation::where('status', 'completed')
            ->selectRaw('payment_method, COUNT(*) as count, SUM(amount) as total')
            ->groupBy('payment_method')
            ->get()
            ->map(function ($item) {
                return [
                    'method' => ucfirst($item->payment_method),
                    'count' => (int) $item->count,
                    'total' => (float) $item->total
                ];
            });
    }

    private function getVolunteerStatusData()
    {
        return Volunteer::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get()
            ->map(function ($item) {
                return [
                    'status' => ucfirst($item->status),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getMonthlyVolunteerData()
    {
        return Volunteer::where('created_at', '>=', now()->subMonths(12))
            ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get()
            ->map(function ($item) {
                return [
                    'month' => date('M Y', strtotime($item->year . '-' . $item->month . '-01')),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getVolunteerExperienceData()
    {
        return Volunteer::selectRaw('experience_level, COUNT(*) as count')
            ->groupBy('experience_level')
            ->get()
            ->map(function ($item) {
                return [
                    'level' => ucfirst($item->experience_level),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getProgramCategoryData()
    {
        return Program::selectRaw('category, COUNT(*) as count')
            ->groupBy('category')
            ->get()
            ->map(function ($item) {
                return [
                    'category' => ucfirst(str_replace('_', ' ', $item->category)),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getProgramStatusData()
    {
        return Program::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get()
            ->map(function ($item) {
                return [
                    'status' => ucfirst($item->status),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getProgramFundingData()
    {
        return Program::whereNotNull('target_amount')
            ->where('target_amount', '>', 0)
            ->get()
            ->map(function ($program) {
                return [
                    'title' => $program->title,
                    'raised' => (float) $program->raised_amount,
                    'target' => (float) $program->target_amount,
                    'percentage' => min(100, round(($program->raised_amount / $program->target_amount) * 100, 1))
                ];
            })
            ->sortByDesc('percentage');
    }

    private function getMonthlyBlogData()
    {
        return BlogPost::where('created_at', '>=', now()->subMonths(12))
            ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get()
            ->map(function ($item) {
                return [
                    'month' => date('M Y', strtotime($item->year . '-' . $item->month . '-01')),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getBlogCategoryData()
    {
        return BlogPost::selectRaw('category, COUNT(*) as count')
            ->groupBy('category')
            ->get()
            ->map(function ($item) {
                return [
                    'category' => ucfirst($item->category),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getMonthlyContactData()
    {
        return ContactInquiry::where('created_at', '>=', now()->subMonths(12))
            ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get()
            ->map(function ($item) {
                return [
                    'month' => date('M Y', strtotime($item->year . '-' . $item->month . '-01')),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getContactStatusData()
    {
        return ContactInquiry::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get()
            ->map(function ($item) {
                return [
                    'status' => ucfirst($item->status),
                    'count' => (int) $item->count
                ];
            });
    }

    private function getAverageResponseTime()
    {
        $respondedInquiries = ContactInquiry::whereNotNull('responded_at')
            ->get()
            ->map(function ($inquiry) {
                $created = strtotime($inquiry->created_at);
                $responded = strtotime($inquiry->responded_at);
                return ($responded - $created) / (60 * 60); // hours
            });

        return $respondedInquiries->isNotEmpty() ? round($respondedInquiries->avg(), 1) : 0;
    }

    public function exportPrograms(Request $request)
    {
        $query = Program::query();

        // Apply same filters as the index method
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('coordinator_name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $programs = $query->latest()->get();

        $filename = 'programs_' . date('Y-m-d_H-i-s') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($programs) {
            $file = fopen('php://output', 'w');

            // CSV headers
            fputcsv($file, [
                'ID',
                'Title',
                'Slug',
                'Category',
                'Status',
                'Start Date',
                'End Date',
                'Target Amount',
                'Raised Amount',
                'Location',
                'Coordinator Name',
                'Coordinator Email',
                'Created At'
            ]);

            // CSV data
            foreach ($programs as $program) {
                fputcsv($file, [
                    $program->id,
                    $program->title,
                    $program->slug,
                    ucfirst(str_replace('_', ' ', $program->category)),
                    ucfirst($program->status),
                    $program->start_date ? $program->start_date->format('Y-m-d') : 'N/A',
                    $program->end_date ? $program->end_date->format('Y-m-d') : 'N/A',
                    $program->target_amount ?: 'N/A',
                    $program->raised_amount ?: '0',
                    $program->location ?: 'N/A',
                    $program->coordinator_name ?: 'N/A',
                    $program->coordinator_email ?: 'N/A',
                    $program->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportBlogPosts(Request $request)
    {
        $query = BlogPost::query();

        // Apply same filters as the index method
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('author_name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $posts = $query->latest()->get();

        $filename = 'blog_posts_' . date('Y-m-d_H-i-s') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($posts) {
            $file = fopen('php://output', 'w');

            // CSV headers
            fputcsv($file, [
                'ID',
                'Title',
                'Slug',
                'Category',
                'Status',
                'Author Name',
                'Author Role',
                'Read Time',
                'Views',
                'Published At',
                'Created At'
            ]);

            // CSV data
            foreach ($posts as $post) {
                fputcsv($file, [
                    $post->id,
                    $post->title,
                    $post->slug,
                    ucfirst($post->category),
                    ucfirst($post->status),
                    $post->author_name,
                    $post->author_role ?: 'N/A',
                    $post->read_time ?: 'N/A',
                    $post->views ?: '0',
                    $post->published_at ? $post->published_at->format('Y-m-d H:i:s') : 'N/A',
                    $post->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
