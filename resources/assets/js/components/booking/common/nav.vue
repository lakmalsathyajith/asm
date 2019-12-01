<template>
    <div class="row">
        <div class="full-row wizard-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-wizard">
                            <li><a href="/booking-first"> Step 1</a></li>
                            <li><a href="/booking-second">Step 2</a></li>
                            <li class="active"><a href="/booking-third">Step 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "booking-nav",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>