<script setup>


defineProps({
    paginator: Object
})

</script>
<template>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <div v-for="(link, i) in paginator.links" :key="i">
                <component :is="link.url ? 'Link' : 'span'" :href="link.url" v-html="link.label" class=" page-link " />
            </div>
        </div>
    </div>

</template>