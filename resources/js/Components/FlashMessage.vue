<script>
export default {
    props: {
        message: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            default: 'success', // Default to 'success' if no type is provided
        },
        duration: {
            type: Number,
            default: 5000, // Default to 5 seconds
        }
    },
    data() {
        return {
            visible: true
        };
    },
    computed: {
        alertClass() {
            return `alert alert-${this.type} alert-dismissible fade show`;
        }
    },
    mounted() {
        this.setAutoDismiss();
    },
    methods: {
        setAutoDismiss() {
            setTimeout(() => {
                this.visible = false;
            }, this.duration);
        },
        closeAlert() {
            this.visible = false;
        }
    }
}
</script>


<template>
    <div v-if="visible" :class="alertClass" role="alert">
        {{ message }}
        <button type="button" class="close" @click="closeAlert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>
