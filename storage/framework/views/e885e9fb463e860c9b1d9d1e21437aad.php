

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/products.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
    .products-hero {
        background: linear-gradient(rgba(30, 30, 60, 0.7), rgba(30, 30, 60, 0.7)),
        url("<?php echo e(asset('assets/img/business-bg.jpg')); ?>") no-repeat center center/cover;
        color: #fff;
        padding: 6rem 0 4rem 0;
        text-align: center;
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
<section class="products-hero">
    <div class="container">
        <h1 style="color: #fff; text-shadow: 2px 2px 8px rgba(30,30,60,0.7);">Happy Teams. Productive Minds. Profitable Outcomes.</h1>
        <p>Wellness that feels good—and works hard for your bottom line. 💼💫</p>
        <a href="#products" class="btn btn-secondary mt-3">Find Out How</a>
    </div>
</section>

<!-- Products Grid Section -->
<section class="products-section bg-gray-50 py-5" id="products">
    <div class="products-grid">

            <!-- Trainings -->
            <div class="product-card">
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
            <div class="product-card">
            <img src="https://images.pexels.com/photos/6373086/pexels-photo-6373086.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="App" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-mobile-alt"></i></span>
                    <div class="product-title">App</div>
                    <div class="product-desc">Keep your learning journey on track wherever you go. Access content, track progress, and get reminders on iOS and Android.</div>
                </div>
                <a href="products/app" class="product-btn">Get the App</a>
            </div>
        </div>

                <!-- Courses -->
                <div class="product-card">
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
        <div class="product-card">
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
        <div class="product-card">
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
        <div class="product-card">
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
        <div class="product-card">
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
        <div class="product-card">
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
        <div class="product-card">
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