<script setup>
import BasicInfo from "./Sections/BasicInfo.vue";
import SocialInfo from "./Sections/SocialInfo.vue";
import AddtionalInfo from "./Sections/AddtionalInfo.vue";


const userinfo = defineProps({
    user: Object,
    message: String,
    dob: String
})


</script>


<template>



    <Head title="Candidate Profile |"></Head>

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-4">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="mb-1 fs-3 fw-medium">Candidate Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Candidate Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="dashboard-widg-bar d-block">

            <div class="dashboard-profle-wrapper mt-0`">
                <div class="dash-prf-start">
                    <div class="dash-prf-start-upper">
                        <div class="dash-prf-start-thumb">
                            <figure><img src="https://placehold.co/500x500" class="img-fluid circle" alt=""></figure>
                        </div>
                    </div>
                    <div class="dash-prf-start-bottom">
                        <div class="upload-btn-wrapper small">
                            <button class="btn">Change Profile Picture</button>
                            <input type="file" name="myfile">
                        </div>
                    </div>
                </div>
                <div class="dash-prf-end">
                    <div class="dash-prfs-caption">
                        <div class="dash-prfs-title">
                            <h4>{{ $page.props.auth.user.first_name }}</h4>
                        </div>
                        <div class="dash-prfs-subtitle">
                            <div class="jbs-job-mrch-lists">
                                <div class="single-mrch-lists">
                                    <span>Sr. Web Designer</span>.<span><i
                                            class="fa-solid fa-location-dot me-1"></i>London</span>
                                </div>
                            </div>
                        </div>
                        <div class="jbs-grid-job-edrs-group mt-1">
                            <span>HTML</span>
                            <span>CSS3</span>
                            <span>Bootstrap</span>
                            <span>Redux</span>
                        </div>
                    </div>
                    <div class="dash-prf-caption-end">
                        <div class="dash-prf-infos">
                            <div class="single-dash-prf-infos">
                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-envelope-open-text"></i>
                                </div>
                                <div class="single-dash-prf-infos-caption">
                                    <p class="text-sm-muted mb-0">Email</p>
                                    <h5>{{ $page.props.auth.user.email }}</h5>
                                </div>
                            </div>
                            <div class="single-dash-prf-infos">
                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-phone-volume"></i></div>
                                <div class="single-dash-prf-infos-caption">
                                    <p class="text-sm-muted mb-0">Call</p>
                                    <h5>{{ $page.props.auth.user.phone }}</h5>
                                </div>
                            </div>
                            <div class="single-dash-prf-infos">
                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-id-card-clip"></i></div>
                                <div class="single-dash-prf-infos-caption">
                                    <p class="text-sm-muted mb-0">Account ID</p>
                                    <h5>{{ $page.props.auth.user.user_account }}</h5>
                                </div>
                            </div>
                            <div class="single-dash-prf-infos">
                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="single-dash-prf-infos-caption">
                                    <p class="text-sm-muted mb-0">Date of Birth</p>
                                    <h5 v-if="$page.props.auth.user.dob == NULL">Not Updated</h5>
                                    <h5 v-if="$page.props.auth.user.dob != NULL">{{ $page.props.auth.user.dob }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class=" dash-prf-completion">
                            <p class="text-sm-muted">Profile Completed</p>
                            <div class="progress" role="progressbar" aria-label="Example Success with label"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 75%">75%</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- BasicDetail Component -->
            <BasicInfo :user="user" :message="message" />


            <!-- Contact Detail Component -->
            <AddtionalInfo :user="user" :message="message" />


            <!-- Contact Detail Component -->
            <SocialInfo :user="user" :message="message" />




        </div>
        <!-- footer -->
        <div class="row">
            <div class="col-md-12">
                <div class="py-3 text-center">© 2015 - 2023 Job Stock® Themezhub.</div>
            </div>
        </div>

    </div>
</template>