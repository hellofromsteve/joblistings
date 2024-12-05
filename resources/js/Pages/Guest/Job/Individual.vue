<script setup>


defineProps({

    listing: Object
});

</script>


<template>

    <Head title="Show Listing Details |" />

    <div class="page-head">
        {{ listing.title }}
    </div>

</template>