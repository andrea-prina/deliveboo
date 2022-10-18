<template>
    <section>
        <div class="container py-3">
            <div class="row g-3">
                <div v-for="restaurant in restaurants" :key="restaurant.id"  class="col-12 col-md-6 col-lg-4">
                    <RestaurantCard :restaurant="restaurant" />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import RestaurantCard from '../components/RestaurantCard.vue'

export default {
    name: 'HomeRestaurantContainer',
    components: {
        RestaurantCard,

    },

    props : {
        typeIds : Array,
    },

    watch : {
        typeIds : function(){
            axios.get(`/api/restaurants?${this.typeIds.map(n => `type[]=${n}`).join('&')}&name=${this.searchedName}`)
            .then((result) => {
                this.restaurants = result.data.results.data;
            })
            .catch((err) => {
                console.warn(err);
            })
        }
    },

    data: function(){
        return {
            restaurants: [],
            selectedTypes: [],
            searchedName: '',
        }
    },
    methods: {
        getRestaurants: function(){
            axios.get(`/api/restaurants?${this.typeIds.map(n => `type[]=${n}`).join('&')}&name=${this.searchedName}`)
            .then((result) => {
                this.restaurants = result.data.results.data;
            })
            .catch((err) => {
                console.warn(err);
            })
        }
    },
    created(){
        this.getRestaurants();
    }
}

</script>

<style lang="scss">
@import "../../sass/app.scss";


</style>
