import setHttpToken from '../../../helpers/sethttptoken'

export const register = ({dispatch}, {payload, context}) => {
    return axios.post('api/0/register', payload)
    .then(response => {
        // setoken
    })
    .catch(error => {
        context.errors = error.response.data.errors
    })
}

export const setToken = ({dispatch, commit}, token) => {
    if (token == ''){
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