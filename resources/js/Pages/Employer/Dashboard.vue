<script setup>
import FlashMessage from "../../Components/FlashMessage.vue";
import BreadCrumb from "../../Components/BreadCrumb.vue";



defineProps({

    categories: Number,
    users: Number,
    listings: Number,
    applicants: Number

})


</script>
<template>

    {{ console.log(applicants) }}

    <Head title="Employer Dashboard |"></Head>

    <div class="dashboard-content">
        <BreadCrumb name="Employer Dashboard" accountType="Employer" :dashboardUrl="route('employer.dashboard')"
            currentPage="Employer Dashboard" />

        <div class="dashboard-widg-bar d-block">
            <!-- <FlashMessage v-if="$page.props.flash.message" type="danger" :message="$page.props.flash.message" /> -->
            <!-- Row Start -->
            <div class="row align-items-center gx-4 gy-4 mb-4">

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud bg-light-danger">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-warning bg-light-warning">
                                <i class="fa-solid fa-business-time"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">{{ listings }}</h5>
                                <p>All Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud bg-light-primary">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-info bg-light-info">
                                <i class="fa-sharp fa-solid fa-comments"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">{{ applicants }}</h5>
                                <p>All Applicants</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud bg-light-danger">
                        <div class="dash-wrap-bloud-icon">
                            <div class="bloud-icon text-info bg-light-info">
                                <i class="fa-sharp fa-solid fa-comments"></i>
                            </div>
                        </div>
                        <div class="dash-wrap-bloud-caption">
                            <div class="dash-wrap-bloud-content">
                                <h5 class="ctr">523</h5>
                                <p>All Regions</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="dash-wrap-bloud bg-light-danger">
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
