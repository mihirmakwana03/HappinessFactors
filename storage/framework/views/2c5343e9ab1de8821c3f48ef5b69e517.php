

<?php $__env->startSection('title', 'Business Solutions'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="gradient-overlay gradient-overlay-dark" style='background: url("<?php echo e(asset('assets/img/business-bg.jpg')); ?>") no-repeat center center/cover;'>
    <div class="container hero hero-responsive text-center text-white py-7">
        <h1 class="display-4 mb-3">Happy Teams. Productive Minds. Profitable Outcomes.
        </h1>
        <p class="lead">Wellness that feels good—and works hard for your bottom line. 💼💫</p>
        <a href="#connect" class="btn btn-secondary mt-3">Find Out How</a>
    </div>
</section>

<!-- Offerings Section -->
<section class="spacer-double-lg">
    <div class="container">
        <h2 class="text-center mb-4">Business Services</h2>
        <p class="text-center mb-5 w-md-60 mx-auto">We collaborate with businesses to design personalized solutions for team development, emotional wellness, and leadership growth.</p>

        <div class="row text-center">
            <div class="col-md-4 mb-5">
                <img src="<?php echo e(asset('assets/img/icons/enterprise.svg')); ?>" class="mb-3" alt="" style="width:60px;">
                <h5>Enterprise Solutions</h5>
                <p>Leadership coaching, executive development, and organizational wellness strategies for thriving workplaces.</p>
            </div>
            <div class="col-md-4 mb-5">
                <img src="<?php echo e(asset('assets/img/icons/team.svg')); ?>" class="mb-3" alt="" style="width:60px;">
                <h5>Team Coaching</h5>
                <p>Build connection, alignment, and collaboration through interactive group coaching programs.</p>
            </div>
            <div class="col-md-4 mb-5">
                <img src="<?php echo e(asset('assets/img/icons/wellness.svg')); ?>" class="mb-3" alt="" style="width:60px;">
                <h5>Corporate Wellness</h5>
                <p>Mental, physical, and emotional wellbeing workshops designed to energize your workforce.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-light spacer-double-lg">
    <div class="container">
        <h2 class="text-center mb-4">Why Choose Happiness Factors?</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <h6 class="font-weight-bold">Scientifically Proven Methods</h6>
                <p>We combine psychology, mindfulness, and coaching science for real, lasting impact.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h6 class="font-weight-bold">Customized For You</h6>
                <p>Each program is tailored to your culture, goals, and team dynamics.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h6 class="font-weight-bold">Global Experience</h6>
                <p>We’ve helped teams around the world unlock human potential through happiness.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="spacer-double-lg">
    <div class="container text-center">
        <h2 class="mb-5">What Our Partners Say</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="blockquote">
                    <p class="mb-4">"The workshops were transformative. Our team is more resilient, focused, and united than ever."</p>
                    <footer class="blockquote-footer">HR Director, <cite title="Company Name">ZenTech Solutions</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section id="connect" class="bg-primary text-white text-center spacer-double-lg">
    <div class="container">
        <h2 class="mb-3">Let’s Build a Happier Workplace</h2>
        <p class="mb-4">Contact us to design a customized corporate program that works for your team.</p>
        <a href="#appointment" class="btn btn-light">Book a Free Consultation</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\happiness-factors\resources\views/business.blade.php ENDPATH**/ ?>