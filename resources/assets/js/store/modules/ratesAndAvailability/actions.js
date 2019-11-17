import {GET_APARTMENTS_LIST, SELECTED_APARTMENT} from './types.js'

export const getApartmentsList = ({commit}) => {

    // some API call here

    Vue.axios.get('/apartments').then(res => {
           commit(GET_APARTMENTS_LIST, res.data);
    }).catch(err => {
        console.log('---err----', err)
    })

    //commit(GET_APARTMENTS_LIST, payload);
}

export const getApartment = ({commit}, payload) => {


    console.log('payload==',payload)
    // some API call here
    Vue.axios.get('/apartments/'+payload).then(res => {
        commit(SELECTED_APARTMENT, res.data);
    }).catch(err => {
        console.log('---err----', err)
    })
}