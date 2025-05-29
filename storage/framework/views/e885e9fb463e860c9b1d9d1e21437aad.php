

<?php $__env->startSection('title', 'Products - Happiness Factors'); ?>
<?php $__env->startSection('description', 'Explore our range of products designed to enhance well-being and productivity. From training programs to wellness retreats, discover how we can support your journey towards a happier workplace.'); ?>
<?php $__env->startSection('keywords', 'Happiness Factors, Products, Training, App, Courses, Coaching, Webinars, Seminars, Workshops, Offsites, Retreats'); ?>
<?php $__env->startSection('canonical', url()->current()); ?>
<?php $__env->startSection('og-title', 'Happiness Factors - Products'); ?>
<?php $__env->startSection('og-description', 'Explore our range of products designed to enhance well-being and productivity. From training programs to wellness retreats, discover how we can support your journey towards a happier workplace.'); ?>
<?php $__env->startSection('og-image', asset('assets/img/business-bg.jpg')); ?>
<?php $__env->startSection('og-url', url()->current()); ?>
<?php $__env->startSection('og-type', 'website'); ?>
<?php $__env->startSection('og-site_name', 'Happiness Factors'); ?>
<?php $__env->startSection('og-image-width', '1200'); ?>
<?php $__env->startSection('og-image-height', '630'); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/products.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
    body {
        padding-top: 70px;
    }

    .products-hero {
        background: linear-gradient(rgba(30, 30, 60, 0.7), rgba(30, 30, 60, 0.7)),
        url("<?php echo e(asset('assets/img/business-bg.jpg')); ?>") no-repeat center center/cover;
        color: #fff;
        padding: 6rem 0 4rem 0;
        text-align: center;
        height: 100vh;
        margin-top: -50px;
        /* Adjusted for fixed navbar */
        position: relative;
    }

    .products-hero h1 {
        font-size: 2.8rem;
        font-weight: 800;
        margin-bottom: 1rem;
        letter-spacing: 1px;
    }

    .products-hero p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2.5rem;
        margin: 0 auto;
        max-width: 1200px;
        padding: 3rem 1rem;
    }

    .product-card {
        background: #fff;
        border-radius: 1.2rem;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.18s;
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-8px) scale(1.025);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.13);
    }

    .product-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .product-content {
        padding: 2rem 1.5rem 1.5rem 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product-icon {
        font-size: 2.5rem;
        color: #4f46e5;
        margin-bottom: 1rem;
    }

    .product-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.7rem;
    }

    .product-desc {
        font-size: 1.05rem;
        color: #444;
        margin-bottom: 1.2rem;
    }

    .product-btn {
        align-self: flex-start;
        background: #4f46e5;
        color: #fff;
        border: none;
        border-radius: 0.5rem;
        padding: 0.6rem 1.3rem;
        font-weight: 600;
        font-size: 1rem;
        transition: background 0.18s;
        text-decoration: none;
    }

    .product-btn:hover {
        background: #3730a3;
        color: #fff;
    }

    @media (max-width: 600px) {
        .products-hero h1 {
            font-size: 2rem;
        }

        .products-grid {
            padding: 2rem 0.5rem;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="products-hero" id="services" style="display: flex; align-items: center; justify-content: center; min-height: 70vh; background-blend-mode: overlay; box-shadow: 0 8px 32px rgba(0,0,0,0.35);">
    <div class="container" style="max-width: 700px; background: rgba(34, 34, 60, 0.65); border-radius: 1.5rem; padding: 3rem 2rem; box-shadow: 0 8px 32px rgba(0,0,0,0.18); z-index: 1000;">
        <h1 style="color: #fff; font-size: 2.7rem; font-weight: 900; margin-bottom: 1.2rem; letter-spacing: 1.5px; text-shadow: 0 4px 24px rgba(30,30,60,0.5);">
            <span style="color: #ffd700;">Happy Teams.</span> <span style="color: #00e6d0;">Productive Minds.</span> <span style="color: #ff6f61;">Profitable Outcomes.</span>
        </h1>
        <p style="font-size: 1.35rem; color: #e0e0e0; margin-bottom: 2.2rem; line-height: 1.7;">
            Wellness that <span style="color:#ffd700;font-weight:600;">feels good</span>—and <span style="color:#00e6d0;font-weight:600;">works hard</span> for your bottom line.<br>
            <span style="font-size:1.7rem;">💼 <span style="color:#ffd700;">✨</span> <span style="color:#00e6d0;">😊</span></span>
        </p>
        <a href="#products"
           class="product-btn"
           style="font-size: 1.15rem; padding: 0.85rem 2.2rem; border-radius: 2rem; background: linear-gradient(90deg, #61009b 0%, #4f46e5 100%); border: none; color: #fff; font-weight: 700; box-shadow: 0 2px 12px rgba(97,0,155,0.18); letter-spacing: 1px; transition: background 0.2s, transform 0.18s;"
           onmouseover="this.style.background='linear-gradient(90deg,#4f46e5 0%,#61009b 100%)';this.style.transform='scale(1.05)';"
           onmouseout="this.style.background='linear-gradient(90deg,#61009b 0%,#4f46e5 100%)';this.style.transform='scale(1)';">
            Find Out How <i class="fas fa-arrow-down" style="margin-left: 0.5rem;"></i>
        </a>
        <div style="margin-top:2.5rem; display:flex; justify-content:center; gap:1.5rem;">
            <div style="display:flex; flex-direction:column; align-items:center;">
                <i class="fas fa-heartbeat" style="color:#ff6f61; font-size:2.2rem;"></i>
                <span style="color:#fff; font-size:1rem; margin-top:0.3rem;">Well-being</span>
            </div>
            <div style="display:flex; flex-direction:column; align-items:center;">
                <i class="fas fa-lightbulb" style="color:#ffd700; font-size:2.2rem;"></i>
                <span style="color:#fff; font-size:1rem; margin-top:0.3rem;">Innovation</span>
            </div>
            <div style="display:flex; flex-direction:column; align-items:center;">
                <i class="fas fa-users" style="color:#00e6d0; font-size:2.2rem;"></i>
                <span style="color:#fff; font-size:1rem; margin-top:0.3rem;">Teamwork</span>
            </div>
            <div style="display:flex; flex-direction:column; align-items:center;">
                <i class="fas fa-chart-line" style="color:#4f46e5; font-size:2.2rem;"></i>
                <span style="color:#fff; font-size:1rem; margin-top:0.3rem;">Growth</span>
            </div>
        </div>
    </div>
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(30,30,60,0.55); box-shadow: 0 8px 32px rgba(0,0,0,0.35); pointer-events:none; z-index:0;"></div>
</section>

<!-- Products Grid Section -->
<section class="products-section bg-gray-50 py-5" id="products">
    <div class="products-grid">

        <!-- Trainings -->
        <div class="product-card" id="trainings">
            <img src="https://images.pexels.com/photos/1181355/pexels-photo-1181355.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Trainings" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-users-cog"></i></span>
                    <div class="product-title">Trainings</div>
                    <div class="product-desc">Custom training programs for organizations and teams. Interactive, results-oriented sessions on leadership and technical skills.</div>
                </div>
                <a href="products/trainings" class="product-btn">Book Training</a>
            </div>
        </div>

        <!-- App -->
        <div class="product-card" id="app">
            <img src="../assets/img/products/app.jpg" alt="App" class="product-img" style="object-fit:contain;">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-mobile-alt"></i></span>
                    <div class="product-title">App</div>
                    <div class="product-desc">Keep your learning journey on track wherever you go. Access content, track progress, and get reminders on iOS and Android.</div>
                </div>
                <a href="https://apps.apple.com/us/app/happiness-factors/id1575587044?platform=iphone" class="product-btn">Get the App</a>
            </div>
        </div>

        <!-- Courses -->
        <div class="product-card" id="courses">
            <img src="https://images.pexels.com/photos/4443162/pexels-photo-4443162.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Courses" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-graduation-cap"></i></span>
                    <div class="product-title">Courses</div>
                    <div class="product-desc">Structured online courses with comprehensive lessons, practical exercises, and assessments. Learn at your own pace with expert guidance.</div>
                </div>
                <a href="products/courses" class="product-btn">Browse Courses</a>
            </div>
        </div>

        <!-- Coaching -->
        <div class="product-card" id="coaching">
            <img src="https://images.pexels.com/photos/1181715/pexels-photo-1181715.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Coaching" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-user-tie"></i></span>
                    <div class="product-title">Coaching</div>
                    <div class="product-desc">Personalized coaching for individuals and teams. Our experienced coaches provide one-on-one guidance, support, and accountability for lasting growth.</div>
                </div>
                <a href="products/coaching" class="product-btn">Learn More</a>
            </div>
        </div>




        <!-- Webinars -->
        <div class="product-card" id="webinars">
            <img src="https://images.pexels.com/photos/3727459/pexels-photo-3727459.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Webinars" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-video"></i></span>
                    <div class="product-title">Webinars</div>
                    <div class="product-desc">Live online webinars with Q&A, expert presentations, and interactive discussions—all from your home or office.</div>
                </div>
                <a href="products/webinars" class="product-btn">Join a Webinar</a>
            </div>
        </div>

        <!-- Seminars -->
        <div class="product-card" id="seminars">
            <img src="https://images.pexels.com/photos/3321796/pexels-photo-3321796.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Seminars" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                    <div class="product-title">Seminars</div>
                    <div class="product-desc">In-person seminars with industry leaders. Learn, network, and gain hands-on knowledge in a collaborative environment.</div>
                </div>
                <a href="products/seminars" class="product-btn">View Seminars</a>
            </div>
        </div>

        <!-- Workshops -->
        <div class="product-card" id="workshops">
            <img src="https://images.pexels.com/photos/3184328/pexels-photo-3184328.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Workshops" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-tools"></i></span>
                    <div class="product-title">Workshops</div>
                    <div class="product-desc">Hands-on workshops for practical skill-building and real-world problem solving. Collaborate and apply new techniques.</div>
                </div>
                <a href="products/workshops" class="product-btn">See Workshops</a>
            </div>
        </div>



        <!-- Offsites -->
        <div class="product-card" id="offsites">
            <img src="https://images.pexels.com/photos/7551465/pexels-photo-7551465.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Offsites" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-mountain"></i></span>
                    <div class="product-title">Offsites</div>
                    <div class="product-desc">Corporate offsite events for team-building, strategy, and renewal. Foster collaboration in inspiring environments.</div>
                </div>
                <a href="products/offsites" class="product-btn">Plan Offsite</a>
            </div>
        </div>

        <!-- Retreats -->
        <div class="product-card" id="retreats">
            <img src="https://images.pexels.com/photos/31925758/pexels-photo-31925758.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Retreats" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-leaf"></i></span>
                    <div class="product-title">Retreats</div>
                    <div class="product-desc">Focused retreat experiences in serene locations. Combine learning, relaxation, and personal development in nature.</div>
                </div>
                <a href="products/retreats" class="product-btn">Explore Retreats</a>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\happiness-factors\resources\views/products.blade.php ENDPATH**/ ?>