import moment from 'moment';
import { GET_USER_DETAILS } from './types.js';
import { isLoading } from '../../helpers';

/**
 * upload the file on change
 * @param commit
 * @param dispatch
 * @param payload
 */
export const login = ({ commit, dispatch }, payload) => {
  isLoading(dispatch, true);
  Vue.axios
    .post('/login', payload)
    .then(res => {
      if (res.data.data && res.data.data.token) {
        let token = res.data.data.token;

        localStorage.setItem('user-token', token);
        let headers = {
          Accept: 'application/json',
          Authorization: `Bearer ${token}`,
          'Content-Type': 'application/json'
        };
        Vue.axios
          .get('/authUser', { headers })
          .then(res => {
            commit(GET_USER_DETAILS, res.data);
          })
          .catch(err => {
            console.log('---err----', err);
          });
      }else{
        commit(GET_USER_DETAILS, ['error']);
      }
      isLoading(dispatch, false);
    })
    .catch(err => {
      console.log('---err----', err);
      isLoading(dispatch, false);
    });
};

/**
 * upload the file on change
 * @param commit
 * @param dispatch
 * @param payload
 */
export const getUser = ({ commit, dispatch }, payload) => {
  //isLoading(dispatch, true);
  let token = localStorage.getItem('user-token');
  let headers = {
    Accept: 'application/json',
    Authorization: `Bearer ${token}`,
    'Content-Type': 'application/json'
  };
  Vue.axios
    .get('/authUser', { headers })
    .then(res => {
      commit(GET_USER_DETAILS, res.data);
      //isLoading(dispatch, false)
    })
    .catch(err => {
      console.log('---err----', err);
      //isLoading(dispatch, false)
    });
  //isLoading(dispatch, false)
};


export const logout = ({ commit, dispatch }, payload) => {
    localStorage.removeItem('user-token');
    location.reload();
};