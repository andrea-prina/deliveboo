window.Vue = require('vue');
Vue.use(VueRouter);
Vue.use(vueBraintree)

import App from './views/App.vue';
import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router'
import vueBraintree from "vue-braintree";

const app = new Vue({
    el: '#root',
    render:h=>h(App),
    router
});
