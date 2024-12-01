<script setup>


defineProps({

    job: Object,
})

</script>
<template>


    <div class="jbs-grid-layout style_2 border">
        <div class="jbs-grid-emp-head">
            <div class="jbs-grid-emp-content">

                <div class="jbs-grid-job-caption">
                    <div class="jbs-job-employer-wrap"><span>{{ job.job_cat }}</span>
                    </div>
                    <div class="jbs-job-title-wrap">
                        <h4><a :href="route('guest.job-show', job.id)" class="jbs-job-title">{{
                            job.job_title.substring(0, 25) }}</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="jbs-grid-jbs-saved"><a href="JavaScript:Void(0);" class="bkrs"><i
                        class="fa-regular fa-bookmark"></i></a></div>
        </div>
        <div class="jbs-grid-job-edrs mt-3">
            <div class="jbs-info-ico-style">
                <div class="jbs-single-y1 style-1"><span><i class="fa-solid fa-location-dot"></i></span>{{
                    job.region }}, {{ job.city }}</div>

                <div class="jbs-single-y1 style-3"><span><i class="fa-solid fa-certificate"></i></span>{{
                    job.qualification }}</div>
            </div>
        </div>
        <div class="jbs-grid-job-package-info">
            <div class="jbs-grid-package-title">
                <p class="fs-sm">GHC {{ job.salary }}<span> / M</span></p>
            </div>
            <div class="jbs-grid-posted"><span>{{ new Date(job.created_at).toLocaleDateString('en-GB', {
                month: 'short',
                day: 'numeric', year: 'numeric'
            }) }}
                </span></div>
        </div>
        <div class="jbs-grid-job-apply-btns">
            <div class="jbs-btn-groups">
                <a :href="route('guest.job-show', job.id)" class="btn btn-sm btn-light-primary px-1">View
                    Detail</a>
                <a href="JavaScript:Void(0);" class="btn btn-sm btn-primary px-1">Quick
                    Apply</a>
            </div>
        </div>
    </div>
</template>