window.Vue = require('vue');
Vue.use(VueRouter);
Vue.use(vueBraintree)
Vue.use(VueSweetalert2)

import App from './views/App.vue';
import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router'
import vueBraintree from "vue-braintree";
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

const app = new Vue({
    el: '#root',
    render:h=>h(App),
    router
});
