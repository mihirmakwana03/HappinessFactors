<header class="header default">
    <div class="header-section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg header-navbar ml-0 ml-lg-5">
                <a class="navbar-brand navbar-logo scroll" href="/">
                    <img class="mb-0 logo-light" src="<?php echo e(asset('assets/img/Logo.png')); ?>" alt="Logo Light">
                    <img class="mb-0 logo-dark" src="<?php echo e(asset('assets/img/Logo.png')); ?>" alt="Logo Dark">
                </a>
                <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-menu collapse navbar-collapse justify-content-end mr-5">
                    <ul class="navbar-nav header-navbar-nav">
                        <li><a class="nav-link scroll" href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/products" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu" aria-labelledby="productsDropdown">
                                <a class="dropdown-item" href="<?php echo e(url('products/#coaching')); ?>">
                                    <i class="fa fa-user-graduate mr-2"></i> Coaching
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('products/#courses')); ?>">
                                    <i class="fa fa-book-open mr-2"></i> Courses
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('products/#app')); ?>">
                                    <i class="fa fa-mobile-alt mr-2"></i> App
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('products/#webinars')); ?>">
                                    <i class="fa fa-video mr-2"></i> Webinars
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('products/#seminars')); ?>">
                                    <i class="fa fa-chalkboard-teacher mr-2"></i> Seminars
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('products/#workshops')); ?>">
                                    <i class="fa fa-wrench mr-2"></i> Workshops
                                </a>
                            </div>
                        </li>
                        <li><a class="nav-link scroll" href="<?php echo e(url('/quiz')); ?>">Quiz</a></li>
                        <li><a class="nav-link scroll" href="<?php echo e(url('/#why-us')); ?>">Why Us</a></li>
                        <li><a class="nav-link scroll" href="#testimonials">Testimonials</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#about" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="<?php echo e(url('/#about-us')); ?>">
                                    <i class="fa fa-info-circle mr-2"></i> About Us
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('/#our-story')); ?>">
                                    <i class="fa fa-book mr-2"></i> Our Story
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('/#why-us')); ?>">
                                    <i class="fa fa-question-circle mr-2"></i> Why Us
                                </a>
                            </div>
                        </li>
                        <li><a class="nav-link scroll" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<style>
    .header {
        /* position: fixed; */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        /* background-color: #1a1a1a; */
    }

    .navbar-logo img {
        width: 235.6px;
        height: 80px;
        opacity: 1;
        filter: drop-shadow(4px 4px 8px rgba(255, 255, 255, 0.7));
        animation: logoAnimation 3s infinite alternate;
    }

    @keyframes logoAnimation {
        0% {
            transform: scale(1);
            filter: drop-shadow(4px 4px 8px rgba(255, 255, 255, 0.7));
        }

        50% {
            transform: scale(1.05);
            filter: drop-shadow(2px 2px 4px rgba(255, 255, 255, 0.7));
        }

        100% {
            transform: scale(1);
            filter: drop-shadow(4px 4px 8px rgba(255, 255, 255, 0.7));
        }
    }

    .nav-link:hover {
        color: #f6dfb3;
    }

    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    .dropdown-menu a:hover {
        color: #f56c6d;
    }
</style><?php /**PATH C:\Users\LENOVO\Desktop\happiness-factors\resources\views/components/navbar.blade.php ENDPATH**/ ?>