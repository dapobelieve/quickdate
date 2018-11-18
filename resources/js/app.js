require('./bootstrap');
import Vuetify from 'vuetify'
import router from './router'
// vuetify
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)


Vue.component('app', require('./components/App.vue'));

const app = new Vue({
    el: '#app',
    router
});
