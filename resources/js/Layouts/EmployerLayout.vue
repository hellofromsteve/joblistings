<script setup>
import { useForm } from '@inertiajs/vue3'
const form = useForm({})


const submit = () => {
    form.post(route('logout'))
}



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

                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">
                            <li :class="{ active: $page.component === 'Employer/Profile' }">
                                <Link :href="route('candidate.profile')">My Profile</Link>
                            </li>

                            <li :class="{ active: $page.component === 'Employer/Job/Index-Job' }">
                                <Link :href="route('employer.job-listings.index')">My Listed
                                Jobs</Link>
                            </li>


                        </ul>




                        <ul class="nav-menu nav-menu-social align-to-right">

                            <li class="list-buttons ms-2">
                                <Link :href="route('employer.job-listings.create')"><i
                                    class="fa-solid fa-cloud-arrow-up me-2"></i>Post A
                                Job
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

        <!-- ======================= dashboard Detail ======================== -->
        <div class="dashboard-wrap bg-light">
            <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
                aria-controls="MobNav">
                <i class="fas fa-bars mr-2"></i>Dashboard Navigation
            </a>
            <div class="collapse" id="MobNav">
                <div class="dashboard-nav">

                    <div class="dashboard-inner">
                        <ul data-submenu-title="Main Navigation">
                            <li :class="{ active: $page.component === 'Employer/Dashboard' }"><a
                                    :href="route('candidate.dashboard')"><i class="fa-solid fa-gauge-high me-2"></i>My
                                    Dashboard</a></li>

                            <li :class="{ active: $page.component === 'Employer/Job/Index-Job' }"><a
                                    :href="route('employer.job-listings.index')"><i
                                        class="fa-solid fa-file-pdf me-2"></i>My Jobs</a>
                            </li>

                            <li><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark me-2"></i>Shortlist
                                    Candidates</a></li>
                            <li><a href="candidate-change-password.html"><i
                                        class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</a></li>
                            <li><a href="candidate-delete-account.html"><i class="fa-solid fa-trash-can me-2"></i>Delete
                                    Account</a></li>


                            <div class="px-3   mt-2 block justify-content-center">
                                <form @submit.prevent="submit" class="" style="margin-top: 200px;">

                                    <button class="btn btn-block btn-danger btn-md mt-8"> <i
                                            class="text-white fa-solid fa-power-off me-2"></i>Log
                                        Out
                                    </button>

                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>



            <slot />



        </div>
        <!-- ======================= dashboard Detail End ======================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
</template>