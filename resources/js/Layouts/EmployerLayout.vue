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
                        <div class="mobile_nav">
                            <ul v-if="!$page.props.auth.user">
                                <li class="list-buttons">
                                    <a :href="route('login')">
                                        <i class="fas fa-sign-in-alt me-2"></i>Log In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">


                        <ul class="nav-menu">


                            <li :class="{ active: $page.component === 'Employer/Profile' }">
                                <Link :href="route('employer.dashboard')">My Profile</Link>
                            </li>

                            <li :class="{ active: $page.component === 'Guest/Job/Show' }">
                                <Link :href="route('guest.listings')"> All Listings</Link>
                            </li>



                            <li :class="{ active: $page.component === 'Guest/About' }">
                                <Link :href="route('about')">About Us</Link>
                            </li>
                            <li :class="{ active: $page.component === 'Guest/Contact' }">
                                <Link :href="route('contact')">Contact Us</Link>
                            </li>

                            <li :class="{ active: $page.component === 'Guest/Blog' }">
                                <Link :href="route('blog')">Blog</Link>
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
                            <li :class="{ active: $page.component === 'Employer/Dashboard' }">
                                <Link :href="route('employer.dashboard')"><i class="fa-solid fa-gauge-high me-2"></i>My
                                Dashboard</Link>
                            </li>

                            <li :class="{ active: $page.component === 'Employer/Job/Index-Job' }">
                                <Link :href="route('employer.listings')"><i class="fa-solid fa-file-pdf me-2"></i>My
                                Listings</Link>
                            </li>
                            <li :class="{ active: $page.component === 'Employer/Job/Create-Job' }">
                                <Link :href="route('employer.create')"><i class="fa-solid fa-file-pdf me-2"></i>Add
                                Listings</Link>
                            </li>

                            <li>
                                <Link href="#"><i class="fa-solid fa-bookmark me-2"></i>Show
                                Candidates</Link>
                            </li>
                            <li>
                                <Link href="#"><i class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</Link>
                            </li>
                            <li>
                                <Link href="#"><i class="fa-solid fa-trash-can me-2"></i>Delete
                                Account</Link>
                            </li>


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