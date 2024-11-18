<script setup>
import { useForm } from "@inertiajs/vue3";
import FlashMessage from "../../../Components/FlashMessage.vue";


const props = defineProps({
    user: Object,
    message: String
})

const form = useForm({
    full_name: props.user.full_name,
    email: props.user.email,
    phone: props.user.phone,
    dob: props.user.dob
})

const submit = () => {
    form.post(route('candidate.basic'), {
        preserveScroll: true

    });
}



</script>
<template>

    <!-- Card Row -->
    <div class="card">
        <div class="card-header">
            <h4>Basic Information <span class="text-danger">(Update Date of Birth To Apply (18+ Years))</span> </h4>
        </div>


        <FlashMessage v-if="form.recentlySuccessful" :message="$page.props.flash.message" :type="success" />



        <div class="card-body">
            <form @submit.prevent="submit">
                <div class="row ">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Full Name <span class="text-danger fs-6">*</span></label>
                            <input v-model="form.full_name" type="text" class="form-control"
                                placeholder="Enter Your Full Name">
                            <p class="text-danger">
                                {{ form.errors.full_name }}
                            </p>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Phone <span class="text-danger fs-6">*</span></label>
                            <input v-model="form.phone" type="tel" class="form-control"
                                placeholder="Enter Your Phone Number">
                            <p class="text-danger">
                                {{ form.errors.phone }}
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Email <span class="text-danger fs-6">*</span></label>
                            <input v-model="form.email" type="text" class="form-control" placeholder="Enter Your Email">
                            <p class="text-danger">
                                {{ form.errors.email }}
                            </p>
                            <p class="text-danger mt-0 text-sm">
                                Changing Email Will Log You Out Pending Email Verification On The New Address
                            </p>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="form-group">
                            <label>Date Of Birth <span class="text-danger fs-6">*</span></label>
                            <input v-model="form.dob" id="date" type="date" class="form-control">
                            <p class="text-danger">
                                {{ form.errors.dob }}
                            </p>
                        </div>
                    </div>


                    <!-- Submit Busston -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-2 text-center">
                            <button type="submit" class="btn ft--medium btn-primary">Save Basic Details</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Card Row End -->

</template>