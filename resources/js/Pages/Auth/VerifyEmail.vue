<script setup>
import { useForm } from '@inertiajs/vue3'



const form = useForm({})

defineProps({
    message: String,
})

const submit = () => {
    form.post(route('verification.send'))
}



</script>
<template>

    <Head title="Email Verification |" />

    <!-- ============================ Page Title Start================================== -->
    <section class="page-head primary-bg-dark py-3" style="background:url(/homeassets/img/bg2.png)no-repeat;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 text-center">

                    <h2 class="ipt-title text-light ">Verify Email</h2>
                    <span class="text-light opacity-75">Enter Your Email For Verification</span>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Login Form Start ================================== -->
    <section class="gray-simple pt-4">
        <div class="container">
            <!-- row Start -->
            <div class="row justify-content-center">

                <!-- Single blog Grid -->
                <div class="col-xl-6 col-lg-8 col-md-12">
                    <div class="vesh-detail-bloc">
                        <div class="vesh-detail-bloc-body pt-2">

                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="row gx-3 gy-4">
                                        <div class="modal-login-form">

                                            <div class="dash-msg-text fs-4 text-center">
                                                <p>Thanks For Signing Up</p>
                                            </div>
                                            <div class="dash-msg-text fs-6 text-center">
                                                <p>To Get Started, You Have To Verify Your Email!
                                                    <br />Click On The Link Sent
                                                    To Your Email To Verify Your Email
                                                </p>
                                            </div>


                                            <div class="modal-flex-item mb-3 mt-2">

                                                <div class="modal-flex-last">
                                                    <p class="text-black mr-2">Didn't Get Email?
                                                        Click Below To Resend
                                                    </p>
                                                </div>


                                            </div>


                                            <p v-if="$page.props.flash.message" class="fs-6 text-success mr-2">{{
                                                $page.props.flash.message }}
                                            </p>


                                            <form @submit.prevent="submit">
                                                <div class="form-group">
                                                    <button
                                                        class="btn btn-primary btn-md full-width fs-5 font--bold btn-lg"
                                                        :disabled="form.processing">
                                                        <span v-if="form.processing">Please wait...</span>
                                                        <span v-else>Resend Verification Email</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
    </section>
    <!-- ============================ Login Form End ================================== -->

</template>