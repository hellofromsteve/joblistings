<script setup>


defineProps({

    listing: Object
})

</script>
<template>

    <Head title="View Available Jobs |" />

    {{ listing.title }}
</template>