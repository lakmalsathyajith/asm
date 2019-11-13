import { UPDATE_VALUE, UPDATE_VALUE2 } from './types.js'

export const updateValue = ({commit},payload) => {

       // some API call here
       console.log('called.', payload);

       commit(UPDATE_VALUE,payload) ;
}

export const changeValue = ({commit},payload) => {

       // some API call here
       console.log('changeValue called.');

       commit(UPDATE_VALUE2,payload) ;
}