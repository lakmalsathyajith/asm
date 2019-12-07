<template>
    <li class="nav-item">
        <a v-if="loginResponse.data && loginResponse.data.name" class="logged-user"
           >Hi, {{loginResponse.data.name}}</a>
        <a v-if="loginResponse.data && loginResponse.data.name" class="trans-btn blue-border-btn"
           @click="logOut">Logout</a>
        <a v-else class="trans-btn blue-border-btn" href="#" data-toggle="modal"
           data-target="#agent-modal">Agent Login</a>

    </li>
</template>
<script>
    import { mapState, mapActions } from "vuex";
    export default {
        name: "header-login",
        data() {
            return {
            };
        },
        mounted() {

            let userToken = localStorage.getItem('user-token');
            if(userToken){
                this.getUser();
            }
        },
        methods: {
            requestLogin(){
                this.login(this.loginData);
            },
            logOut(){
                this.logout();
            },
            ...mapActions("login", ["login","logout", "getUser"])
        },
        computed: {
            ...mapState(["isLoading"]),
            ...mapState("login", ["loginResponse"])
        }
    };
</script>