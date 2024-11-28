<script setup>

import JobCard from "../../Components/JobCard.vue";
import PaginationLinks from "../../Components/PaginationLinks.vue";
import TestPages from "../../Components/TestPages.vue";

defineProps({
    jobs: Object,
})

</script>
<template>

    <Head title="All Jobs |" />

    {{ console.log(jobs) }}
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title bg-cover primary-bg-dark"
        style="background:url(/homeassets/img/bg2.png) no-repeat; margin-top: 6%;">
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


                <div v-if="!jobs.data || jobs.data.length === 0">
                    <div class="d-flex justify-content-center align-items-center vh-100">
                        <h3 class="text-center">No Jobs Found Yet</h3>
                    </div>
                </div>

                <div v-else class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column">
                                        <h4 class="m-sm-0 mb-2"> Showing {{ jobs.from }} to {{ jobs.to }} Results</h4>
                                    </div>


                                </div>
                                <div class="item-shorting-box-right">
                                    <div class="shorting-by me-2 small">
                                        <select class="form-select">
                                            <option value="0">Short by (Default)</option>
                                            <option value="1">Short by (Featured)</option>
                                            <option value="2">Short by (Urgent)</option>
                                            <option value="3">Short by (Post Date)</option>
                                        </select>
                                    </div>
                                    <div class="shorting-by small">
                                        <select class="form-select">
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

                    <div v-if="Object.keys(jobs.data).length" class="row justify-content-center gx-xl-3 gx-3 gy-4">

                        <!-- Single Item -->
                        <div v-for="job in jobs.data" :key="job.id" class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <JobCard :job="job" />
                        </div>



                    </div>




                    <!-- Pagination -->
                    <PaginationLinks :jobs="jobs" />
                    <!-- <TestPages :paginator="jobs" /> -->

                    <!-- <div class="row">
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
                    </div> -->

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All List Wrap ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="bg-cover primary-bg-dark" style="background:url(/homeassets/img/footer-bg-dark.png)no-repeat;">
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


</template>