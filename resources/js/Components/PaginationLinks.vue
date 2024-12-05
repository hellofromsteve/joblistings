<script setup>


defineProps({

    paginator: Object
})

const getLabel = (label) => {
    if (label.toLowerCase().includes("next")) {
        return ">>";  // Replace with 'Next' if the label contains "next"
    } else if (label.toLowerCase().includes("previous")) {
        return "<<";  // Replace with 'Previous' if the label contains "previous"
    }
    return label;  // Otherwise, return the original label
};


</script>

<template>
    <div class="pagination-container py-4">
        <nav aria-label="Page navigation">
            <div class="d-flex justify-content-between align-items-center">

                <ul class="pagination m-0">
                    <li v-for="(link, i) in paginator.links" :key="i" class="page-item" :class="{
                        'disabled': link.active && !link.url,
                        'active': link.active && link.url
                    }">
                        <a v-if="link.url" class="page-link" :href="link.url">
                            {{ getLabel(link.label) }}
                        </a>
                        <span v-else class="page-link">
                            {{ getLabel(link.label) }}
                        </span>
                    </li>
                </ul>

                <!-- <div v-if="paginator.from && paginator.to" class="item-shorting">
                    <h6 class="m-sm-0 mb-2"> Showing {{ paginator.from }} to {{ paginator.to }} of {{
                        paginator.total
                        }} results.</h6>
                </div> -->
            </div>
        </nav>
    </div>

</template>

<style scoped>
.pagination .disabled .page-link {
    pointer-events: none;
    color: #ccc;
}

.pagination .active .page-link {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
}
</style>
