<script setup>


defineProps({

    listing: Object
});

</script>


<template>

    <Head title="Show Listing Details |" />
    <section class="gray-simple py-5">

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-12">

                    <div class="jbs-dts-block styl-02 mt-4">
                        <div class="jbs-head-block">

                            <div class="jbs-head-bodys">
                                <div class="jbs-head-bodys-top">
                                    <div class="jbs-roots-y1 px-4">

                                        <div class="jbs-roots-y1-last">

                                            <div class="jbs-title-iop">
                                                <h2 class="m-0">{{ listing.title }}</h2>
                                            </div>
                                            <div class="jbs-locat-oiu text-sm-muted"><span><i
                                                        class="fa-solid fa-location-dot me-1"></i>{{ listing.region }},
                                                    {{ listing.city }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jbs-roots-y2">
                                        <div class="jbs-roots-action-groups">
                                            <div class="jbs-roots-action-btns">

                                                <button type="button" class="btn btn-md btn-primary ms-2"><i></i>Quick
                                                    Apply</button>
                                            </div>
                                            <div class="jbs-roots-action-info">
                                                <span class="text-sm fw-medium text-success ms-2">Posted on {{ new
                                                    Date().toLocaleDateString('en-GB', {
                                                        month: 'long',
                                                        day: '2-digit',
                                                        year: 'numeric'
                                                    }) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jbs-head-bodys-foot">
                                    <div class="jbs-info-detail-yelos">
                                        <div class="signle-jbs-info-yelos">
                                            <div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Job
                                                    Region</span></div>
                                            <div class="signle-yelos-title">
                                                <h6 class="m-0 text-primary">{{ listing.region }}</h6>
                                            </div>
                                        </div>



                                        <div class="signle-jbs-info-yelos">
                                            <div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Salary
                                                    Per Month</span></div>
                                            <div class="signle-yelos-title">
                                                <h6 class="m-0 text-primary">{{ listing.salary }}</h6>
                                            </div>
                                        </div>
                                        <div class="signle-jbs-info-yelos">
                                            <div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Fluent
                                                    In </span></div>
                                            <div class="signle-yelos-title">
                                                <h6 class="m-0 text-primary">{{ listing.language }}</h6>
                                            </div>
                                        </div>
                                        <div class="signle-jbs-info-yelos">
                                            <div class="signle-yelos-subtitle"><span class="text-sm-muted mb-1">Job
                                                    Category</span></div>
                                            <div class="signle-yelos-title">
                                                <h6 class="m-0 text-primary">{{ listing.category }}</h6>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="jbs-dts-body">
                            <div class="jbs-dts-body-content">
                                <ul class="nav nav-tabs justify-content-center align-items-center" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="job-description-tab" data-bs-toggle="tab"
                                            data-bs-target="#job-description-tab-pane" type="button" role="tab"
                                            aria-controls="job-description-tab-pane" aria-selected="true">Job
                                            Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="job-requirements-tab" data-bs-toggle="tab"
                                            data-bs-target="#job-requirements-tab-pane" type="button" role="tab"
                                            aria-controls="job-requirements-tab-pane" aria-selected="false">Job
                                            Requirements</button>
                                    </li>

                                </ul>
                                <div class="tab-content py-4 px-5" id="myTabContent">
                                    <!-- Job Description -->
                                    <div class="tab-pane fade show active" id="job-description-tab-pane" role="tabpanel"
                                        aria-labelledby="job-description-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-9 col-lg-10 col-md-12">
                                                <div class="jbs-content">
                                                    <p class="">
                                                        {{ listing.description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Requirements -->
                                    <div class="tab-pane fade" id="job-requirements-tab-pane" role="tabpanel"
                                        aria-labelledby="job-requirements-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="jbs-content mb-4">
                                                    <h6>Requirements:</h6>
                                                    <ul class="simple-list">
                                                        <li>Candidate Gender: {{ listing.gender }}</li>
                                                        <li>Candidate must have a minimum Qualification: {{
                                                            listing.qualification }} </li>
                                                        <li>Candidate Must Reside in or around {{ listing.city }}</li>
                                                        <li>Candidate Must be able to Speak and write Fluent {{
                                                            listing.language }}</li>
                                                        <li>Jamshedpur, Jharkhand: Reliably commute or planning to
                                                            relocate before starting work (Required)</li>
                                                    </ul>
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
            <div class="d-flex justify-content-center align-items-center mt-4 pt-4">
                <a :href="route('guest.listings')" class="fs-5 text-primary"> See More Job Listings</a>
            </div>
        </div>
    </section>

</template>