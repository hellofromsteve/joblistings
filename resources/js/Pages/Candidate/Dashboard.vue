<script setup>
import FlashMessage from "../../Components/FlashMessage.vue";


</script>
<template>


    <Head title="Candidate Dashboard |"></Head>

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block ">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="mb-1 fs-3 fw-medium">Candidate Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Candidate
                                    Statistics</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <FlashMessage v-if="$page.props.flash.message" type="danger" :message="$page.props.flash.message" />
            <!-- Row Start -->
            <div class="row align-items-center gx-4 gy-4 mb-4">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-success bg-light-success">
                                <i class="fa-solid fa-business-time"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">523</h5>
                                <p>Applied jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-warning bg-light-warning">
                                <i class="fa-solid fa-bookmark"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">523</h5>
                                <p>Saved Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-danger bg-light-danger">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">523</h5>
                                <p>Viewed Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-info bg-light-info">
                                <i class="fa-sharp fa-solid fa-comments"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">523</h5>
                                <p>Total Review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->



        </div>
        <!-- footer -->
        <div class="row">
            <div class="col-md-12">
                <div class="py-3 text-center">© 2015 - 2023 Job Stock® Themezhub.</div>
            </div>
        </div>

    </div>
</template>
