<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user registration
     */
    public function test_user_can_register()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post('/register', $userData);

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $this->assertAuthenticated();
    }

    /**
     * Test user login
     */
    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $loginData = [
            'email' => 'admin@example.com',
            'password' => 'password',
        ];

        $response = $this->post('/admin/login', $loginData);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test admin login page loads
     */
    public function test_admin_login_page_loads()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertViewIs('admin.login');
    }

    /**
     * Test unauthenticated user cannot access admin dashboard
     */
    public function test_unauthenticated_user_cannot_access_admin_dashboard()
    {
        $response = $this->get('/admin/dashboard');

        $response->assertRedirect('/admin/login');
    }

    /**
     * Test authenticated user can access admin dashboard
     */
    public function test_authenticated_user_can_access_admin_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertViewIs('admin.dashboard');
    }

    /**
     * Test user logout
     */
    public function test_user_can_logout()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertGuest();
    }

    /**
     * Test role assignment
     */
    public function test_user_can_have_role_assigned()
    {
        $user = User::factory()->create();
        $role = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'System Administrator',
            'level' => 2,
        ]);

        $user->roles()->attach($role);

        $this->assertTrue($user->hasRole('admin'));
        $this->assertEquals(1, $user->roles()->count());
    }

    /**
     * Test role hierarchy
     */
    public function test_role_hierarchy_works()
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'level' => 2,
        ]);

        $userRole = Role::create([
            'name' => 'user',
            'display_name' => 'User',
            'level' => 1,
        ]);

        $adminUser = User::factory()->create();
        $regularUser = User::factory()->create();

        $adminUser->roles()->attach($adminRole);
        $regularUser->roles()->attach($userRole);

        $this->assertTrue($adminUser->hasRole('admin'));
        $this->assertFalse($adminUser->hasRole('user'));

        $this->assertTrue($regularUser->hasRole('user'));
        $this->assertFalse($regularUser->hasRole('admin'));
    }
}
}
