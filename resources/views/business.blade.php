@extends('main')

@section('title', 'Business Solutions - HappinessFactors')
@section('subtitle', 'Enterprise Mental Wellness Solutions')
@section('content-title', 'Business Solutions')
@section('content-subtitle', 'Transform your workplace with our comprehensive mental wellness solutions')
@section('content-description', 'Discover how HappinessFactors can help your organization create a happier, more productive workplace through our innovative mental wellness solutions.')
@section('content-keywords', 'corporate wellness, mental health solutions, workplace wellness, employee wellbeing, business solutions')
@section('content-author', 'HappinessFactors')
@section('description', 'Transform your workplace with HappinessFactors comprehensive mental wellness solutions. Create a happier, more productive environment for your employees.')
@section('keywords', 'corporate wellness, mental health solutions, workplace wellness, employee wellbeing, business solutions')
@section('author', 'HappinessFactors')
@section('og')
<meta property="og:title" content="Business Solutions - HappinessFactors" />
<meta property="og:description" content="Transform your workplace with our comprehensive mental wellness solutions" />
<meta property="og:image" content="{{ asset('assets/img/Logo.png') }}" />
<meta property="og:url" content="{{ url('/business') }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="HappinessFactors" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="en_GB" />
<meta property="og:image:width" content="1200" />
@endsection

@section('content')
<!-- Hero Section -->
<section class="position-relative">
    <img class="bg-image" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Business Solutions">
    <div class="container hero hero-responsive" style="padding-top: 350px; margin-top: -100px;">
        <div class="row align-items-center z-index-2 position-relative">
            <div class="col-lg-6 text-white" style="margin-top: -100px;">
                <span class="badge badge-pill px-4 py-2 animated-badge mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Enterprise Solutions
                </span>
                <h1 class="display-4 mb-4 sparkle-text" style="font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-weight: 700; line-height: 1.1; letter-spacing: -1px; text-shadow: 2px 4px 16px rgba(0,0,0,0.45), 0 2px 8px #b6e0fe;">
                    Transform Your Workplace with <span style="color: #61009b; font-weight: 700;">Mental Wellness</span>
                </h1>
                <p class="lead mb-5" style="color: #ffffff; text-shadow: 1px 2px 8px rgba(0,0,0,0.35); font-weight: 500; text-align: justify;">
                    <mark style="font-size: 1.2rem; font-weight: 500; color: #ffffff; background-color: #61009b; padding: 10px 20px; border-radius: 5px; display: inline-block;">
                        Empower your employees with comprehensive mental wellness solutions designed for modern workplaces. Boost productivity, reduce stress, and create a positive work environment.
                    </mark>
                </p>
                <a href="#request-demo" class="btn btn-secondary scroll" style="color: #61009b; border-color: #ffffff; transition: background 0.2s, color 0.2s, border-color 0.2s; border: 2px solid #61009b;"
                    onmouseover="this.style.background='#61009b';this.style.color='#fff';this.style.borderColor='#61009b';"
                    onmouseout="this.style.background='';this.style.color='#61009b';this.style.borderColor='#61009b';">
                    Request a Demo
                </a>
            </div>
        </div>
    </div>
    <div class="curved-decoration">
        <div class="curved-decoration decoration-bottom bottom-n1">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">
                <path fill="#f3f5f8" opacity="0.3" d="M0,43V18.7c0,0,131.8-13.9,269.2,20.9C407.2,60,600.3-13.9,800,27.8V43H0z" />
                <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z" />
            </svg>
        </div>
    </div>
</section>

