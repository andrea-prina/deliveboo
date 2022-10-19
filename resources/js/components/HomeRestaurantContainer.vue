<template>
    <section>
        <div class="container py-3">
            <div class="row g-3">
                <div v-for="restaurant in restaurants" :key="restaurant.id"  class="col-12 col-md-6 col-lg-4">
                    <RestaurantCard :restaurant="restaurant" />
                </div>
            </div>
            <button id="prev-btn" @click="logValue(currentPage)">PREV</button>
            <button id="next-btn" @click="getRestaurants(currentPage+1)">NEXT</button>
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
        typeNames : Array,
        searchQuery : String,
    },

    watch : {
        typeNames : function(){
            this.getRestaurants(this.currentPage);
        },

        searchQuery : function(){
            this.getRestaurants(this.currentPage);
        }
    },

    data: function(){
        return {
            restaurants: [],
            currentPage : 1,
            lastPage : null,
        }
    },
    methods: {
        getRestaurants: function(page){
            axios.get(`/api/restaurants?${this.typeNames.map(n => `type[]=${n}`).join('&')}&name=${this.searchQuery}&page=${page}`)
            .then((result) => {
                this.restaurants = result.data.results.data.data;
                this.currentPage = result.data.results.currentPage;
                this.lastPage = result.data.results.data.lastPage;
            })
            .catch((err) => {
                console.warn(err);
            })
        },

        logValue : function(value){
            console.log(value);
        }
    },
    created(){
        this.getRestaurants(this.currentPage);
    }
}

</script>

<style lang="scss">
@import "../../sass/app.scss";


</style>
