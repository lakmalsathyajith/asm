<template>
    <div class="row">
        <!-- <div class="full-row wizard-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-wizard">
                            <li v-if="navId==1" class="active"><a href="#"> Step 1</a></li>
                            <li v-else><a href="#"> Step 1</a></li>
                            <li v-if="navId==2" class="active"><a href="#">Step 2</a></li>
                            <li v-else><a href="#">Step 2</a></li>
                            <li v-if="navId==3" class="active"><a href="#">Step 3</a></li>
                            <li v-else><a href="#">Step 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</template>
<script>
    export default {
        name: "booking-nav",
        data() {
            return {
                navId: this.$attrs.id
            };
        },
        mounted() {
           
        }
    }
</script>