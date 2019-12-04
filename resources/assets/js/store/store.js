import Vue from 'vue';
import Vuex from 'vuex';

import * as globalActions from './globalActions';
import ratesAndAvailability from './modules/ratesAndAvailability';
import booking from './modules/booking';
import contact from './modules/contact';
import login from './modules/login';
import globalMutations from "./globalMutations";

Vue.use(Vuex);
const store = new Vuex.Store({
    state: {
        isLoading : false
    },
    getters:{},
    mutations:globalMutations,
    actions:globalActions,
    modules:{
        ratesAndAvailability,
        booking,
        contact,
        login
    }
})

export default store;