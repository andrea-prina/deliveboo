<template>
    <section>
        <div class="container py-3">
            <div class="row g-3">
                <div v-for="restaurant in restaurants" :key="restaurant.id"  class="col-12 col-md-6 col-lg-4">
                    <RestaurantCard :restaurant="restaurant" />
                </div>
            </div>
           <div class="btn btn-primary" @click="getPrevPage()">Prev Page</div>
                <h5>{{currentPage}}</h5>
                <div class="btn btn-primary" @click="getNextPage()">Next Page</div>
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
             currentPage: 1,
            nextPage: null,
            prevPage: null,
        }
    },
    methods: {
        
        getRestaurants: function(page){
            axios.get(`/api/restaurants?${this.typeNames.map(n => `type[]=${n}`).join('&')}&name=${this.searchQuery}&page=${page}`)
            .then((result) => {
                this.restaurants = result.data.results.data.data;
                this.nextPage = result.data.results.data.next_page_url;
                this.prevPage = result.data.results.data.prev_page_url;
            })
            .catch((err) => {
                console.warn(err);
            });
        },

        getNextPage(){
            axios.get(this.nextPage)
            .then((result) => {
                this.restaurants = result.data.results.data.data;
                this.nextPage = result.data.results.data.next_page_url;
                this.prevPage = result.data.results.data.prev_page_url;
                this.currentPage++;
            })
            .catch((err) => {
                console.warn(err);
            })
        },

        getPrevPage(){
            axios.get(this.prevPage)
            .then((result) => {
                this.restaurants = result.data.results.data.data;
                this.nextPage = result.data.results.data.next_page_url;
                this.prevPage = result.data.results.data.prev_page_url;
                this.currentPage--;
            })
            .catch((err) => {
                console.warn(err);
            })
        },

    }

</script>

<style lang="scss">
@import "../../sass/app.scss";


</style>
