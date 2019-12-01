<template>
    <div class="panel-group booking-panel" id="accordion">
        <div class="panel panel-default active" @focusout="updateBooking">
            <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                 href="#collapseOne" aria-expanded="true">
                <h4 class="panel-title">
                    <a class="accordion-toggle faq-content-head active">Occupant 1* (Primary)</a>
                    <i class="indicator pull-right ti-angle-up"></i>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse in collapse show">
                <div class="panel-body booking-section-1">
                    <div class="booking-section-wrap1">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">First Name*</label>
                                        <input v-model="form.firstName" class="form-control flter-button"
                                               type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Date of Birth*</label>
                                        <datepicker v-model="form.dob" class="form-control flter-button"></datepicker>
                                        <!-- <input class="form-control flter-button" type="email"> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                        <input v-model="form.telephone" class="form-control flter-button" type="email"/>
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
                                               type="text"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Usual / Personal Address*</label>
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
                                               value="option1"
                                               checked="checked"/>
                                        <label class="form-check-label radio-label-work inputradio-check-lable" for="inlineRadio1">I’m a Worker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input
                                                v-model="form.workerStudent"
                                                class="form-check-input student-info-radio"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="inlineRadio2"
                                                value="option2"/>
                                        <label class="form-check-label radio-label-student inputradio-check-lable" for="inlineRadio2">I’m a Student</label>
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
                                                    <label for="checkin" class="filter-widget-sublabel">Usual / Personal Address*</label>
                                                    <input v-model="form.workPAddress" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Department</label>
                                                    <input v-model="form.workDepartment" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Phone Number</label>
                                                    <input v-model="form.workPhone" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Address</label>
                                                    <input v-model="form.workAddress" class="form-control flter-button" type="text"/>
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
                                                    <label for="checkin" class="filter-widget-sublabel">Usual / Personal Address*</label>
                                                    <input v-model="form.workPAddress" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Department</label>
                                                    <input v-model="form.workDepartment" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Phone Number</label>
                                                    <input v-model="form.workPhone" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Address</label>
                                                    <input v-model="form.workAddress" class="form-control flter-button" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-section-wrap3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="worker-info-head-wrap">
                                    <div class="worker-info-head booking-head-tittle">
                                        <h4>Passport / Driver’s License / Australian Visa</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input v-model="form.documentType"
                                                class="form-check-input"
                                                type="checkbox"
                                                id="inlineCheckbox1"
                                                value="passport"/>
                                        <label class="form-check-label inputradio-check-lable" for="inlineCheckbox1">Passport Details</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input v-model="form.documentType" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="driviers-licence"/>
                                        <label
                                                class="form-check-label inputradio-check-lable"
                                                for="inlineCheckbox2"
                                        >Driver’s License</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input  v-model="form.documentType"
                                                class="form-check-input"
                                                type="checkbox"
                                                id="inlineCheckbox2"
                                                value="aus-visa"
                                        />
                                        <label
                                                class="form-check-label inputradio-check-lable"
                                                for="inlineCheckbox2"
                                        >Australian Visa</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label
                                                for="checkin"
                                                class="filter-widget-sublabel"
                                        >Passport Number*</label>
                                        <input v-model="form.passportNo" class="form-control flter-button"
                                               type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label
                                                for="checkin"
                                                class="filter-widget-sublabel"
                                        >Passport Country of Issue*</label>
                                        <input v-model="form.passportCountry" class="form-control flter-button"
                                               type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label
                                                for="checkin"
                                                class="filter-widget-sublabel important-lable"
                                        >(Max file size: 3MB - File accept: jpeg,
                                            png)</label>


                                        <div class="input-group input-file booking-upload"
                                             name="Fichier1">
                                            <input
                                                    type="text"
                                                    class="form-control upload-val-input"
                                                    placeholder="Choose a file..."
                                            />
                                            <span class="input-group-btn">
                                            <button
                                                    class="btn btn-default btn-choose "
                                                    type="button"
                                            >Upload</button>
                                          </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-section-wrap2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="worker-info-head-wrap">
                                    <div class="worker-info-head booking-head-tittle">
                                        <h4>Next of Kin</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label
                                                for="checkin"
                                                class="filter-widget-sublabel"
                                        >Name of Next of Kin*</label>
                                        <input v-model="form.kin_name" class="form-control flter-button"
                                               type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin"
                                               class="filter-widget-sublabel">Telephone*</label>
                                        <input v-model="form.kin_telephone" class="form-control flter-button"
                                               type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Relationship to You*</label>
                                        <input v-model="form.kin_relationship" class="form-control flter-button"
                                               type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                        <input v-model="form.kin_mobile"
                                                class="form-control flter-button"
                                                id="numbersonly"
                                                type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Email Address (NOT compulsory)</label>
                                        <input v-model="form.kin_email" class="form-control flter-button" type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Address*</label>
                                        <input v-model="form.kin_address" class="form-control flter-button" type="text"/>
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
        name: "primary-booking-form",
        data() {
            return {
                form: {
                    type: "primary",
                    key: "adult1",
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
                    workAddress: "",
                    documentType: "",
                    passportNo: "",
                    passportCountry: "",
                    document: "",
                    kin_name: "",
                    kin_relationship: "",
                    kin_telephone: "",
                    kin_mobile: "",
                    kin_email: "",
                    kin_address: ""
                }
            };
        },
        mounted() {
            console.log("Component mounted.");
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