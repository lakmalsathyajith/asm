<template>
    <div class="panel-group booking-panel" id="accordion">
        <div class="panel panel-default">
            <div
                    class="panel-heading accordion-toggle collapsed"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    :href="'#collapsethird'+formId"
                    aria-expanded="true">
                <h4 class="panel-title">
                    <a class="accordion-toggle faq-content-head">Occupant {{formId}} (Child)*</a>
                    <i class="indicator pull-right ti-angle-up"></i>
                </h4>
            </div>
            <div :id="'collapsethird'+formId" class="panel-collapse in collapse">
                <div class="panel-body booking-section-1">
                    <div class="booking-section-wrap1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">First Name*</label>
                                        <input v-model="form.firstName" class="form-control flter-button" type="text"/>
                                    </div>
                                </div>
                                <div class="dateofbirth-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Date of Birth*</label>
                                                    <input v-model="form.dob" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Age</label>
                                                    <input v-model="form.age" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                                        <input v-model="form.lastName" class="form-control flter-button" type="text"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {mapState, mapActions} from "vuex";
    import Datepicker from "vuejs-datepicker";

    export default {
        name: "adult-booking-form",
        data() {
            return {
                formId: this.$attrs.formId,
                form: {
                    type: "child",
                    key: "child" + this.$attrs.formId,
                    firstName: "",
                    lastName: "",
                    dob: "",
                    age: ""
                }
            };
        },
        mounted() {
            console.log("Component mounted.", this.$attrs.formId);
        },
        methods: {
            nextStep() {
                window.location = "./booking-second";
            },
            updateBooking() {
                this.updateBookingStore(this.form)
            },
            ...mapActions("booking", ["updateBookingStore"])
        },
        components: {
            Datepicker
        }
    };
</script>