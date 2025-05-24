@extends('main')

@section('title', 'Courses - Happiness Factors')
@section('title', 'Trainings - Happiness Factors')
@section('description', 'Explore our Group Happiness Training designed to enhance team wellbeing and productivity through research-backed workshops.')
@section('keywords', 'Group Happiness Training, Team Wellbeing, Workplace Culture, Employee Engagement, Professional Development')
@section('og-image', asset('images/group-happiness-training.jpg'))
@section('og-title', 'Group Happiness Training - Happiness Factors')
@section('og-description', 'Enhance team wellbeing and productivity through our research-backed group happiness workshops that transform workplace culture.')
@section('og-url', url()->current())
@section('og-type', 'website')
@section('og-site-name', 'Happiness Factors')
@section('og-image-width', 1200)

@section('content')
<div class="container py-5"><br><br><br>
    @section('courses-header')
    <div class="text-center mb-5 position-relative pb-4">
        <div class="d-inline-block position-relative">
            <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=900&q=80" 
             alt="Happiness Courses Banner" 
             class="img-fluid rounded shadow-lg mb-4"
             style="max-height: 320px; object-fit: cover; border-radius: 10px;">
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary shadow" style="font-size: 1rem; padding: 0.7em 1.2em; left: 90%; top: 20%;">
            <i class="fa-solid fa-star"></i> New!
            </span>
        </div>
        <h1 class="display-4 font-weight-bold mt-3" style="color: #1565c0; letter-spacing: 2px;">
            <span style="background: linear-gradient(90deg, #bbdefb 40%, #e3f2fd 100%); padding: 0 15px; border-radius: 8px;">
                Discover Our Courses
            </span>
        </h1>
        <p class="lead mt-3 mb-4" style="color: #555; max-width: 600px; margin: 0 auto;">
            Unlock your potential and boost your happiness with our <span style="color: #1565c0; font-weight: 600;">expertly designed</span> courses.<br>
            <span style="color: #1976d2;"><i class="fa-solid fa-arrow-down"></i> Start your journey today!</span>
        </p>
    </div>
    @endsection

    @yield('courses-header')
    <div class="row justify-content-center">
        @php
        $courses = [
        [
        'title' => 'Effective Stress Management for Happiness',
        'desc' => 'Learn practical strategies to manage stress and cultivate lasting happiness in your daily life.',
        'icon' => 'fa-solid fa-spa',
        'color' => '#bbdefb',
        'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80'
        ],
        [
        'title' => 'Impactful Leadership',
        'desc' => 'Develop leadership skills that inspire, motivate, and drive positive change in any environment.',
        'icon' => 'fa-solid fa-chess-king',
        'color' => '#e3f2fd',
        'image' => 'https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&w=600&q=80'
        ],
        [
        'title' => 'Unshakeable Confidence and Breakthroughs',
        'desc' => 'Break through self-doubt and build unshakeable confidence to achieve your goals.',
        'icon' => 'fa-solid fa-bolt',
        'color' => '#90caf9',
        'image' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80'
        ],
        [
        'title' => 'Influence and Negotiation Success',
        'desc' => 'Master the art of influence and negotiation for personal and professional success.',
        'icon' => 'fa-solid fa-handshake',
        'color' => '#b3e5fc',
        'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80'
        ],
        [
        'title' => 'Managing Anxiety Effectively',
        'desc' => 'Discover techniques to manage anxiety and regain control of your emotional well-being.',
        'icon' => 'fa-solid fa-heartbeat',
        'color' => '#e1f5fe',
        'image' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80'
        ],
        ];
        @endphp

        @foreach($courses as $course)
        <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm border-0 w-100" style="background:rgb(161, 204, 182); border-radius: 10px;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}" style="height: 200px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="{{ $course['icon'] }} fa-3x" style="color: #1565c0;"></i>
                    </div>
                    <h5 class="card-title font-weight-bold" style="color: #0d47a1;">{{ $course['title'] }}</h5>
                    <p class="card-text" style="color: #333;">{{ $course['desc'] }}</p>
                    <a href="#" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Font Awesome CDN for icons (if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection