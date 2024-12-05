<script setup>
import { router, useForm } from "@inertiajs/vue3";
import PaginationLinks from "../../../Components/PaginationLinks.vue";
import JobCard from "../../../Components/JobCard.vue";

const props = defineProps({
    paginateBy: "",
    titleSearched: String,
    categorySelected: String,
    regionSelected: String,
    listings: Object, // Assuming jobs are passed down as a prop
});

const form = useForm({
    paginateSelector: props.paginateBy || 15,
    title: props.titleSearched,
    category: props.categorySelected,
    region: props.regionSelected,
});

const submitSearch = () => {
    router.get(route('guest.listings'), {
        title: form.title,
        category: form.category,
        region: form.region,
        paginateSelector: form.paginateSelector,
    });
};

const clearFilter = () => {
    form.reset();
    router.get(route('guest.listings'));
};

const apply = (listing) => {
    router.post(route('apply', listing), {}, {
        preserveScroll: true,
        onSuccess: (page) => {
            // Check if there's a flash message in the response
            if (page.props.flash.type === 'Error!') {
                Swal.fire({
                    title: page.props.flash.type,
                    text: page.props.flash.message,
                    icon: page.props.flash.type,
                    confirmButtonText: 'OKAY!',
                });
            }

            if (page.props.flash.type === 'Success!') {
                Swal.fire({
                    title: page.props.flash.type,
                    text: page.props.flash.message,
                    icon: page.props.flash.type,
                    confirmButtonText: 'OKAY!',
                });
            }
        },
        onError: (errors) => {
            Swal.fire({
                title: 'Error!',
                text: 'An unexpected error occurred.',
                icon: 'error',
                confirmButtonText: 'OK',
            });
        },
    });
};

</script>
<template>

    <Head title="All Listings |" />
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
                                            <input type="search" class="form-control" placeholder="Job Title..."
                                                v-model="form.title" @change="submitSearch">
                                            <i class="fa-solid fa-magnifying-glass text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group briod">
                                        <div class="input-with-icon">

                                            <select @change="submitSearch" class="form-control" v-model="form.category"
                                                name="job_cat" id="category" required>
                                                <option value="null" disabled>Choose Job Category</option>
                                                <option value="Creative">Creative & Design</option>
                                                <option value="Customer">Customer Service & Support</option>
                                                <option value="Education">Education & Training</option>
                                                <option value="Engineering">Engineering & Construction</option>
                                                <option value="Finance">Finance & Accounting</option>
                                                <option value="Healthcare">Health Care</option>
                                                <option value="Sales">Sales & Marketing</option>
                                                <option value="Technology">Technology and IT</option>
                                            </select>
                                            <i class="fa-solid fa-briefcase text-primary"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <select v-model="form.region" class="form-control" id="region"
                                                @change="submitSearch">

                                                <option value="null" disabled>Choose Region</option>
                                                <option value="Greater-Accra">Greater Accra</option>
                                                <option value="Ashanti">Ashanti</option>
                                                <option value="Central">Central</option>
                                                <option value="Eastern">Eastern</option>
                                                <option value="Western">Western</option>
                                                <option value="Western-North">Western North</option>
                                                <option value="Volta">Volta</option>
                                                <option value="Oti">Oti</option>
                                                <option value="Northern">Northern</option>
                                                <option value="Savannah">Savannah</option>
                                                <option value="North-East">North East</option>
                                                <option value="Upper-East">Upper East</option>
                                                <option value="Upper-West">Upper West</option>
                                                <option value="Bono">Bono</option>
                                                <option value="Bono-East">Bono East</option>
                                                <option value="Ahafo">Ahafo</option>
                                            </select>
                                            <i class="fa-solid fa-location-crosshairs text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                    <div class="fliox-search-wiop">
                                        <div class="form-group px-2">
                                            <button @click="submitSearch" type="submit"
                                                class="btn btn-primary full-width">Search</button>
                                        </div>
                                        <div class="form-group me-2">
                                            <button @click="clearFilter" href="" class="btn btn-danger">Clear
                                                Filter</button>
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


                <div v-if="!listings.data || listings.data.length === 0">
                    <div class="d-flex justify-content-center align-items-center vh-35">
                        <h3 class="text-center">No Jobs Found </h3>
                    </div>
                </div>

                <div v-else class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column">
                                        <h4 class="m-sm-0 mb-2"> Showing {{ listings.from }} to {{ listings.to }}
                                            Results Out of
                                            {{ listings.total }}</h4>
                                    </div>


                                </div>
                                <div class="item-shorting-box-right">

                                    <div class="shorting-by small">
                                        <select v-model="form.paginateSelector" @change="submitSearch"
                                            class="form-select">
                                            <option value=15>Show 15 Per Page</option>
                                            <option value=30>Show 30 Per Page</option>
                                            <option value=45>Show 45 Per Page</option>
                                            <option value=60>Show 60 Per Page</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="Object.keys(listings.data).length" class="row justify-content-center gx-xl-3 gx-3 gy-4">

                        <!-- Single Item -->
                        <div v-for="listing in listings.data" :key="listing.id"
                            class="col-xl-3 col-lg-4 col-md-6 col-sm-12">


                            <div class="jbs-grid-layout style_2 border">
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-content">

                                        <div class="jbs-grid-job-caption">
                                            <div class="jbs-job-employer-wrap"><span>{{ listing.category }}</span>
                                            </div>
                                            <div class="jbs-job-title-wrap">
                                                <h4><a :href="route('guest.listing.show', { slug: listing.slug })"
                                                        target="_blank" class="jbs-job-title">{{
                                                            listing.title.substring(0, 25) }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jbs-grid-jbs-saved"> <a href="" class="bkrs"><i
                                                class="fa-regular fa-bookmark text-primary"></i></a>
                                    </div>


                                </div>
                                <div class="jbs-grid-job-edrs mt-3">
                                    <div class="jbs-info-ico-style">
                                        <div class="jbs-single-y1 style-1"><span><i
                                                    class="fa-solid fa-location-dot"></i></span>{{
                                                        listing.region }}, {{ listing.city }}</div>

                                        <div class="jbs-single-y1 style-3"><span><i
                                                    class="fa-solid fa-certificate"></i></span>{{
                                                        listing.qualification }}</div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <p class="fs-sm">GHC {{ listing.salary }}<span> /
                                                M</span></p>
                                    </div>
                                    <div class="jbs-grid-posted"><span>{{ new
                                        Date(listing.created_at).toLocaleDateString('en-GB', {
                                            month: 'short',
                                            day: 'numeric', year: 'numeric'
                                        }) }}
                                        </span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a :href="route('guest.listing.show', { slug: listing.slug })" target="_blank"
                                            class="btn btn-sm btn-light-primary px-3">View
                                            Detail</a>
                                        <button @click="apply(listing)"
                                            class="btn btn-sm btn-primary p-3">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                    <!-- Pagination -->
                    <PaginationLinks :paginator="listings" />
                    <!-- <TestPages :paginator="jobs" /> -->


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