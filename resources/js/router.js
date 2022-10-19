import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//importo le singole pagine
import HomePage from './pages/HomePage';
import RestaurantPage from './pages/RestaurantPage';

const router = new VueRouter({
    mode: 'history',
    //per ogni rotta inserisco
    routes: [
        {
                path: '/',
                name: 'Homepage',
                component: HomePage
        },
        {
                path:'restaurant/:id',
                name: 'RestaurantPage',
                component: RestaurantPage
        },
    ]
});

export default router;
