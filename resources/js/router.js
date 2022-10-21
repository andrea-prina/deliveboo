import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import HomePage from './pages/HomePage';
import RestaurantPage from './pages/RestaurantPage';
import CheckoutPage from './pages/CheckoutPage';

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
                path: '/',
                name: 'Homepage',
                component: HomePage
        },
        {
                path:'/restaurantPage/:restaurantId',
                name: 'RestaurantPage',
                component: RestaurantPage,
                props: true,
        },
        {
            path:'/restaurantPage/:restaurantId/checkout',
            name: 'CheckoutPage',
            component: CheckoutPage,
            props: true,
        }
    ]
});

export default router;