<!-- Key Benefits Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Why Choose Us
                </span>
                <h2 class="display-4 mb-3">Key Benefits</h2>
                <p class="lead">Transform your organization with our proven mental wellness solutions</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player src="https://lottie.host/95d66b27-0b18-49e7-bbba-2c0b4c2ce63c/bvPbkHC8Xb.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
                        </div>
                        <h3 class="h4 mb-3">Increased Productivity</h3>
                        <p class="text-muted">Our solutions have been proven to increase employee productivity by up to 30% through improved mental wellbeing and reduced stress levels.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                        <dotlottie-player src="https://lottie.host/ac641aab-2275-407b-bf35-448d2bfd3031/tTR4INeq7k.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
                        </div>
                        <h3 class="h4 mb-3">Better Team Collaboration</h3>
                        <p class="text-muted">Foster a positive work environment that encourages open communication and stronger team relationships.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                        <dotlottie-player src="https://lottie.host/3de26b4a-2ae2-4fbb-bb29-3a2ce6eeb654/yo0sfxKRv1.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
                        </div>
                        <h3 class="h4 mb-3">Reduced Absenteeism</h3>
                        <p class="text-muted">Companies using our solutions report up to 40% reduction in stress-related absenteeism and improved employee retention.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Our Solutions
                </span>
                <h2 class="display-4 mb-3">Comprehensive Mental Wellness Solutions</h2>
                <p class="lead">Tailored solutions for every organization's unique needs</p>
            </div>
        </div>

        <div class="row">
            <!-- Employers -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-building fa-2x" style="color: #61009b;"></i>
                        </div>
                        <h3 class="h4 mb-3">For Employers</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Employee Wellness Programs</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Stress Management Tools</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Productivity Enhancement</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Team Building Activities</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Leadership Development</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Work-Life Balance Support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Consultants -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-user-tie fa-2x" style="color: #61009b;"></i>
                        </div>
                        <h3 class="h4 mb-3">For Consultants</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Professional Development</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Client Management Tools</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Resource Library</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Networking Opportunities</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Certification Programs</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Business Growth Support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Health Plans -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-heartbeat fa-2x" style="color: #61009b;"></i>
                        </div>
                        <h3 class="h4 mb-3">For Health Plans</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Integrated Care Solutions</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Preventive Care Tools</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Outcome Tracking</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Member Engagement</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Cost Reduction Programs</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Quality Metrics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Team Collaboration" class="img-fluid rounded-lg shadow-lg">
            </div>
            <div class="col-lg-6">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Key Features
                </span>
                <h2 class="display-4 mb-4">Comprehensive Wellness Platform</h2>
                <div class="feature-list">
                    <div class="d-flex mb-4">
                        <div class="feature-icon mr-3">
                            <i class="fas fa-mobile-alt fa-2x" style="color: #61009b;"></i>
                        </div>
                        <div>
                            <h4 class="h5 mb-2">Mobile-First Design</h4>
                            <p class="text-muted mb-0">Access wellness tools and resources anytime, anywhere through our intuitive mobile platform.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="feature-icon mr-3">
                            <i class="fas fa-chart-bar fa-2x" style="color: #61009b;"></i>
                        </div>
                        <div>
                            <h4 class="h5 mb-2">Analytics Dashboard</h4>
                            <p class="text-muted mb-0">Track progress and measure impact with detailed analytics and reporting tools.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="feature-icon mr-3">
                            <i class="fas fa-lock fa-2x" style="color: #61009b;"></i>
                        </div>
                        <div>
                            <h4 class="h5 mb-2">Enterprise Security</h4>
                            <p class="text-muted mb-0">Bank-level security and compliance with industry standards for data protection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Success Stories
                </span>
                <h2 class="display-4 mb-3">What Our Clients Say</h2>
                <p class="lead">Join hundreds of satisfied organizations using our solutions</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"HappinessFactors has transformed our workplace culture. Our employees are more engaged and productive than ever. The mental wellness tools have been a game-changer for our organization."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Client" class="rounded-circle mr-3" width="50">
                            <div>
                                <h5 class="mb-0">Sarah Johnson</h5>
                                <small class="text-muted">HR Director, TechCorp</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"The mental wellness tools provided by HappinessFactors have been invaluable for our consulting practice. Our clients love the comprehensive approach to employee wellbeing."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Client" class="rounded-circle mr-3" width="50">
                            <div>
                                <h5 class="mb-0">Michael Chen</h5>
                                <small class="text-muted">Lead Consultant, WellnessPro</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"As a health plan provider, we've seen remarkable improvements in member satisfaction since implementing HappinessFactors. The platform's analytics have helped us optimize our wellness programs."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Client" class="rounded-circle mr-3" width="50">
                            <div>
                                <h5 class="mb-0">Emily Rodriguez</h5>
                                <small class="text-muted">Director, HealthFirst</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Request Demo Form Section -->
<section id="request-demo" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                                Get Started
                            </span>
                            <h2 class="display-4 mb-3">Request a Demo</h2>
                            <p class="lead">Experience how HappinessFactors can transform your organization</p>
                        </div>

                        <form action="{{ route('request.demo') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="work_email" class="form-label">Work Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="work_email" name="work_email" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="job_title" class="form-label">Job Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="job_title" name="job_title" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="company_size" class="form-label">Company Size <span class="text-danger">*</span></label>
                                    <select class="form-control" id="company_size" name="company_size" required style="height: 50%;">
                                        <option value="">Select company size</option>
                                        <option value="1-50">1-50 employees</option>
                                        <option value="51-200">51-200 employees</option>
                                        <option value="201-500">201-500 employees</option>
                                        <option value="501-1000">501-1000 employees</option>
                                        <option value="1000+">1000+ employees</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5" style="background: linear-gradient(90deg,#4B0082,#9400D3); border: none;">
                                        Request Demo
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Form validation
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection