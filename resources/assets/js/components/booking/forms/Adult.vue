<template>
    <div class="panel-group booking-panel" id="accordion">
        <div class="panel panel-default" @focusout="updateBooking">
            <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                 :href="'#collapsetwo'+formId" aria-expanded="true">
                <h4 class="panel-title">
                    <a class="accordion-toggle faq-content-head">Occupant {{formId}}*</a>
                    <i class="indicator pull-right ti-angle-up"></i>
                </h4>
            </div>
            <div :id="'collapsetwo'+formId" class="panel-collapse in collapse">
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
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Date of Birth*</label>
                                        <input v-model="form.dob" class="form-control flter-button" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                        <input v-model="form.telephone" class="form-control flter-button" type="tel"/>
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
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Email*</label>
                                        <input v-model="form.email" class="form-control flter-button" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                        <input v-model="form.mobile" class="form-control flter-button" id="numbersonly"
                                               type="tel"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Usual / Personal
                                            Address*</label>
                                        <input v-model="form.address" class="form-control flter-button" type="text"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-section-wrap2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input v-model="form.workerStudent"
                                               class="form-check-input worker-info-radio"
                                               type="radio"
                                               name="inlineRadioOptions"
                                               id="inlineRadio1"
                                               value="worker"
                                               checked="checked"/>
                                        <label class="form-check-label inputradio-check-lable" for="inlineRadio1">I’m a
                                            Worker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input v-model="form.workerStudent"
                                               class="form-check-input student-info-radio"
                                               type="radio"
                                               name="inlineRadioOptions"
                                               id="inlineRadio2"
                                               value="student"/>
                                        <label class="form-check-label inputradio-check-lable" for="inlineRadio2">I’m a
                                            Student</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="worker-info">
                                    <div class="worker-info-head-wrap">
                                        <div class="worker-info-head booking-head-tittle">
                                            <h4>Worker Info</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Usual / Personal
                                                        Address*</label>
                                                    <input v-model="form.workPAddress" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin"
                                                           class="filter-widget-sublabel">Department</label>
                                                    <input v-model="form.workDepartment"
                                                           class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Phone
                                                        Number</label>
                                                    <input v-model="form.workPhone" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work
                                                        Address</label>
                                                    <input v-model="form.workAddress" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="student-info">
                                    <div class="worker-info-head-wrap">
                                        <div class="worker-info-head booking-head-tittle">
                                            <h4>Student Info</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Usual / Personal
                                                        Address*</label>
                                                    <input v-model="form.workPAddress" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin"
                                                           class="filter-widget-sublabel">Department</label>
                                                    <input v-model="form.workDepartment"
                                                           class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Phone
                                                        Number</label>
                                                    <input v-model="form.workPhone" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work
                                                        Address</label>
                                                    <input v-model="form.workAddress" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
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
                    type: "adult",
                    key: "adult" + this.$attrs.formId,
                    firstName: "",
                    lastName: "",
                    dob: "",
                    email: "",
                    telephone: "",
                    mobile: "",
                    address: "",
                    workerStudent: "",
                    workPAddress: "",
                    workDepartment: "",
                    workPhone: "",
                    workAddress: ""
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