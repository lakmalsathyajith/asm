<template>
    <div>
    <div v-if="isLoading" v-bind:style="{ display: ''}" class="flexbox">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>
    <div v-show="dataArrived" class="modal fade" id="agent-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="agent-logo-wrap">
                                    <img src="/images/main-logo.png" alt="">
                                </div>
                                <div class="agent-tittle">
                                    <h3 class="sub-heading">Agent login</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                  <div v-if="loginResponse && loginResponse[0]=='error'" class="login-error">
                                      These credentials are invalid
                                  </div>
                                </div>
                                <div class="form-group agent-email-wrap">
                                    <span class="agent-email-span form-control-feedback"></span>
                                    <input v-model="loginData.email" type="email" class="form-control agent-email-input"
                                           placeholder="Email address">
                                </div>


                                <div class="form-group agent-email-wrap">
                                    <span class="agent-password-span form-control-feedback"></span>
                                    <input v-model="loginData.password" type="password" class="form-control agent-email-input"
                                           placeholder="Password">
                                </div>


                            </div>

                        </div>

                        <!-- <div class="forget-passwrd-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="forget-pswd">Forgot password?</span>
                                </div>
                            </div>
                        </div> -->

                        <div class="login-button-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="filter-widget">
                                            <a :disabled="!loginData.email || loginData.email.length == 0 || !loginData.password || loginData.password.length==0" @click="requestLogin" class="btn booking-btn agent-login-btn">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="close-agent-button-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="filter-widget">
                                            <a class="btn modal-close-btn" id="login-modal-close" data-dismiss="modal">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="agen-copyright-wrap">
                        <p>Copyright © 2019 Apartment Stays Melbourne Pty Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
    import { mapState, mapActions } from "vuex";
    export default {
        name: "header-loader",
        data() {
            return {
                loginData: {
                    email:"",
                    password:""
                }
            };
        },
        mounted() {

        },
        methods: {
            requestLogin(){
                this.login(this.loginData);
            },
        ...mapActions("login", ["login"])
        },
        computed: {
            ...mapState(["isLoading"]),
            ...mapState("login", ["loginResponse"]),
            dataArrived(){
                if(this.loginResponse.errors && this.loginResponse.errors.length===0){
                    $('.modal-backdrop').remove();
                    return this.loginResponse.errors && this.loginResponse.errors.length===0;
                }else{
                    console.log('false');
                    return false
                }
            }
        }
    };
</script>