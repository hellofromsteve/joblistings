<script setup>

defineProps({
    listings: Object,
})

</script>
<template>

    <Head title="All Jobs |" />

    {{ console.log(listings) }}
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title bg-cover primary-bg-dark"
        style="background:url(/public/homeassets/img/bg2.png) no-repeat; margin-top: 6%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="full-search-2">
                        <div class="hero-search-content search-shadow">

                            <div class="row classic-search-box m-0 gx-2">

                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group briod">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control"
                                                placeholder="Skills, Designations, Keyword">
                                            <i class="fa-solid fa-magnifying-glass text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group briod">
                                        <div class="input-with-icon">
                                            <select class="form-control">
                                                <option value="1">Job Category</option>
                                                <option value="2">Accounting & Finance</option>
                                                <option value="3">Automotive Jobs</option>
                                                <option value="4">Business Services</option>
                                                <option value="5">Education Training</option>
                                                <option value="6">Software Application</option>
                                                <option value="7">Restaurant & Food</option>
                                                <option value="8">Healthcare</option>
                                                <option value="9">Transportation</option>
                                                <option value="10">Telecommunications</option>
                                            </select>
                                            <i class="fa-solid fa-briefcase text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <select class="form-control">
                                                <option value="1">Select City</option>
                                                <option value="2">Huntingdon</option>
                                                <option value="3">Fenland</option>
                                                <option value="4">United State</option>
                                                <option value="5">United Kingdom</option>
                                                <option value="6">California</option>
                                                <option value="7">Canada</option>
                                                <option value="8">New York</option>
                                            </select>
                                            <i class="fa-solid fa-location-crosshairs text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="fliox-search-wiop">
                                        <div class="form-group me-2">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                                data-bs-target="#filter" class="btn btn-filter-search"><i
                                                    class="fa-solid fa-filter"></i>Filter</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary full-width">Search</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ All List Wrap ================================== -->
    <section class="gray-simple">

        <div class="container">

            <div class="row">



                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column">
                                        <h4 class="m-sm-0 mb-2">Showing 1 - 10 of 20 Results</h4>
                                    </div>
                                </div>
                                <div class="item-shorting-box-right">
                                    <div class="shorting-by me-2 small">
                                        <select>
                                            <option value="0">Short by (Default)</option>
                                            <option value="1">Short by (Featured)</option>
                                            <option value="2">Short by (Urgent)</option>
                                            <option value="3">Short by (Post Date)</option>
                                        </select>
                                    </div>
                                    <div class="shorting-by small">
                                        <select>
                                            <option value="0">10 Per Page</option>
                                            <option value="1">20 Per Page</option>
                                            <option value="2">50 Per Page</option>
                                            <option value="3">10 Per Page</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="Object.keys(listings).length" class="row justify-content-center gx-xl-3 gx-3 gy-4">

                        <!-- Single Item -->
                        <div v-for="listing in listings" :key="listing.id" class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="jbs-grid-layout style_2 border">
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-content">
                                        <div class="jbs-grid-emp-thumb jbs-verified"><a href="job-detail.html">
                                                <figure><img src="https://placehold.co/200x200" class="img-fluid"
                                                        alt=""></figure>
                                            </a></div>
                                        <div class="jbs-grid-job-caption">
                                            <div class="jbs-job-employer-wrap"><span>{{ listing.job_cat }}</span></div>
                                            <div class="jbs-job-title-wrap">
                                                <h4><a href="job-detail.html" class="jbs-job-title">{{
                                                    listing.job_title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jbs-grid-jbs-saved"><a href="JavaScript:Void(0);" class="bkrs"><i
                                                class="fa-regular fa-bookmark"></i></a></div>
                                </div>
                                <div class="jbs-grid-job-edrs mt-3">
                                    <div class="jbs-info-ico-style">
                                        <div class="jbs-single-y1 style-1"><span><i
                                                    class="fa-solid fa-location-dot"></i></span>London</div>
                                        <div class="jbs-single-y1 style-2"><span><i
                                                    class="fa-solid fa-clock"></i></span>Full Time</div>
                                        <div class="jbs-single-y1 style-3"><span><i
                                                    class="fa-solid fa-coins"></i></span>5 Years exp.</div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>GHC {{ listing.salary }}<span> / Month</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>{{ new
                                        Date(listing.created_at).toDateString()
                                            }}</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick
                                            Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
                                    <li class="page-item active"><a class="page-link" href="JavaScript:Void(0);">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All List Wrap ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="bg-cover primary-bg-dark"
        style="background:url(/public/homeassets/img/footer-bg-dark.png)no-repeat;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">

                    <div class="call-action-wrap">
                        <div class="sec-heading center">
                            <h2 class="lh-base mb-3 text-light">Find The Perfect Job<br>on Job Stock That is Superb For
                                You</h2>
                            <p class="fs-6 text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            </p>
                        </div>
                        <div class="call-action-buttons mt-3">
                            <a href="JavaScript:Void(0);"
                                class="btn btn-lg btn-dark fw-medium px-xl-5 px-lg-4 me-2">Upload resume</a>
                            <a href="JavaScript:Void(0);"
                                class="btn btn-lg btn-whites fw-medium px-xl-5 px-lg-4 text-primary">Join Our Team</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="footer skin-light-footer">

        <!-- Footer Top Start -->
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="call-action-form rounded m-0">
                            <form class="ms-0">
                                <div class="newsltr-form gray-style">
                                    <input type="text" class="form-control" placeholder="Enter Your email">
                                    <button type="button" class="btn btn-subscribe">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="job-info-count-group lg-ctr">
                            <div class="single-jb-info-count">
                                <div class="jbs-y7">
                                    <h5 class="ctr">12</h5><span class="primary-text-dark">K</span>
                                </div>
                                <div class="jbs-y5">
                                    <p>Job Posted</p>
                                </div>
                            </div>
                            <div class="single-jb-info-count">
                                <div class="jbs-y7">
                                    <h5 class="ctr">10</h5><span class="primary-text-dark">M</span>
                                </div>
                                <div class="jbs-y5">
                                    <p>Happy Customers</p>
                                </div>
                            </div>
                            <div class="single-jb-info-count">
                                <div class="jbs-y7">
                                    <h5 class="ctr">76</h5><span class="primary-text-dark">K</span>
                                </div>
                                <div class="jbs-y5">
                                    <p>Freelancers</p>
                                </div>
                            </div>
                            <div class="single-jb-info-count">
                                <div class="jbs-y7">
                                    <h5 class="ctr">200</h5><span class="primary-text-dark">+</span>
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
        <!-- Footer Top End -->

        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-4">
                        <div class="footer-widget">
                            <img src="/public/homeassets/img/logo.png" class="img-footer" alt="">
                            <div class="footer-add">
                                <p>Collins Street West, Victoria Near Bank Road<br>Australia QHR12456.</p>
                            </div>
                            <div class="foot-socials">
                                <ul>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="widget-title text-primary">For Clients</h4>
                            <ul class="footer-menu">
                                <li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
                                <li><a href="JavaScript:Void(0);">Payroll Services</a></li>
                                <li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
                                <li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
                                <li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
                                <li><a href="JavaScript:Void(0);">How to Hire</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="widget-title text-primary">Our Resources</h4>
                            <ul class="footer-menu">
                                <li><a href="JavaScript:Void(0);">Free Business tools</a></li>
                                <li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
                                <li><a href="JavaScript:Void(0);">Success Stories</a></li>
                                <li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
                                <li><a href="JavaScript:Void(0);">Resources</a></li>
                                <li><a href="JavaScript:Void(0);">Help & Support</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title text-primary">The Company</h4>
                            <ul class="footer-menu">
                                <li><a href="JavaScript:Void(0);">About Us</a></li>
                                <li><a href="JavaScript:Void(0);">Leadership</a></li>
                                <li><a href="JavaScript:Void(0);">Contact Us</a></li>
                                <li><a href="JavaScript:Void(0);">Investor Relations</a></li>
                                <li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title text-primary">Download Apps</h4>
                            <div class="app-wrap">
                                <p><a href="JavaScript:Void(0);"><img src="/public/homeassets/img/light-play.png"
                                            class="img-fluid" alt=""></a></p>
                                <p><a href="JavaScript:Void(0);"><img src="/public/homeassets/img/light-ios.png"
                                            class="img-fluid" alt=""></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <p class="mb-0 text-center">© 2015 - 2023 Job Stock® Themezhub.</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

</template>