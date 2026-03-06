<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Default login route for Laravel authentication redirects
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

// Register route - redirects to admin login since this is admin-only system
Route::get('/register', function () {
    return redirect('/admin/login');
})->name('register');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\PublicController::class, 'submitContact'])->name('contact.submit')->middleware('throttle:contact-form');

// Newsletter subscription
Route::post('/newsletter/subscribe', function (Illuminate\Http\Request $request) {
    $request->validate(['email' => 'required|email']);
    // Newsletter logic would go here
    return back()->with('success', 'Thank you for subscribing!');
})->name('newsletter.subscribe');

Route::get('/programs', [App\Http\Controllers\PublicController::class, 'showPrograms'])->name('programs');
Route::get('/programs/{program}', [App\Http\Controllers\PublicController::class, 'showProgram'])->name('programs.show');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::post('/volunteer/apply', [App\Http\Controllers\PublicController::class, 'submitVolunteerApplication'])->name('volunteer.apply')->middleware('throttle:volunteer-form');

Route::get('/blog', [App\Http\Controllers\PublicController::class, 'showBlog'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\PublicController::class, 'showBlogPost'])->name('blog.show');

// Blog Detail Routes
Route::get('/blog/community-garden-project', function () {
    $blog = [
        'title' => 'Community Garden Project Transforms Urban Food Access',
        'excerpt' => 'In the heart of Sydney\'s inner-city suburbs, where concrete jungles have long dominated the landscape, a remarkable transformation is taking place. Our Community Garden Project has blossomed into a beacon of hope, providing fresh, nutritious produce to over 200 families weekly while fostering community connections and sustainable urban agriculture.',
        'image' => 'food-security-network.png',
        'category' => 'Community Impact',
        'icon' => 'eco',
        'date' => 'December 15, 2024',
        'read_time' => 5,
        'views' => '2.4k',
        'author' => [
            'name' => 'Sarah Mitchell',
            'role' => 'Community Programs Director',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'From Vacant Lot to Thriving Oasis'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Eighteen months ago, the site that now hosts our flagship community garden was little more than a weed-infested vacant lot behind an abandoned warehouse. Through partnerships with local government and generous community donations, we\'ve transformed this neglected space into a productive urban farm spanning over 2,000 square meters.'
            ],
            [
                'type' => 'paragraph',
                'content' => 'The transformation involved extensive soil remediation, installation of raised garden beds, a drip irrigation system, and the construction of a community pavilion. But the real magic happened when local residents got involved. What started as a small group of enthusiastic volunteers has grown into a thriving community of over 150 active gardeners representing diverse cultural backgrounds and age groups.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Key Achievements',
                'items' => [
                    ['label' => '200+ families', 'description' => 'receiving weekly fresh produce boxes'],
                    ['label' => '150+ active volunteers', 'description' => 'from diverse community backgrounds'],
                    ['label' => '2,000+ square meters', 'description' => 'of productive urban farmland'],
                    ['label' => '25 different vegetables', 'description' => 'grown seasonally throughout the year']
                ]
            ],
            [
                'type' => 'heading',
                'content' => 'The Power of Community-Led Agriculture'
            ],
            [
                'type' => 'paragraph',
                'content' => 'What makes our community garden truly special is its people-centered approach. Rather than operating as a traditional farm with paid staff, we empower community members to take ownership of their food production. Each participant receives training in organic gardening techniques, crop rotation, and sustainable farming practices.'
            ],
            [
                'type' => 'paragraph',
                'content' => '"This garden has changed our lives," says Maria Gonzalez, a single mother of three who has been involved since the project\'s inception. "Not only do we get fresh, healthy food for our family, but we\'ve learned skills that will last a lifetime. My children now understand where their food comes from and take pride in growing it themselves."'
            ],
            [
                'type' => 'quote',
                'title' => 'Get Involved',
                'quote' => 'Ready to join our community garden movement? Whether you want to volunteer your time, donate to expand our programs, or start a garden in your own community, there are many ways to get involved.',
                'cta' => [
                    'text' => 'Volunteer With Us',
                    'link' => 'volunteer'
                ],
                'secondary' => [
                    'text' => 'Support Our Gardens',
                    'link' => 'donate'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Food Security Success Stories',
                'excerpt' => 'Real stories of families who have transitioned from food insecurity to self-sufficiency.',
                'image' => 'food-security-network.png',
                'category' => 'Impact',
                'route' => 'blog.food-security'
            ],
            [
                'title' => 'Building Tomorrow\'s Leaders',
                'excerpt' => 'How we\'re investing in our volunteers through comprehensive training programs.',
                'image' => 'education.jpg',
                'category' => 'Volunteers',
                'route' => 'blog.volunteer-development'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.community-garden');

Route::get('/blog/indigenous-youth-digital-skills', function () {
    $blog = [
        'title' => 'Empowering Indigenous Youth Through Digital Skills Training',
        'excerpt' => 'Our groundbreaking program teaching coding and digital literacy to Indigenous youth in remote communities, opening doors to new career opportunities and preserving cultural knowledge through technology.',
        'image' => 'education.jpg',
        'category' => 'Education',
        'icon' => 'school',
        'date' => 'December 10, 2024',
        'read_time' => 7,
        'views' => '1.8k',
        'author' => [
            'name' => 'Dr. James Wilson',
            'role' => 'Education Programs Manager',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'Bridging the Digital Divide'
            ],
            [
                'type' => 'paragraph',
                'content' => 'In remote Indigenous communities across Australia, access to quality education and digital skills training has historically been limited. Our Indigenous Youth Digital Skills Program is changing this reality, providing young people with the tools they need to thrive in the modern world while maintaining strong connections to their cultural heritage.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Program Impact',
                'items' => [
                    ['label' => '85+ students', 'description' => 'enrolled in digital skills training'],
                    ['label' => '12 remote communities', 'description' => 'across Northern Territory and Queensland'],
                    ['label' => '95% completion rate', 'description' => 'among program participants'],
                    ['label' => '40+ job placements', 'description' => 'in tech and creative industries']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'Student Success Story',
                'quote' => 'Before this program, I never imagined I could work in technology. Now I\'m building apps that help preserve my community\'s traditional stories. This program didn\'t just teach me coding – it gave me confidence in my future.',
                'cta' => [
                    'text' => 'Learn More About Our Programs',
                    'link' => 'programs'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Solar-Powered Learning',
                'excerpt' => 'How renewable energy and technology are bridging the digital divide.',
                'image' => 'education.jpg',
                'category' => 'Technology',
                'route' => 'blog.solar-learning'
            ],
            [
                'title' => 'Community Garden Project',
                'excerpt' => 'Urban agriculture initiative providing fresh produce to families.',
                'image' => 'food-security-network.png',
                'category' => 'Community',
                'route' => 'blog.community-garden'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.indigenous-youth');

Route::get('/blog/bushfire-recovery-hope-returns', function () {
    $blog = [
        'title' => 'One Year After the Fires: Hope Blooms in Replanted Forests',
        'excerpt' => 'Celebrating the remarkable recovery of bushfire-affected regions as native vegetation returns, bringing wildlife and hope to devastated communities across Australia.',
        'image' => 'bush-fire-recovery.jpg',
        'category' => 'Environment',
        'icon' => 'nature',
        'date' => 'December 5, 2024',
        'read_time' => 6,
        'views' => '3.1k',
        'author' => [
            'name' => 'Dr. Emily Chen',
            'role' => 'Environmental Programs Coordinator',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'A Year of Remarkable Recovery'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Twelve months after the devastating bushfires that ravaged large swathes of Australia, the landscape is telling a story of resilience and renewal. Our bushfire recovery program has planted over 500,000 native trees and shrubs, creating wildlife corridors and restoring biodiversity to fire-affected regions.'
            ],
            [
                'type' => 'paragraph',
                'content' => 'The transformation is nothing short of miraculous. What was once blackened earth and skeletal trees now shows signs of life returning. Kangaroos, wallabies, and bird species are returning to areas they abandoned during the fires, and the soil is beginning to recover its fertility.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Recovery Milestones',
                'items' => [
                    ['label' => '500,000+ native plants', 'description' => 'planted across fire-affected regions'],
                    ['label' => '25 wildlife species', 'description' => 'returning to rehabilitated areas'],
                    ['label' => '15 community nurseries', 'description' => 'established for ongoing planting'],
                    ['label' => '85% seedling survival rate', 'description' => 'in the first year']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'Support Our Recovery Efforts',
                'quote' => 'The Australian bush has shown incredible resilience, but it needs our help to fully recover. Your support ensures that future generations will continue to enjoy the natural beauty and biodiversity of our unique landscapes.',
                'cta' => [
                    'text' => 'Donate to Recovery',
                    'link' => 'donate'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Climate Resilience Communities',
                'excerpt' => 'Adapting communities for a sustainable future.',
                'image' => 'education.jpg',
                'category' => 'Climate',
                'route' => 'blog.climate-resilience'
            ],
            [
                'title' => 'Community Garden Project',
                'excerpt' => 'Urban agriculture providing fresh produce to families.',
                'image' => 'food-security-network.png',
                'category' => 'Community',
                'route' => 'blog.community-garden'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.bushfire-recovery');

Route::get('/blog/solar-powered-learning', function () {
    $blog = [
        'title' => 'Solar-Powered Learning: Bringing Internet to Remote Schools',
        'excerpt' => 'How renewable energy and technology are bridging the digital divide for students in Australia\'s most isolated communities, ensuring every child has access to quality education.',
        'image' => 'education.jpg',
        'category' => 'Technology',
        'icon' => 'solar_power',
        'date' => 'November 28, 2024',
        'read_time' => 8,
        'views' => '2.7k',
        'author' => [
            'name' => 'Marcus Johnson',
            'role' => 'Technology Infrastructure Manager',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'Powering Education with Renewable Energy'
            ],
            [
                'type' => 'paragraph',
                'content' => 'In Australia\'s remote communities, access to reliable electricity and high-speed internet is often limited or nonexistent. Our Solar-Powered Learning initiative combines renewable energy solutions with cutting-edge technology to ensure that every student, regardless of their location, has access to quality digital education.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Program Statistics',
                'items' => [
                    ['label' => '45 remote schools', 'description' => 'equipped with solar power and internet'],
                    ['label' => '2,500+ students', 'description' => 'now accessing online learning resources'],
                    ['label' => '99.5% uptime', 'description' => 'for solar-powered systems'],
                    ['label' => '35% improvement', 'description' => 'in student engagement scores']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'Transforming Education',
                'quote' => 'For the first time, our students can participate in virtual field trips, collaborate with students from around the world, and access educational resources that were previously unavailable. The solar power ensures reliable electricity for both learning and community needs.',
                'cta' => [
                    'text' => 'Support Rural Education',
                    'link' => 'donate'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Indigenous Youth Digital Skills',
                'excerpt' => 'Teaching coding and digital literacy to Indigenous youth.',
                'image' => 'education.jpg',
                'category' => 'Education',
                'route' => 'blog.indigenous-youth'
            ],
            [
                'title' => 'Climate Resilience Communities',
                'excerpt' => 'Sustainable adaptation for coastal communities.',
                'image' => 'bush-fire-recovery.jpg',
                'category' => 'Climate',
                'route' => 'blog.climate-resilience'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.solar-learning');

Route::get('/blog/food-security-success-stories', function () {
    $blog = [
        'title' => 'From Struggle to Stability: Food Bank Success Stories',
        'excerpt' => 'Real stories of families who have transitioned from food insecurity to self-sufficiency through our community food network program and comprehensive support services.',
        'image' => 'food-security-network.png',
        'category' => 'Impact',
        'icon' => 'restaurant',
        'date' => 'November 20, 2024',
        'read_time' => 5,
        'views' => '1.9k',
        'author' => [
            'name' => 'Lisa Thompson',
            'role' => 'Food Security Program Manager',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'Breaking the Cycle of Food Insecurity'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Food insecurity affects more Australian families than many realize. Our comprehensive food security program goes beyond providing immediate relief – it offers pathways to long-term stability through education, training, and community support.'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Over the past two years, more than 300 families have transitioned from regular food bank users to self-sufficient households. Their stories demonstrate the transformative power of comprehensive support and community care.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Program Achievements',
                'items' => [
                    ['label' => '300+ families', 'description' => 'achieved self-sufficiency'],
                    ['label' => '85% success rate', 'description' => 'for program participants'],
                    ['label' => '50+ partnerships', 'description' => 'with local employment services'],
                    ['label' => '120 emergency food packages', 'description' => 'distributed weekly']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'A Family\'s Journey',
                'quote' => 'We came to the food bank because we couldn\'t afford groceries after my job loss. The program didn\'t just give us food – it helped me find new employment, provided cooking classes, and connected us with community resources. Now we\'re helping others in the same situation.',
                'cta' => [
                    'text' => 'Support Food Security Programs',
                    'link' => 'donate'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Community Garden Project',
                'excerpt' => 'Urban agriculture providing fresh produce to families.',
                'image' => 'food-security-network.png',
                'category' => 'Community',
                'route' => 'blog.community-garden'
            ],
            [
                'title' => 'Building Tomorrow\'s Leaders',
                'excerpt' => 'Volunteer development and leadership training.',
                'image' => 'education.jpg',
                'category' => 'Volunteers',
                'route' => 'blog.volunteer-development'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.food-security');

Route::get('/blog/volunteer-leadership-development', function () {
    $blog = [
        'title' => 'Building Tomorrow\'s Leaders: Our Volunteer Development Program',
        'excerpt' => 'How we\'re investing in our volunteers through comprehensive training programs that develop leadership skills and create lasting community impact across Australia.',
        'image' => 'education.jpg',
        'category' => 'Volunteers',
        'icon' => 'groups',
        'date' => 'November 15, 2024',
        'read_time' => 4,
        'views' => '2.2k',
        'author' => [
            'name' => 'Rachel Green',
            'role' => 'Volunteer Engagement Director',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'Investing in Volunteer Leadership'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Our volunteers are the heart of our organization. To ensure their continued growth and effectiveness, we\'ve developed comprehensive leadership training programs that transform enthusiastic helpers into skilled community leaders.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Training Program Impact',
                'items' => [
                    ['label' => '500+ volunteers', 'description' => 'completed leadership training'],
                    ['label' => '25 new community leaders', 'description' => 'emerged from our programs'],
                    ['label' => '15 local initiatives', 'description' => 'launched by trained volunteers'],
                    ['label' => '90% retention rate', 'description' => 'among trained volunteers']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'Join Our Volunteer Community',
                'quote' => 'Volunteering with NGO Australia isn\'t just about giving back – it\'s about growing as a leader and making a lasting difference in your community. Our training programs ensure you have the skills and support needed to create real change.',
                'cta' => [
                    'text' => 'Become a Volunteer',
                    'link' => 'volunteer'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Food Security Success Stories',
                'excerpt' => 'Stories of families achieving self-sufficiency.',
                'image' => 'food-security-network.png',
                'category' => 'Impact',
                'route' => 'blog.food-security'
            ],
            [
                'title' => 'Indigenous Youth Digital Skills',
                'excerpt' => 'Digital literacy training for Indigenous youth.',
                'image' => 'education.jpg',
                'category' => 'Education',
                'route' => 'blog.indigenous-youth'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.volunteer-development');

Route::get('/blog/climate-resilience-communities', function () {
    $blog = [
        'title' => 'Climate Resilience: Adapting Communities for a Sustainable Future',
        'excerpt' => 'Our comprehensive approach to climate adaptation, from coastal communities to inland towns, ensuring Australia remains resilient in the face of environmental change.',
        'image' => 'bush-fire-recovery.jpg',
        'category' => 'Climate',
        'icon' => 'storm',
        'date' => 'November 8, 2024',
        'read_time' => 9,
        'views' => '3.8k',
        'author' => [
            'name' => 'Dr. Michael Torres',
            'role' => 'Climate Adaptation Specialist',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'Building Climate-Resilient Communities'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Australia faces increasing climate challenges, from rising sea levels and extreme weather events to changing rainfall patterns. Our climate resilience program works with communities to build adaptive capacity and implement sustainable solutions for a changing world.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Climate Adaptation Initiatives',
                'items' => [
                    ['label' => '12 coastal communities', 'description' => 'protected with sea wall and drainage systems'],
                    ['label' => '500+ households', 'description' => 'equipped with rainwater harvesting systems'],
                    ['label' => '25 community gardens', 'description' => 'established with drought-resistant crops'],
                    ['label' => '30 emergency response teams', 'description' => 'trained for climate-related disasters']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'Your Support Matters',
                'quote' => 'Climate change is not a future threat – it\'s happening now. Your support helps communities adapt and thrive in the face of environmental challenges. Together, we can build a more resilient Australia.',
                'cta' => [
                    'text' => 'Support Climate Resilience',
                    'link' => 'donate'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Bushfire Recovery Hope Returns',
                'excerpt' => 'Forest regeneration and wildlife rehabilitation.',
                'image' => 'bush-fire-recovery.jpg',
                'category' => 'Environment',
                'route' => 'blog.bushfire-recovery'
            ],
            [
                'title' => 'Solar-Powered Learning',
                'excerpt' => 'Renewable energy solutions for remote education.',
                'image' => 'education.jpg',
                'category' => 'Technology',
                'route' => 'blog.solar-learning'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.climate-resilience');

Route::get('/blog/mobile-health-clinics', function () {
    $blog = [
        'title' => 'Breaking Barriers: Mobile Health Clinics Reach Remote Communities',
        'excerpt' => 'Our mobile health initiative bringing essential medical services to communities that have historically lacked adequate healthcare access across Australia\'s vast distances.',
        'image' => 'food-security-network.png',
        'category' => 'Health',
        'icon' => 'local_hospital',
        'date' => 'November 1, 2024',
        'read_time' => 6,
        'views' => '2.9k',
        'author' => [
            'name' => 'Dr. Sarah Williams',
            'role' => 'Healthcare Programs Director',
            'avatar' => 'logo-ngo.png'
        ],
        'sections' => [
            [
                'type' => 'heading',
                'content' => 'Healthcare Without Boundaries'
            ],
            [
                'type' => 'paragraph',
                'content' => 'Australia\'s vast distances create significant healthcare access challenges. Our mobile health clinics bring essential medical services directly to remote and underserved communities, ensuring that quality healthcare reaches those who need it most.'
            ],
            [
                'type' => 'highlight',
                'title' => 'Mobile Health Impact',
                'items' => [
                    ['label' => '15,000+ patients', 'description' => 'served in the past year'],
                    ['label' => '8 mobile clinics', 'description' => 'operating across regional areas'],
                    ['label' => '50+ healthcare professionals', 'description' => 'providing specialized care'],
                    ['label' => '85% of patients', 'description' => 'report improved health outcomes']
                ]
            ],
            [
                'type' => 'quote',
                'title' => 'Healthcare for All Australians',
                'quote' => 'Distance should never be a barrier to quality healthcare. Our mobile clinics ensure that every Australian, regardless of their location, has access to essential medical services and preventive care.',
                'cta' => [
                    'text' => 'Support Healthcare Access',
                    'link' => 'donate'
                ]
            ]
        ],
        'related' => [
            [
                'title' => 'Climate Resilience Communities',
                'excerpt' => 'Building adaptive capacity for environmental challenges.',
                'image' => 'bush-fire-recovery.jpg',
                'category' => 'Climate',
                'route' => 'blog.climate-resilience'
            ],
            [
                'title' => 'Food Security Success Stories',
                'excerpt' => 'Comprehensive support for families in need.',
                'image' => 'food-security-network.png',
                'category' => 'Impact',
                'route' => 'blog.food-security'
            ]
        ]
    ];
    return view('blog-detail', compact('blog'));
})->name('blog.mobile-health');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/annual-reports', function () {
    return view('annual-reports');
})->name('annual-reports');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function () {
    return view('terms-of-service');
})->name('terms-of-service');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login']);
Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/analytics', [App\Http\Controllers\AdminController::class, 'analytics'])->name('admin.analytics');

    // Volunteers Management
    Route::get('/admin/volunteers', [App\Http\Controllers\AdminController::class, 'volunteers'])->name('admin.volunteers');
    Route::get('/admin/volunteers/export', [App\Http\Controllers\AdminController::class, 'exportVolunteers'])->name('admin.volunteers.export');
    Route::patch('/admin/volunteers/{volunteer}/status', [App\Http\Controllers\AdminController::class, 'updateVolunteerStatus'])->name('admin.volunteers.update-status');
    Route::delete('/admin/volunteers/{volunteer}', [App\Http\Controllers\AdminController::class, 'destroyVolunteer'])->name('admin.volunteers.destroy');

    // Programs Management
    Route::get('/admin/programs', [App\Http\Controllers\AdminController::class, 'programs'])->name('admin.programs');
    Route::get('/admin/programs/export', [App\Http\Controllers\AdminController::class, 'exportPrograms'])->name('admin.programs.export');
    Route::post('/admin/programs', [App\Http\Controllers\AdminController::class, 'storeProgram'])->name('admin.programs.store');
    Route::patch('/admin/programs/{program}', [App\Http\Controllers\AdminController::class, 'updateProgram'])->name('admin.programs.update');
    Route::delete('/admin/programs/{program}', [App\Http\Controllers\AdminController::class, 'destroyProgram'])->name('admin.programs.destroy');

    // Blog Management
    Route::get('/admin/blog', [App\Http\Controllers\AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/admin/blog/create', [App\Http\Controllers\AdminController::class, 'createBlogPost'])->name('admin.blog.create');
    Route::get('/admin/blog/{post}/edit', [App\Http\Controllers\AdminController::class, 'editBlogPost'])->name('admin.blog.edit');
    Route::get('/admin/blog/export', [App\Http\Controllers\AdminController::class, 'exportBlogPosts'])->name('admin.blog.export');
    Route::post('/admin/blog', [App\Http\Controllers\AdminController::class, 'storeBlogPost'])->name('admin.blog.store');
    Route::patch('/admin/blog/{post}', [App\Http\Controllers\AdminController::class, 'updateBlogPost'])->name('admin.blog.update');
    Route::delete('/admin/blog/{post}', [App\Http\Controllers\AdminController::class, 'destroyBlogPost'])->name('admin.blog.destroy');

    // Donations Management
    Route::get('/admin/donations', [App\Http\Controllers\AdminController::class, 'donations'])->name('admin.donations');
    Route::get('/admin/donations/export', [App\Http\Controllers\AdminController::class, 'exportDonations'])->name('admin.donations.export');
    Route::delete('/admin/donations/{donation}', [App\Http\Controllers\AdminController::class, 'destroyDonation'])->name('admin.donations.destroy');

    // Contact Inquiries Management
    Route::get('/admin/contact-inquiries', [App\Http\Controllers\AdminController::class, 'contactInquiries'])->name('admin.contact-inquiries');
    Route::get('/admin/contact-inquiries/export', [App\Http\Controllers\AdminController::class, 'exportContactInquiries'])->name('admin.contact-inquiries.export');
    Route::patch('/admin/contact-inquiries/{inquiry}/status', [App\Http\Controllers\AdminController::class, 'updateInquiryStatus'])->name('admin.contact-inquiries.update-status');
    Route::delete('/admin/contact-inquiries/{inquiry}', [App\Http\Controllers\AdminController::class, 'destroyContactInquiry'])->name('admin.contact-inquiries.destroy');

    // Settings Management
    Route::get('/admin/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
    Route::patch('/admin/settings/profile', [App\Http\Controllers\AdminController::class, 'updateProfile'])->name('admin.settings.profile');
    Route::patch('/admin/settings/password', [App\Http\Controllers\AdminController::class, 'changePassword'])->name('admin.settings.password');
    Route::patch('/admin/settings/system', [App\Http\Controllers\AdminController::class, 'updateSystemSettings'])->name('admin.settings.system');
    Route::post('/admin/settings/reset', [App\Http\Controllers\AdminController::class, 'resetSettings'])->name('admin.settings.reset');
});

// Payment Routes
Route::post('/donate/submit', [App\Http\Controllers\DonationController::class, 'submit'])->name('donation.submit')->middleware('throttle:5,1');
Route::get('/payment/select', [App\Http\Controllers\DonationController::class, 'showPaymentSelection'])->name('payment.select');
Route::post('/payment/process', [App\Http\Controllers\PaymentController::class, 'process'])->name('payment.process')->middleware('throttle:5,1');
Route::get('/payment/success', [App\Http\Controllers\DonationController::class, 'showSuccess'])->name('donation.success');

// Stripe Payment Routes
Route::get('/payment/stripe', [App\Http\Controllers\PaymentController::class, 'showStripePayment'])->name('payment.stripe');
Route::post('/payment/stripe/process', [App\Http\Controllers\PaymentController::class, 'processStripePayment'])->name('payment.stripe.process')->middleware('throttle:5,1');

// Crypto Payment Routes
Route::get('/payment/crypto', [App\Http\Controllers\PaymentController::class, 'showCryptoPayment'])->name('payment.crypto');
Route::post('/payment/crypto/process', [App\Http\Controllers\PaymentController::class, 'processCryptoPayment'])->name('payment.crypto.process')->middleware('throttle:5,1');

// Flutterwave Payment Routes
Route::get('/payment/flutterwave', [App\Http\Controllers\PaymentController::class, 'showFlutterwavePayment'])->name('payment.flutterwave');
Route::post('/payment/flutterwave/verify', [App\Http\Controllers\PaymentController::class, 'verifyFlutterwavePayment'])->name('payment.flutterwave.verify')->middleware('throttle:10,1');



// NOWPayments Routes
Route::post('/payment/nowpayments/ipn', [App\Http\Controllers\PaymentController::class, 'handleNowPaymentsIPN'])->name('nowpayments.ipn');
