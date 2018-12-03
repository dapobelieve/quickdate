import { setHttpToken } from '../../../helpers'

export const register = ({dispatch, commit}, {payload, context}) => {
    return axios.post('api/register', payload)
    .then(response => {
        dispatch('setToken', response.data.meta.token)
        .then(() => {
            // set users auth state and user data
            commit('setAuthUser', true)
            commit('setUserData', response.data.data)
        })
    })
    .catch(error => {
        context.errors = error.response.data.errors
    })
}

export const login = ({dispatch, commit}, {payload, context}) => {
    return axios.post('api/login', payload).then(response => {
        // set token
        dispatch('setToken', response.data.meta.token)
        .then(() => {
            // set users auth state and user data
            commit('setAuthUser', true)
            commit('setUserData', response.data.data)
        })
    })
    .catch(error => {
        // this (context) was the vue instance
        context.loginErrors = error.response.data.errors
    })
}

export const setToken = ({dispatch, commit}, token) => {
    if (token === ''){
        return dispatch('checkTokenExists', '')
        .then(token => {
            // set axios headers cos its in the storage
            setHttpToken(token)
        })
    }

    commit('setToken', token)
    setHttpToken(token)
}

export const checkTokenExists = ({dispatch, commit}, token) => {
    localForage.getItem('authtoken').then((token) => {
        if(!token){
            return Promise.reject('No_Token_Found')
        }

        return Promise.resolve(token)
    })
}

export const clearAuth = ({commit}) => {
    commit('setAuthUser', false)
    commit('setUserData', null)
    commit('setToken', null)
    setHttpToken(null);
}