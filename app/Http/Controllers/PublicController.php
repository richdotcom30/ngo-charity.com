<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Volunteer;
use App\Models\ContactInquiry;
use App\Models\Program;
use App\Models\BlogPost;
use App\Mail\VolunteerConfirmation;

class PublicController extends Controller
{
    public function showPrograms()
    {
        $programs = Program::active()->latest()->paginate(12);
        return view('programs', compact('programs'));
    }

    public function showProgram(Program $program)
    {
        return view('program-detail', compact('program'));
    }

    public function showBlog()
    {
        $posts = BlogPost::published()->latest()->paginate(12);
        return view('blog', compact('posts'));
    }

    public function showBlogPost($slug)
    {
        $post = BlogPost::where('slug', $slug)->published()->firstOrFail();

        // Increment view count
        $post->incrementViews();

        return view('blog-detail', compact('post'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20',
        ]);

        $inquiry = ContactInquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'phone' => $validated['phone'],
            'status' => 'new',
        ]);

        // TODO: Send confirmation email to user and notification to admin

        return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');
    }

    public function submitVolunteerApplication(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'experience_level' => 'required|in:beginner,intermediate,advanced,expert',
            'availability' => 'required|string',
            'skills_interests' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'emergency_contact_name' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|string|max:20',
            'medical_conditions' => 'nullable|string',
            'agree_to_terms' => 'required|accepted',
        ]);

        $volunteer = Volunteer::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'experience_level' => $validated['experience_level'],
            'availability' => $validated['availability'],
            'skills_interests' => $validated['skills_interests'],
            'additional_info' => $validated['additional_info'],
            'emergency_contact_name' => $validated['emergency_contact_name'],
            'emergency_contact_phone' => $validated['emergency_contact_phone'],
            'medical_conditions' => $validated['medical_conditions'],
            'status' => 'pending',
        ]);

        // Send confirmation email to volunteer
        Mail::to($volunteer->email)->send(new VolunteerConfirmation($volunteer));

        // TODO: Send notification to admin about new volunteer application

        return back()->with('success', 'Thank you for your volunteer application! We\'ve sent you a confirmation email and will be in touch within 2-3 business days.');
    }
}
