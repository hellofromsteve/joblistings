<script setup>


defineProps({

    job: Object
});

</script>


<template>

    <Head :title="`${job.job_title} Show Job Details |`" />

    <div class="page-head">
        {{ job.job_title }}
    </div>

</template>