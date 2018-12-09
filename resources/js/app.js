require('./bootstrap');
import Vuetify from 'vuetify'
import router from './router'
import Datetime from 'vue-datetime'
import '../../node_modules/vue-datetime/dist/vue-datetime.css';
import localforage from 'localforage'
import store from './store'
import 'vuetify/dist/vuetify.min.css'

// configure localforage
localforage.config({
    driver: localforage.LOCALSTORAGE,
    storeName: 'QuickDate'
})

Vue.use(Datetime)
Vue.use(Vuetify)
// Vue.use(Vuebar)


Vue.component('app', require('./components/App.vue'));

// localforage.getItem('authtoken').then((token) => {
//     if(token == null)
//     {
//         console.log('not found')
//     }
// })
// .catch(error => {
//     console.log('token not found')
// })
store.dispatch('setToken', '').then((response) => {
    store.dispatch('fetchUser').catch((error) => {
        console.log(error.response)
        store.dispatch('clearAuth');
        router.replace({
            name: 'homepage'
        })
    })
})
.catch(() => {
    store.dispatch('clearAuth');
})

const app = new Vue({
    el: '#app',
    router,
    store: store
});
