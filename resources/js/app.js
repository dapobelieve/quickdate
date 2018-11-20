require('./bootstrap');
import Vuetify from 'vuetify'
import router from './router'
import Vuebar from 'vuebar'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)
Vue.use(Vuebar)


Vue.component('app', require('./components/App.vue'));

const app = new Vue({
    el: '#app',
    router
});
