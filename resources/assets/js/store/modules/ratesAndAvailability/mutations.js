import { UPDATE_VALUE, UPDATE_VALUE2} from './types.js'

export default {

    [UPDATE_VALUE](state, payload) {
        console.log('payload',payload);


        state.title = payload.test;
    },
    [UPDATE_VALUE2](state, payload) {

        state.title = payload;
    }

}