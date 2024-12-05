<script setup>

import BreadCrumb from "../../../Components/BreadCrumb.vue";
import PaginationLinks from "../../../Components/PaginationLinks.vue";
import { router, useForm } from "@inertiajs/vue3";

const props = defineProps({
    listings: Object,
    listingsCount: Number,
    searchTerm: String
});


const form = useForm({

    search: props.searchTerm,
})


const search = () => {

    router.get(route('employer.job-listings.index'), { search: form.search })
}
</script>

<template>

    <Head title="Employer - Show All Employer Listings |"></Head>

    <div class="dashboard-content">
        <BreadCrumb name="Show All Employer Jobs" accountType="Employer" :dashboardUrl="route('employer.dashboard')"
            currentPage="Employer Jobs" />



        <div class="dashboard-widg-bar d-block">


            <!-- Header Wrap -->
            <div class="row">


                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="_mp-inner-content elior">
                                <div class="_mp-inner-first">
                                    <form @submit.prevent="search" class="d-flex justify-content-between">
                                        <div class="search-inline">
                                            <input v-model="form.search" type="search" class="form-control"
                                                placeholder="Search in posted jobs...">

                                            <button type="submit" class="btn btn-primary btn-sm ml-auto">Search</button>

                                        </div>
                                    </form>

                                </div>

                                <div class="_mp-inner-first px-5">

                                    <Link :href="route('employer.job-listings.create')"><i
                                        class="fa-solid fa-cloud-arrow-up me-2"></i>Post A New
                                    Job Listing
                                    </Link>


                                </div>


                                <div class="_mp_inner-last">
                                    <div class="item-shorting-box-right">
                                        <div class="shorting-by me-2 small">
                                            <select class="form-select">
                                                <option value="0">Short by (Default)</option>
                                                <option value="1">Short by (Featured)</option>
                                                <option value="2">Short by (Urgent)</option>
                                                <option value="3">Short by (Post Date)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row mb-3">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="duster-flex-row align-items-center d-flex justify-content-between">
                                        <div class="duster-flex-first">
                                            <h6 class="mb-0">Showing All Your Jobs</h6>
                                        </div>
                                        <div class="duster-flex-end">
                                            <ul class="nav nav-pills nav-fill gap-2 p-1 small gray-simple rounded"
                                                id="pillNav2" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active rounded" id="alls"
                                                        data-bs-toggle="tab" type="button" role="tab"
                                                        aria-selected="true">All: {{ listingsCount }}</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded" id="actives" data-bs-toggle="tab"
                                                        type="button" role="tab" aria-selected="false">Active:
                                                        122</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded" id="expireds" data-bs-toggle="tab"
                                                        type="button" role="tab" aria-selected="false">Axpired:
                                                        16</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Start All List -->
                            <div v-if="listing && listings.data && listings.data.length > 0"
                                class="row justify-content-start gx-3 gy-4">

                                <!-- Single Item -->
                                <div v-for="listing in listings.data" class="col-xl-12 col-lg-12 col-md-12"
                                    :key="listing.id">
                                    <div class="jbs-list-box border">
                                        <div class="jbs-list-head">
                                            <div class="jbs-list-head-thunner">
                                                <div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html">
                                                        <figure><img src="https://placehold.co/200x200"
                                                                class="img-fluid" alt=""></figure>
                                                    </a></div>
                                                <div class="jbs-list-job-caption">
                                                    <div class="jbs-job-employer-wrap"><span>{{ listing.job_cat
                                                            }}</span>
                                                    </div>
                                                    <div class="jbs-job-title-wrap">
                                                        <h4><a target="_blank"
                                                                :href="route('employer.job-listings.show', listing.id)"
                                                                class="jbs-job-title">{{
                                                                    listing.title }}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jbs-list-applied-users">
                                                <span class="text-sm-muted text-light bg-warning label">244
                                                    Applicants</span>
                                            </div>
                                            <div class="jbs-list-postedinfo">
                                                <p class="m-0 text-sm-muted"><strong>Posted : </strong><span
                                                        class="text-success"> {{ new
                                                            Date(listing.created_at).toDateString()
                                                        }}</span></p>
                                                <p class="m-0 text-sm-muted"><strong>Expired:</strong><span
                                                        class="text-danger">12 Jun 2024</span></p>
                                            </div>
                                            <div class="jbs-list-head-last">
                                                <a href="JavaScript:Void(0);"
                                                    class="rounded btn-md text-success bg-light-success px-3"><i
                                                        class="fa-solid fa-pencil"></i></a>
                                                <a href="JavaScript:Void(0);"
                                                    class="rounded btn-md text-danger bg-light-danger px-3"><i
                                                        class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- End All Job List -->

                            <div v-else class="d-flex justify-content-center align-items-center min-vh-25">

                                <h5 class="text-danger">No Job Listings FOund
                                </h5>
                            </div>
                            <div class="pt-3 pt-md-4 pt-lg-5">

                                <PaginationLinks :paginator="jobs" />
                            </div>



                        </div>

                    </div>
                </div>
            </div>
            <!-- Header Wrap -->

        </div>

        <!-- footer -->
        <div class="row">
            <div class="col-md-12">
                <div class="py-3 text-center">© 2015 - 2023 Job Stock® Themezhub.</div>
            </div>
        </div>

    </div>

</template>