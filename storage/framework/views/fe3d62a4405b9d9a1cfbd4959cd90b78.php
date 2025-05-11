    <footer class="footer bg-primary-2 o-hidden">
        <div class="curved-decoration">
            <div class=" curved-decoration decoration-top top-n1">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">
                    <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"></path>
                    <path fill="#f3f5f8" opacity="0.3"
                        d="M0,43V18.7c0,0,131.8-13.9,269.2,20.9C407.2,60,600.3-13.9,800,27.8V43H0z"></path>
                </svg>
            </div>
        </div>
        <div class="container spacer-one-bottom-lg spacer-xl-top">
            <div class="row text-center">
                <div class="col mb-6 mt-6 mt-lg-0">
                    <img id="footerLogo" class="w-25 opacity-1" src="assets/img/Logo.png" alt="">
                </div>
            </div>
            <div class="row align-items-md-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="d-flex align-items-center">
                        <p class="font-size-13 mb-0 text-light">
                            &copy; <?php echo e(date('Y')); ?> HappinessFactors. All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 mb-sm-0 text-md-center">
                    <ul class="list-inline mb-0 font-size-14">
                        <li class="list-inline-item mr-3">
                            <a href="/terms-and-conditions" class="text-light" target="_blank">Terms &amp; Conditions</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/privacy-policy" class="text-light" target="_blank">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-4 col-sm-6"></div> -->
                <ul class="list-inline text-sm-right mb-0 font-size-14 mn-top">
                    <li class="list-inline-item mr-1">
                        <a class="btn btn-social btn-icon btn-social-dark" href="https://www.facebook.com/HappinessFactors/" target="_blank">
                            <span class="fab fa-facebook-f btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="btn btn-social btn-icon btn-social-dark" href="https://twitter.com/happinessfaster" target="_blank">
                            <span class="fab fa-twitter btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="btn btn-social btn-icon btn-social-dark" href="https://www.instagram.com/happinessfactors/" target="_blank">
                            <span class="fab fa-instagram btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="btn btn-social btn-icon btn-social-dark" href="https://www.youtube.com/channel/UCicqa9p-mkaO5wUL2lllkrQ" target="_blank">
                            <span class="fab fa-youtube btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="btn btn-social btn-icon btn-social-dark" href="https://www.linkedin.com/company/happinessfactors/" target="_blank">
                            <span class="fab fa-linkedin btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="btn btn-social btn-icon btn-social-dark" href="https://www.tumblr.com/happinessfactors" target="_blank">
                            <span class="fab fa-tumblr btn-icon-inner"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </footer>

    <style>
        #footerLogo {
            opacity: 1;
            filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.7));
            animation: logoAnimation 3s infinite alternate;
        }

        @keyframes logoAnimation {
            0% {
                transform: scale(1);
                filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.7));
            }

            50% {
                transform: scale(1.05);
                filter: drop-shadow(2px 2px 4px rgba(78, 71, 57, 0.7));
            }

            100% {
                transform: scale(1);
                filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.7));
            }
        }
    </style><?php /**PATH C:\Users\LENOVO\Desktop\happiness-factors\resources\views/components/footer.blade.php ENDPATH**/ ?>