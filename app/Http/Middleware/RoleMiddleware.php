<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user is authenticated
        if (!$request->user()) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        // Get the user's roles (assuming a roles relationship or attribute exists)
        $userRoles = $this->getUserRoles($request->user());

        // Check if user has any of the required roles
        foreach ($roles as $role) {
            if (in_array($role, $userRoles)) {
                return $next($request);
            }
        }

        // User doesn't have required role
        return response()->json([
            'error' => 'Unauthorized',
            'message' => 'You do not have permission to access this resource.'
        ], 403);
    }

    /**
     * Get roles for the given user
     */
    protected function getUserRoles($user): array
    {
        // Check if user has roles relationship (for Spatie roles)
        if (method_exists($user, 'roles')) {
            return $user->roles->pluck('name')->toArray();
        }

        // Check if user has a role attribute
        if (isset($user->role)) {
            return [$user->role];
        }

        // Check if user has a role_id relationship
        if (isset($user->role)) {
            return [$user->role->name ?? 'user'];
        }

        // Default: if user is authenticated, give them user role
        return $user ? ['user'] : [];
    }
}
