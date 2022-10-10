window.Vue = require('vue');
Vue.use(VueRouter);

import App from './views/App.vue';
import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router'

const app = new Vue({
    el: '#root',
    render:h=>h(App),
    router
});