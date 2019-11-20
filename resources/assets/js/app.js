
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.Vue = require('vue');

import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue'
import Datepicker from 'vuejs-datepicker';
//import axios from 'axios';

import store from './store/store'
Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(Datepicker);
// Vue.use({
//     install (Vue) {
//         Vue.prototype.$api = axios.create({
//             baseURL: process.env.MIX_APP_API_URL
//         })
//     }
// })

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios);
Vue.axios.defaults.baseURL = process.env.MIX_APP_API_URL;

console.log('-')


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('home', require('./components/Home.vue'));
Vue.component('apartment-list', require('./components/ApartmentList.vue'));
Vue.component('short-list', require('./components/Shortlist.vue'));
Vue.component('typical-apartment', require('./components/TypicalApartments.vue'));
Vue.component('faq', require('./components/Faq.vue'));
Vue.component('about', require('./components/About.vue'));
Vue.component('list-with-us', require('./components/ListWithUs.vue'));
Vue.component('contact', require('./components/Contact.vue'));
Vue.component('apartment-details', require('./components/ApartmentDetails.vue'));

const router = new VueRouter({ mode: 'history'});
const app = new Vue(Vue.util.extend({ router, store })).$mount('#app');