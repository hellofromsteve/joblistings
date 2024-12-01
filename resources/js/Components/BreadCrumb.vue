<script setup>
defineProps({

    name: {
        type: String,
        required: true
    },

    accountType: {
        type: String,
        required: true
    },

    dashboardUrl: {
        type: String,
        required: true
    },

    currentPage: {
        type: String,
        required: true
    }
})

</script>
<template>


    <div class="dashboard-tlbar d-block mb-4">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="mb-1 fs-3 fw-medium">{{ name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-muted"><a :href="dashboardUrl">{{ accountType }}
                                Dashboard</a></li>
                        <li class="breadcrumb-item"><a class="text-primary">{{ currentPage }}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</template>