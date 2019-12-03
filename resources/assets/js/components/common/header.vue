<template>
    <div v-if="isLoading" v-bind:style="{ display: ''}" class="flexbox">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>
</template>
<script>
    import { mapState, mapActions } from "vuex";
    export default {
        name: "header-loader",
        data() {
            return {};
        },
        mounted() {
            //
        },
        computed: {
            ...mapState(["isLoading"])
        }
    };
</script>