<script>
export default {
    props: {
        jobs: Object, // This will contain the paginated job data from Laravel
    },
    computed: {
        // Create an array of page numbers based on the total number of pages
        totalPages() {
            let pages = [];
            for (let i = 1; i <= this.jobs.last_page; i++) {
                pages.push(i);
            }
            return pages;
        },
    },
    methods: {
        // Handle page change
        changePage(page) {
            if (page < 1 || page > this.jobs.last_page) return; // Prevent going out of bounds
            this.$inertia.visit(`/job/show?page=${page}`); // Trigger page change using Inertia.js
        },
    },
};
</script>

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


<template>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between align-items-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <!-- Previous Page Button -->
                        <li class="page-item" :class="{ 'disabled': jobs.current_page === 1 }">
                            <a class="page-link" href="javascript:void(0);" @click="changePage(jobs.current_page - 1)"
                                aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <!-- Loop through page numbers -->
                        <li class="page-item" :class="{ 'active': jobs.current_page === page }"
                            v-for="page in totalPages" :key="page">
                            <a class="page-link" href="javascript:void(0);" @click="changePage(page)">
                                {{ page }}
                            </a>
                        </li>

                        <!-- Next Page Button -->
                        <li class="page-item" :class="{ 'disabled': jobs.current_page === jobs.last_page }">
                            <a class="page-link" href="javascript:void(0);" @click="changePage(jobs.current_page + 1)"
                                aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="item-shorting clearfix">
                    <div class="left-column">
                        <h4 class="m-sm-0 mb-2"> Showing {{ jobs.from }} to {{ jobs.to }} Results</h4>
                    </div>


                </div>
            </div>
        </div>


    </div>
</template>