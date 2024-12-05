<script setup>
import { router } from "@inertiajs/vue3";

const props = defineProps({

    listing: Object,
    message: String,
    success: String,
})


const apply = async (listingId) => {
    try {
        const response = await router.post(route('apply', listingId));

        // Success Alert
        Swal.fire({
            title: 'Success!',
            text: props.success || 'Your application has been successfully submitted!',
            icon: 'success',
            confirmButtonText: 'OK',
        });
    } catch (error) {
        if (error.response && error.response.status === 403) {
            Swal.fire({
                title: 'Warning!',
                text: props.message || 'You must create an account to apply for this job.',
                icon: 'warning',
                confirmButtonText: 'Create Account',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    router.get(route('register')); // Redirect to the registration page
                }
            });
        } else {
            Swal.fire({
                title: 'Warning!',
                text: props.message || 'You must create an account to apply for this job.',
                icon: 'warning',
                confirmButtonText: 'Create Account',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    router.get(route('register')); // Redirect to the registration page
                }
            });
        }
    }
};


</script>
<template>

    <div class="jbs-grid-layout style_2 border">
        <div class="jbs-grid-emp-head">
            <div class="jbs-grid-emp-content">

                <div class="jbs-grid-job-caption">
                    <div class="jbs-job-employer-wrap"><span>{{ listing.category }}</span>
                    </div>
                    <div class="jbs-job-title-wrap">
                        <h4><a :href="route('guest.listing.show', { slug: listing.slug })" target="_blank"
                                class="jbs-job-title">{{
                                    listing.title.substring(0, 25) }}</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="jbs-grid-jbs-saved"> <a href="" class="bkrs"><i
                        class="fa-regular fa-bookmark text-primary"></i></a>
            </div>


        </div>
        <div class="jbs-grid-job-edrs mt-3">
            <div class="jbs-info-ico-style">
                <div class="jbs-single-y1 style-1"><span><i class="fa-solid fa-location-dot"></i></span>{{
                    listing.region }}, {{ listing.city }}</div>

                <div class="jbs-single-y1 style-3"><span><i class="fa-solid fa-certificate"></i></span>{{
                    listing.qualification }}</div>
            </div>
        </div>
        <div class="jbs-grid-job-package-info">
            <div class="jbs-grid-package-title">
                <p class="fs-sm">GHC {{ listing.salary }}<span> /
                        M</span></p>
            </div>
            <div class="jbs-grid-posted"><span>{{ new
                Date(listing.created_at).toLocaleDateString('en-GB', {
                    month: 'short',
                    day: 'numeric', year: 'numeric'
                }) }}
                </span></div>
        </div>
        <div class="jbs-grid-job-apply-btns">
            <div class="jbs-btn-groups">
                <a :href="route('guest.listing.show', { slug: listing.slug })" target="_blank"
                    class="btn btn-sm btn-light-primary px-3">View
                    Detail</a>
                <button @click="apply(listing.id)" class="btn btn-sm btn-primary p-3">Apply</button>
            </div>
        </div>
    </div>
</template>