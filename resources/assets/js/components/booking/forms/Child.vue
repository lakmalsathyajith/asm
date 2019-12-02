<template>
    <div class="panel-group booking-panel" id="accordion">
        <div class="panel panel-default" @focusout="updateBooking">
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
                                        <input v-model="form.first_name" class="form-control flter-button" type="text"/>
                                        <span v-if="errorSpan('first_name')" class="error">{{errorSpan('first_name')}}</span>
                                    </div>
                                </div>
                                <div class="dateofbirth-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Date of Birth*</label>
                                                    <input v-model="form.date_of_birth" class="form-control flter-button" type="text"/>
                                                    <span v-if="errorSpan('date_of_birth')" class="error">{{errorSpan('date_of_birth')}}</span>
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
                                        <input v-model="form.last_name" class="form-control flter-button" type="text"/>
                                        <span v-if="errorSpan('last_name')" class="error">{{errorSpan('last_name')}}</span>
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
                    type: "CHILD",
                    key: "child" + this.$attrs.formId,
                    first_name: "",
                    last_name: "",
                    date_of_birth: "",
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