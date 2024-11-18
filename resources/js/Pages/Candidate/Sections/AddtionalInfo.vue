<script setup>

import { useForm } from "@inertiajs/vue3";
import FlashMessage from "../../../Components/FlashMessage.vue";


const props = defineProps({
    user: Object,
    message: String
})

const form = useForm({
    language: props.user.language,
    region: props.user.region,
    address: props.user.address,
    education: props.user.education,
    job_title: props.user.job_title,
    field_of_study: props.user.field_of_study
})

const submit = () => {
    form.post(route('candidate.add'), {
        preserveScroll: true

    });
}

</script>
<template>

    <!-- Card Row -->
    <div class="card">
        <div class="card-header">
            <h4>Additional Information</h4>
        </div>

        <!-- Flash Message -->
        <FlashMessage v-if="form.recentlySuccessful" :message="$page.props.flash.message" :type="success" />

        <!-- Forms -->
        <div class="card-body">
            <form @submit.prevent="submit">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Language(s)</label>
                            <input v-model="form.language" type="text" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.language }}
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input v-model="form.address" type="text" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.address }}
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Region</label>
                            <input v-model="form.region" type="text" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.region }}
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Highest Education</label>
                            <input v-model="form.education" type="text" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.education }}
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input v-model="form.job_title" type="text" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.job_title }}
                            </p>
                        </div>
                    </div>



                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Field Of Study</label>
                            <input v-model="form.field_of_study" type="text" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.field_of_study }}
                            </p>
                        </div>
                    </div>

                    <!-- Submit Busston -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-2 text-center">
                            <button type="submit" class="btn ft--medium btn-primary">Save Additional Info</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Card Row End -->

</template>