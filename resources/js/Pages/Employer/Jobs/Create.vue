<script setup>
import SocialInfo from "../../Candidate/Sections/SocialInfo.vue";
import AddtionalInfo from "../../Candidate/Sections/AddtionalInfo.vue";
import BasicInfo from "../../Candidate/Sections/BasicInfo.vue";
import { useForm } from "@inertiajs/vue3";


const form = useForm({
    job_title: '',
    job_desc: '',
    gender: '',
    job_cat: '',
    salary: '',
    language: '',
    qualification: '',
})

const submit = () => {
    form.post(route('job.store'));
}

</script>


<template>



    <Head title="Candidate Profile |"></Head>

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-4">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="mb-1 fs-3 fw-medium">Post Jobs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Post Jobs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>




        <!-- Card Row -->
        <div class="card">
            <div class="card-header">
                <h4>Enter Job Details Below</h4>
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input v-model="form.job_title" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.job_title }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Gender (Male / Female / Both)</label>
                                <input v-model="form.gender" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.gender }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Job Category(Software, Hospitality, Marketing)</label>
                                <input v-model="form.job_cat" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.job_cat }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Qualification (SHS / Degree / Masters...)</label>
                                <input v-model="form.qualification" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.qualification }}</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Salary Range (1,500 - 2,000)</label>
                                <input v-model="form.salary" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.salary }}</p>
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Language</label>
                                <input v-model="form.language" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.language }}</p>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea v-model="form.job_desc" class="form-control ht-80"></textarea>
                                <p class="text-danger">{{ form.errors.job_desc }}</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary px-10 fs-5"
                                style="padding-left: 7% ; padding-right: 7% ">Post
                                Job</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- Card Row End -->

        <div class="dashboard-widg-bar d-block">







        </div>
        <!-- footer -->
        <div class="row">
            <div class="col-md-12">
                <div class="py-3 text-center">© 2015 - 2023 Job Stock® Themezhub.</div>
            </div>
        </div>

    </div>
</template>