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

const app = new Vue({
    el: '#app',
    router,
    store: store
});
