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
                                        <input v-model="form.first_name" class="form-control flter-button"
                                               type="text" tabindex="1"/>
                                        <span v-if="errorSpan('first_name')" class="error">{{errorSpan('first_name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Date of Birth*</label>
                                        <datepicker v-model="form.date_of_birth" class="form-control flter-button" tabindex="3"></datepicker>
                                        <span v-if="errorSpan('date_of_birth')" class="error">{{errorSpan('date_of_birth')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                        <input v-model="form.land_phone" class="form-control flter-button" type="tel" tabindex="5"/>
                                        <span v-if="errorSpan('land_phone')" class="error">{{errorSpan('land_phone')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                                        <input v-model="form.last_name" class="form-control flter-button" type="text" tabindex="2"/>
                                        <span v-if="errorSpan('last_name')" class="error">{{errorSpan('last_name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Email*</label>
                                        <input v-model="form.email" class="form-control flter-button" type="text" tabindex="4"/>
                                        <span v-if="errorSpan('email')" class="error">{{errorSpan('email')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                        <input v-model="form.mobile_phone" class="form-control flter-button" id="numbersonly"
                                               type="tel" tabindex="6"
                                        />
                                        <span v-if="errorSpan('mobile_phone')" class="error">{{errorSpan('mobile_phone')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Usual / Personal Address*</label>
                                        <input v-model="form.address" class="form-control flter-button" type="text" tabindex="7"/>
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
                                        <label class="form-check-label radio-label-work inputradio-check-lable" for="inlineRadio1">I’m a Worker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input
                                                v-model="form.emp_status"
                                                class="form-check-input student-info-radio"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="inlineRadio2"
                                                value="STUDENT"/>
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
                                                    <label for="checkin" class="filter-widget-sublabel">Place of Work whilst in Australia*</label>
                                                    <input v-model="form.emp_personal_address" class="form-control flter-button" type="text" tabindex="8"/>
                                                    <span v-if="errorSpan('emp_personal_address')" class="error">{{errorSpan('emp_personal_address')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Department (Optional)</label>
                                                    <input v-model="form.emp_department" class="form-control flter-button" type="text"  tabindex="9"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Phone Number (Optional)</label>
                                                    <input v-model="form.emp_phone" class="form-control flter-button" type="text"  tabindex="10"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Work Address (Optional)</label>
                                                    <input v-model="form.emp_address" class="form-control flter-button" type="text"  tabindex="11"/>
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
                                                    <input v-model="form.emp_personal_address" class="form-control flter-button" type="text" tabindex="8"/>
                                                    <span v-if="errorSpan('emp_personal_address')" class="error">{{errorSpan('emp_personal_address')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Student number (Optional)</label>
                                                    <input v-model="form.emp_department" class="form-control flter-button" type="text" tabindex="9"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">School Phone
                                                        Number (Optional)</label>
                                                    <input v-model="form.emp_phone" class="form-control flter-button" type="text" tabindex="10"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">School Address (Optional)</label>
                                                    <input v-model="form.emp_address" class="form-control flter-button" type="text" tabindex="11"/>
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
                                        <input v-model="form.identity_type"
                                                class="form-check-input"
                                                type="radio"
                                                name="identity_type"
                                                id="inlineCheckbox1"
                                                value="passport"/>
                                        <label class="form-check-label inputradio-check-lable" for="inlineCheckbox1">Passport Details</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input v-model="form.identity_type" class="form-check-input"
                                               name="identity_type" type="radio" id="inlineCheckbox2" value="driviers-licence"/>
                                        <label
                                                class="form-check-label inputradio-check-lable"
                                                for="inlineCheckbox2"
                                        >Driver’s License</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input  v-model="form.identity_type"
                                                class="form-check-input"
                                                name="identity_type"
                                                type="radio"
                                                id="inlineCheckbox3"
                                                value="aus-visa"
                                        />
                                        <label
                                                class="form-check-label inputradio-check-lable"
                                                for="inlineCheckbox3"
                                        >Australian Visa</label>
                                        <span v-if="errorSpan('identity_type')" class="error">{{errorSpan('identity_type')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label v-if="form.identity_type=='passport'" for="checkin" class="filter-widget-sublabel">Passport Number*</label>
                                        <label v-if="form.identity_type=='driviers-licence'" for="checkin" class="filter-widget-sublabel">Drivers License Number*</label>
                                        <label v-if="form.identity_type=='aus-visa'" for="checkin" class="filter-widget-sublabel">Australian Visa Number*</label>
                                        
                                        <input v-model="form.identity_number" class="form-control flter-button"
                                               type="text" tabindex="12"/>
                                        <span v-if="errorSpan('identity_number')" class="error">{{errorSpan('identity_number')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label v-if="form.identity_type=='passport'" for="checkin" class="filter-widget-sublabel">Passport Country of issue*</label>
                                        <label v-if="form.identity_type=='driviers-licence'" for="checkin" class="filter-widget-sublabel">Drivers License place of issue*</label>
                                        <label v-if="form.identity_type=='aus-visa'" for="checkin" class="filter-widget-sublabel">Australian Visa Expiry date*</label>
                                        
                                        <input v-model="form.identity_issued_by" class="form-control flter-button"
                                               type="text" tabindex="13"/>
                                        <span v-if="errorSpan('identity_issued_by')" class="error">{{errorSpan('identity_issued_by')}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label v-if="form.identity_type=='passport'" for="checkin" class="filter-widget-sublabel">Attach Your Passport Copy*</label>
                                        <label v-if="form.identity_type=='driviers-licence'" for="checkin" class="filter-widget-sublabel">Attach Your Drivers License copy*</label>
                                        <label v-if="form.identity_type=='aus-visa'" for="checkin" class="filter-widget-sublabel">Attach Your Australian Visa Copy*</label>
                                    <div class="dropdown filter-widget">
                                        <label
                                                for="checkin"
                                                class="filter-widget-sublabel important-lable"
                                        >(Max file size: 10MB - File accept: jpeg, jpg, png, doc, docx, pdf)</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="uploads" class="custom-file-input " id="file" @change="onFileChange" tabindex="14" accept="image/*,.pdf,.docx,.doc">
                                                <label class="custom-file-label" for="file">Select a file to upload</label>
                                            </div>
                                            <span v-if="errorSpan('uploads')" class="error">{{errorSpan('uploads')}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-12">
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
                                                    type="file"
                                                    class="form-control upload-val-input"
                                                    placeholder="Choose a file..."
                                            />


                                            <span class="input-group-btn"  v-model="form.identity_document">
                                            <button
                                                    class="btn btn-default btn-choose "
                                                    type="button"
                                            >Upload</button>
                                          </span>
                                        </div>

                                    </div>
                                </div>
                            </div>-->
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
                                        <input v-model="form.next_of_kin" class="form-control flter-button"
                                               type="text"  tabindex="15"/>
                                        <span v-if="errorSpan('next_of_kin')" class="error">{{errorSpan('next_of_kin')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin"
                                               class="filter-widget-sublabel">Telephone*</label>
                                        <input v-model="form.kin_land_phone" class="form-control flter-button"
                                               type="text"  tabindex="17"/>
                                        <span v-if="errorSpan('kin_land_phone')" class="error">{{errorSpan('kin_land_phone')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Relationship to You*</label>
                                        <input v-model="form.kin_relationship" class="form-control flter-button"
                                               type="text" tabindex="16"/>
                                        <span v-if="errorSpan('kin_relationship')" class="error">{{errorSpan('kin_relationship')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                        <input v-model="form.kin_mobile_phone"
                                                class="form-control flter-button"
                                                id="numbersonly"
                                                type="text"  tabindex="18"/>
                                        <span v-if="errorSpan('kin_mobile_phone')" class="error">{{errorSpan('kin_mobile_phone')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Email Address (Optional)</label>
                                        <input v-model="form.kin_email" class="form-control flter-button" type="text"  tabindex="19"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <label for="checkin" class="filter-widget-sublabel">Address*</label>
                                        <input v-model="form.kin_address" class="form-control flter-button" type="text"  tabindex="20"/>
                                        <span v-if="errorSpan('kin_address')" class="error">{{errorSpan('kin_address')}}</span>
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
                    is_primary: true,
                    type: "ADULT",
                    key: "adult1",
                    first_name: "",
                    last_name: "",
                    date_of_birth: "",
                    email: "",
                    land_phone: "",
                    mobile_phone: "",
                    address: "",
                    emp_status: "EMPLOYEE",
                    emp_personal_address: "",
                    emp_department: "",
                    emp_phone: "",
                    emp_address: "",
                    identity_type: "passport",
                    identity_number: "",
                    identity_issued_by: "",
                    uploads:"",
                    next_of_kin: "",
                    kin_relationship: "",
                    kin_land_phone: "",
                    kin_mobile_phone: "",
                    kin_email: "",
                    kin_address: ""
                }
            };
        },
        mounted() {
            
            $('.custom-file-input').on('change',function(){
                const fileName = $(this).val().replace('C:\\fakepath\\', " ");
                
                $(this).next('.custom-file-label').html(fileName);
            })
        },
        methods: {
            updateBooking() {
                this.updateBookingStore(this.form)
            },
            errorSpan(attr){
                let message = this.customErrors[attr];
                return (message) ? message : false;
            },
            onFileChange(e){
                let file = $('input[name="uploads"]').get(0).files[0];
                let formData = new FormData();
                    formData.append('uploads', file);
                    formData.append('folder','identity');
                    formData.append('is_temp', true);
                    formData.append('is_visible', false);
                 let data = {
                     formData,
                     key:this.form.key
                 }
                this.fileUpload(data);
            },
            ...mapActions("booking", ["updateBookingStore", "updateOccupants","fileUpload"])
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