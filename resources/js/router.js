import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import HomePage from './pages/HomePage';
import RestaurantPage from './pages/RestaurantPage';

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
                path: '/',
                name: 'Homepage',
                component: HomePage
        },
        {
                path:'/restaurantPage',
                name: 'RestaurantPage',
                component: RestaurantPage
        },
    ]
});

export default router;
