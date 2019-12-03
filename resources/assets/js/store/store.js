import Vue from 'vue';
import Vuex from 'vuex';

import * as globalActions from './globalActions';
import ratesAndAvailability from './modules/ratesAndAvailability';
import booking from './modules/booking';
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
        booking
    }
})

export default store;