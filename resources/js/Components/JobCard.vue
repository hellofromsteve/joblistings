<script setup>


defineProps({

    job: Object,
})

</script>
<template>


    <div class="jbs-grid-layout style_2 border">
        <div class="jbs-grid-emp-head">
            <div class="jbs-grid-emp-content">
                <div class="jbs-grid-emp-thumb jbs-verified"><a href="job-detail.html">
                        <figure><img src="https://placehold.co/200x200" class="img-fluid" alt=""></figure>
                    </a></div>
                <div class="jbs-grid-job-caption">
                    <div class="jbs-job-employer-wrap"><span>{{ job.job_cat }}</span>
                    </div>
                    <div class="jbs-job-title-wrap">
                        <h4><a href="job-detail.html" class="jbs-job-title">{{
                            job.job_title.substring(0, 30) }}</a>
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
                <div class="jbs-single-y1 style-2"><span><i class="fa-solid fa-person"></i></span>{{ job.gender }}
                </div>
                <div class="jbs-single-y1 style-3"><span><i class="fa-solid fa-certificate"></i></span>{{
                    job.qualification }}</div>
            </div>
        </div>
        <div class="jbs-grid-job-package-info">
            <div class="jbs-grid-package-title">
                <h5>GHC {{ job.salary }}<span> / Month</span></h5>
            </div>
            <div class="jbs-grid-posted"><span>{{ new
                Date(job.created_at).toDateString()
                    }}</span></div>
        </div>
        <div class="jbs-grid-job-apply-btns">
            <div class="jbs-btn-groups">
                <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                    Detail</a>
                <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick
                    Apply</a>
            </div>
        </div>
    </div>
</template>