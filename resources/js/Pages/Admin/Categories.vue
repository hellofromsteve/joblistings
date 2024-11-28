<script setup>


import BreadCrumb from "../../Components/BreadCrumb.vue";
import { useForm } from "@inertiajs/vue3";



const form = useForm({
    cat_name: "",
})

defineProps({
    cats: Object
})




const submit = () => {

    form.post(route('admin.categories'), {

        onSuccess: () => {

            Swal.fire({
                title: 'Success!',
                text: 'Job Category Added Successfuly',
                icon: 'success',
                confirmButtonText: 'Okay'
            })

            form.reset();

        }

    })
}

</script>

<template>

    <Head title="Admin | All Job Categories Page | " />
    <div class="dashboard-content">
        <BreadCrumb name="Admin Categories" accountType="Admin" :dashboardUrl="route('admin.dashboard')"
            currentPage="Admin Categories" />

        <div class="dashboard-widg-bar d-block">

            <!-- Header Wrap -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <span class="text-danger px-3">{{ form.errors.cat_name }}</span>
                        <div class="card-header">
                            <div class="_mp-inner-content elior">

                                <div class="_mp-inner-first">
                                    <div class="search-inline">
                                        <input v-model="form.cat_name" type="text" class="form-control"
                                            placeholder="Add New Category Here">
                                        <button @click="submit" type="submit" class="btn btn-primary"
                                            :disabled="form.processing">

                                            <span v-if="form.processing">Please wait...</span>
                                            <span v-else>Add Category</span>
                                        </button>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Job Categories</th>


                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="Object.keys(cats).length">
                                        <tr v-for="c in cats" :key="c.id">
                                            <td>{{ c.cat_name }}</td>


                                            <td>
                                                <a href="JavaScript:Void(0);"
                                                    class="btn btn-md btn-light-danger px-3 me-2"><i
                                                        class="fa-solid fa-xmark"></i></a>

                                            </td>
                                        </tr>

                                    </tbody>
                                    <div class="d-flex justify-content-center align-items-center min-vh-25">

                                        <h5 v-if="cats.length === 0" class="text-danger"> No Categories Found</h5>
                                    </div>
                                </table>
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