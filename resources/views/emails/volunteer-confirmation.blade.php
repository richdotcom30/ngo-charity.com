@extends('layouts.app')

@section('title', 'Volunteer Application Confirmation - Australian Relief NGO')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Header -->
    <div class="bg-primary text-white px-6 py-4">
        <div class="flex items-center space-x-3">
            <div class="bg-white/20 p-2 rounded-full">
                <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
            </div>
            <div>
                <h1 class="text-xl font-bold">Thank You for Volunteering</h1>
                <p class="text-white/80 text-sm">Australian Relief NGO</p>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6">
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                <span class="material-symbols-outlined text-primary text-3xl">check_circle</span>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Welcome to Our Volunteer Community</h2>
            <p class="text-gray-600">Your application has been received and we're excited to have you join our team!</p>
        </div>

        <!-- Application Details -->
        <div class="bg-gray-50 rounded-lg p-4 mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Application Summary</h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Name:</span>
                    <span class="font-medium">{{ $volunteer->first_name }} {{ $volunteer->last_name }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Email:</span>
                    <span class="text-blue-600">{{ $volunteer->email }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Phone:</span>
                    <span>{{ $volunteer->phone ?? 'Not provided' }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Application Date:</span>
                    <span>{{ $volunteer->created_at->format('M j, Y') }}</span>
                </div>
                @if($volunteer->experience_level)
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Experience Level:</span>
                    <span class="capitalize">{{ $volunteer->experience_level }}</span>
                </div>
                @endif
                @if($volunteer->availability)
                <div class="border-t pt-3 mt-3">
                    <span class="text-gray-600 block mb-1">Availability:</span>
                    <p class="text-gray-800">{{ $volunteer->availability }}</p>
                </div>
                @endif
                @if($volunteer->skills_interests)
                <div class="border-t pt-3 mt-3">
                    <span class="text-gray-600 block mb-1">Skills & Interests:</span>
                    <p class="text-gray-800">{{ $volunteer->skills_interests }}</p>
                </div>
                @endif
                @if($volunteer->additional_info)
                <div class="border-t pt-3 mt-3">
                    <span class="text-gray-600 block mb-1">Additional Information:</span>
                    <p class="text-gray-800 italic bg-white p-3 rounded border">"{!! nl2br(e($volunteer->additional_info)) !!}"</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Next Steps -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
            <div class="flex items-start space-x-3">
                <span class="material-symbols-outlined text-blue-600 text-xl">info</span>
                <div>
                    <h4 class="font-semibold text-blue-800">What Happens Next?</h4>
                    <ul class="text-blue-700 text-sm mt-2 space-y-1">
                        <li>• Our volunteer coordinator will review your application within 2-3 business days</li>
                        <li>• We'll contact you to schedule an interview and orientation</li>
                        <li>• Once approved, you'll receive your volunteer handbook and schedule</li>
                        <li>• Training sessions will be arranged based on your interests and skills</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Volunteer Benefits -->
        <div class="mb-6">
            <h4 class="font-semibold text-gray-900 mb-3">As an Australian Relief Volunteer, You'll Enjoy:</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Meaningful work that creates real change in communities</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Comprehensive training and professional development</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Flexible scheduling to fit your lifestyle</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Networking opportunities with like-minded individuals</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Recognition and appreciation for your contributions</span>
                </li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-3">
            <a href="{{ route('home') }}"
               class="flex-1 bg-primary hover:bg-primary-hover text-white font-medium py-3 px-4 rounded-lg text-center transition-colors">
                Explore Our Programs
            </a>
            <a href="mailto:volunteers@ausrelief.org"
               class="flex-1 bg-white hover:bg-gray-50 text-gray-700 font-medium py-3 px-4 rounded-lg text-center border border-gray-300 transition-colors">
                Contact Volunteer Team
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-8 pt-4 border-t border-gray-200 text-center">
            <div class="flex items-center justify-center space-x-4 text-sm text-gray-500 mb-2">
                <span>📧 volunteers@ausrelief.org</span>
                <span>📞 (02) 1234 5678</span>
                <span>🌐 ausrelief.org</span>
            </div>
            <p class="text-xs text-gray-500">
                Australian Relief NGO - Together, we're creating positive change across Australia
            </p>
            <div class="flex items-center justify-center space-x-4 mt-3">
                <a href="#" class="text-gray-400 hover:text-gray-600">Facebook</a>
                <a href="#" class="text-gray-400 hover:text-gray-600">Twitter</a>
                <a href="#" class="text-gray-400 hover:text-gray-600">Instagram</a>
            </div>
        </div>
    </div>
</div>
@endsection
