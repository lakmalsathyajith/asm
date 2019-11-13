import Vue from 'vue';
import Vuex from 'vuex';

import ratesAndAvailability from './modules/ratesAndAvailability';

Vue.use(Vuex);
const store = new Vuex.Store({
    state: {

    },
    getters:{
        // get what ever property in the state with a modification // use mapGetters helper to access in the components
    },
    mutations:{
        // use when ever want to modify the state in a synchronous manner
    },
    actions:{
        // use to modify state asynchronously
    },
    modules:{
        ratesAndAvailability
    }
})

export default store;