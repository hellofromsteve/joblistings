<script setup>




</script>

<template>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-transparent dark">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#"><img src="/public/homeassets/img/logo.png" class="logo"
                                alt="Logo"></a>
                        <div class="nav-toggle"></div>
                        <div class="mobile_nav">
                            <ul>
                                <li class="list-buttons">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#login">
                                        <i class="fas fa-sign-in-alt me-2"></i>Log In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">
                            <li :class="{ active: $page.component === 'Guest/Home' }">
                                <Link :href="route('home')">Home</Link>
                            </li>
                            <li :class="{ active: $page.component === 'Guest/Jobs' }">
                                <Link :href="route('job.view')">All Jobs</Link>
                            </li>

                            <li :class="{ active: $page.component === 'Guest/About' }">
                                <Link :href="route('about')">About Us</Link>
                            </li>
                            <li :class="{ active: $page.component === 'Guest/ContatUs' }">
                                <Link href="#">Contact Us</Link>
                            </li>
                            <li :class="{ active: $page.component === 'Guest/Help' }">
                                <Link href="#">Help</Link>
                            </li>
                            <li :class="{ active: $page.component === 'Guest/Blog' }">
                                <Link href="#">Blog</Link>
                            </li>

                        </ul>




                        <ul class="nav-menu nav-menu-social align-to-right">

                            <li>
                                <Link :href="route('login')"><i class="fas fa-sign-in-alt me-2"></i>Sign In</Link>
                            </li>
                            <li class="list-buttons ms-2">
                                <Link :href="route('register')"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Get
                                Started
                                </Link>
                            </li>



                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->

        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <slot />


        <!-- ============================ Footer Start ================================== -->
        <footer class="footer skin-dark-footer">
            <div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <img src="/public/homeassets/img/logo-light.png" class="img-footer" alt="Footer Logo">
                                <div class="footer-add">
                                    <p>Collins Street West, Victoria Near Bank Road<br>Australia QHR12456.</p>
                                </div>
                                <div class="foot-socials">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">For Clients</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Talent Marketplace</a></li>
                                    <li><a href="#">Payroll Services</a></li>
                                    <li><a href="#">Direct Contracts</a></li>
                                    <li><a href="#">Hire Worldwide</a></li>
                                    <li><a href="#">Hire in the USA</a></li>
                                    <li><a href="#">How to Hire</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">Our Resources</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Free Business tools</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Success Stories</a></li>
                                    <li><a href="#">Upwork Reviews</a></li>
                                    <li><a href="#">Resources</a></li>
                                    <li><a href="#">Help & Support</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">The Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Trust, Safety & Security</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Download Apps</h4>
                                <div class="app-wrap">
                                    <p><a href="#"><img src="/public/homeassets/img/google-app.png" class="img-fluid"
                                                alt="Google App"></a></p>
                                    <p><a href="#"><img src="/public/homeassets/img/ios-app.png" class="img-fluid"
                                                alt="iOS App"></a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center justify-content-between">

                        <div class="col-xl-4 col-lg-5 col-md-5">
                            <p class="mb-0">© 2015 - 2023 Job Stock® Themezhub.</p>
                        </div>

                        <div class="col-xl-8 col-lg-7 col-md-7">
                            <div class="job-info-count-group">
                                <div class="single-jb-info-count">
                                    <div class="jbs-y7">
                                        <h5 class="ctr">12</h5><span class="primary-2-cl">K</span>
                                    </div>
                                    <div class="jbs-y5">
                                        <p>Job Posted</p>
                                    </div>
                                </div>
                                <div class="single-jb-info-count">
                                    <div class="jbs-y7">
                                        <h5 class="ctr">10</h5><span class="primary-2-cl">M</span>
                                    </div>
                                    <div class="jbs-y5">
                                        <p>Happy Customers</p>
                                    </div>
                                </div>
                                <div class="single-jb-info-count">
                                    <div class="jbs-y7">
                                        <h5 class="ctr">76</h5><span class="primary-2-cl">K</span>
                                    </div>
                                    <div class="jbs-y5">
                                        <p>Freelancers</p>
                                    </div>
                                </div>
                                <div class="single-jb-info-count">
                                    <div class="jbs-y7">
                                        <h5 class="ctr">200</h5><span class="primary-2-cl">+</span>
                                    </div>
                                    <div class="jbs-y5">
                                        <p>Companies</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
</template>
