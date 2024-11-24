<script setup>
import { useForm } from "@inertiajs/vue3";


defineProps({
    job_categories: Object,
    qualifications: Object,
    regions: Object
})


const form = useForm({
    job_title: '',
    job_desc: '',
    gender: 'Either',
    job_cat: '',
    city: '',
    region: '',
    salary: '',
    language: 'English',
    qualification: '',
})



const submit = () => {
    form.post(route('job.store'));
}

</script>


<template>

    {{ console.log(job_categories) }}

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
                                <label>Gender Prefered</label>
                                <div>
                                    <select v-model="form.gender" name="gender">
                                        <option value="">Choose Prefered Gender</option>
                                        <option value="Either">Either</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>

                                    </select>
                                </div>
                                <p class="text-danger">{{ form.errors.qualification }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div v-if="Object.keys(regions).length" class="form-group">
                                <label>Region</label>
                                <div>
                                    <select v-model="form.region" name="region">
                                        <option value=''>Choose Region</option>
                                        <option v-for="region in regions" :key="region.id" :value="region.name">
                                            {{ region.name }}</option>

                                    </select>
                                </div>
                                <p class="text-danger">{{ form.errors.region }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>City(Accra/ Cape Coast/ Sunyani)</label>
                                <input v-model="form.city" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.city }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div v-if="Object.keys(job_categories).length" class="form-group">
                                <label>Job Category</label>
                                <div>
                                    <select v-model="form.job_cat" name="job_cat">
                                        <option value=''>Choose Job Category</option>
                                        <option v-for="jobs in job_categories" :key="jobs.id" :value="jobs.name">
                                            {{ jobs.name }}</option>

                                    </select>
                                </div>
                                <p class="text-danger">{{ form.errors.job_cat }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div v-if="Object.keys(qualifications).length" class="form-group">
                                <label>Qualification Required</label>
                                <div>
                                    <select v-model="form.qualification" name="qualification">
                                        <option value=''>Choose Job Qualification</option>
                                        <option v-for="q in qualifications" :key="q.id" :value="q.name">
                                            {{ q.name }}</option>

                                    </select>
                                </div>
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