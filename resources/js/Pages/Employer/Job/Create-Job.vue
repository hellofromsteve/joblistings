<script setup>
import { useForm } from "@inertiajs/vue3";


defineProps({
    cats: Object
})


const form = useForm({
    job_title: '',
    job_desc: '',
    gender: null,
    job_cat: null,
    city: '',
    region: null,
    salary: '',
    language: 'English',
    qualification: null,
})



const submit = () => {
    form.post(route('job.store'), {
        preserveScroll: true,
        onSuccess: () => {
            Swal.fire({
                title: 'Action Successful!',
                text: 'Job Listing Added Successfuly',
                icon: 'success',
                confirmButtonText: 'Okay'
            })
        }
    });
}

</script>


<template>

    {{ console.log(cats) }}

    <Head title="Employer - Post A Job |"></Head>

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
                                    <select class="form-select" v-model="form.gender" id="gender" name="gender">

                                        <option value="null" disabled>Choose Option</option>
                                        <option value="Either">Either</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>

                                    </select>
                                </div>
                                <p class="text-danger">{{ form.errors.gender }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Choose Region</label>
                                <div>
                                    <select class="form-select" name="region" id="region" v-model="form.region"
                                        required>
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

                                </div>
                                <p class="text-danger">{{ form.errors.region }}</p>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Job Is In Which City(Accra/ Cape Coast/ Sunyani)</label>
                                <input v-model="form.city" type="text" class="form-control">
                                <p class="text-danger">{{ form.errors.city }}</p>
                            </div>
                        </div>

                        <div v-if="cats.length" class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="job_cat">Choose Job Category</label>
                                <div>
                                    <select class="form-select" v-model="form.job_cat" name="job_cat" id="job_cat"
                                        required>
                                        <option value="null" disabled>Choose Options</option>
                                        <option v-for="c in cats" :key="c.id" :value="c.cat_name">{{ c.cat_name }}
                                        </option>
                                    </select>
                                </div>
                                <p class="text-danger">{{ form.errors.job_cat }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Choose Job Qualification</label>
                                <div>
                                    <select class="form-select" v-model="form.qualification" name="qualification"
                                        id="qualification" required>
                                        <option value="null" disabled>Choose Options</option>
                                        <option value="Wassce">Wassce / Senior High School</option>
                                        <option value="Degree">Degree / Diploma / Hnd</option>
                                        <option value="PHD">PHD</option>

                                    </select>

                                </div>
                                <p class="text-danger">{{ form.errors.qualification }}</p>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Salary Per Month (1,500 - 2,000)</label>
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