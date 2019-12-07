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
                                        <input v-model="form.first_name" class="form-control flter-button" type="text"/>
                                        <span v-if="errorSpan('first_name')" class="error">{{errorSpan('first_name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Date of Birth*</label>
                                        <datepicker v-model="form.date_of_birth" class="form-control flter-button"></datepicker>
                                        <span v-if="errorSpan('date_of_birth')" class="error">{{errorSpan('date_of_birth')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                        <input v-model="form.land_phone" class="form-control flter-button" type="tel"/>
                                        <span v-if="errorSpan('land_phone')" class="error">{{errorSpan('land_phone')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                                        <input v-model="form.last_name" class="form-control flter-button" type="text"/>
                                        <span v-if="errorSpan('last_name')" class="error">{{errorSpan('last_name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Email*</label>
                                        <input v-model="form.email" class="form-control flter-button" type="text"/>
                                        <span v-if="errorSpan('email')" class="error">{{errorSpan('email')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                        <input v-model="form.mobile_phone" class="form-control flter-button" id="numbersonly"
                                               type="tel"/>
                                        <span v-if="errorSpan('mobile_phone')" class="error">{{errorSpan('mobile_phone')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Usual / Personal
                                            Address*</label>
                                        <input v-model="form.address" class="form-control flter-button" type="text"/>
                                        <span v-if="errorSpan('address')" class="error">{{errorSpan('address')}}</span>
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
                                        <input v-model="form.emp_status"
                                               class="form-check-input worker-info-radio"
                                               type="radio"
                                               name="inlineRadioOptions"
                                               id="inlineRadio1"
                                               value="EMPLOYEE"
                                               checked="checked"/>
                                        <label class="form-check-label inputradio-check-lable" for="inlineRadio1">I’m a
                                            Worker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input v-model="form.emp_status"
                                               class="form-check-input student-info-radio"
                                               type="radio"
                                               name="inlineRadioOptions"
                                               id="inlineRadio2"
                                               value="STUDENT"/>
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
                                                    <label for="checkin" class="filter-widget-sublabel">Place of Work whilst in Australia*</label>
                                                    <input v-model="form.emp_personal_address" class="form-control flter-button"
                                                           type="text"/>
                                                    <span v-if="errorSpan('emp_personal_address')" class="error">{{errorSpan('emp_personal_address')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin"
                                                           class="filter-widget-sublabel">Department</label>
                                                    <input v-model="form.emp_department"
                                                           class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Phone
                                                        Number</label>
                                                    <input v-model="form.emp_phone" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work
                                                        Address</label>
                                                    <input v-model="form.emp_address" class="form-control flter-button"
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
                                                    <label for="checkin" class="filter-widget-sublabel">Place of Study whilst in Australia*</label>
                                                    <input v-model="form.emp_personal_address" class="form-control flter-button"
                                                           type="text"/>
                                                    <span v-if="errorSpan('emp_personal_address')" class="error">{{errorSpan('emp_personal_address')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin"
                                                           class="filter-widget-sublabel">Student number</label>
                                                    <input v-model="form.emp_department"
                                                           class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">School Phone
                                                        Number</label>
                                                    <input v-model="form.emp_phone" class="form-control flter-button"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">School
                                                        Address</label>
                                                    <input v-model="form.emp_address" class="form-control flter-button"
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
                    is_primary: false,
                    type: "ADULT",
                    key: "adult" + this.$attrs.formId,
                    first_name: "",
                    last_name: "",
                    date_of_birth: "",
                    email: "",
                    land_phone: "",
                    mobile_phone: "",
                    address: "",
                    emp_status: "",
                    emp_personal_address: "",
                    emp_department: "",
                    emp_phone: "",
                    emp_address: ""
                }
            };
        },
        mounted() {
           
        },
        methods: {
            updateBooking() {
                this.updateBookingStore(this.form)
            },
            errorSpan(attr){
                let message = this.customErrors[attr];
                return (message) ? message : false;
            },
            ...mapActions("booking", ["updateBookingStore"])
        },
        computed: {
            ...mapState("booking", ["errors"]),
            customErrors(){
                let selectedOccupants = this.$store.state.booking.bookingData
                let errors = this.$store.state.booking.errors
                let index;
                selectedOccupants.forEach((el, i)=>{
                    if(el.key===this.form.key){
                        index=i
                    }
                });
                let selectedErrorKeys = Object.keys(errors).filter((el)=>{ return el.startsWith('occupants.'+index)});
                let customErrors = {};
                selectedErrorKeys.forEach((key)=>{
                    let splitted = key.split('occupants.'+index+".")
                    customErrors[splitted[1]] = errors[key][0]
                });

                return  customErrors
            }
        },
        components: {
            Datepicker
        }
    };
</script>