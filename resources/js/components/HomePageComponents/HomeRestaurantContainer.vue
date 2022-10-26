<template>
    <section>
        <div class="container py-3">
            <div class="row g-3">
                <div v-for="restaurant in restaurants" :key="restaurant.id"  class="col-12 col-md-6 col-lg-4">
                    <RestaurantCard :restaurant="restaurant" />
                </div>
            </div>
            <div class="row text-center my-5">
                <div class="col-4"><button class="btn btn-main" @click="getPrevPage()" :disabled="currentPage === 1">Prev Page</button></div>
                <div class="col-4">
                    <h5>{{currentPage}} out of {{ lastPage }}</h5>
                </div>
                <div class="col-4"><button class="btn btn-main" @click="getNextPage()" :disabled="currentPage === lastPage">Next Page</button></div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import RestaurantCard from '../HomePageComponents/RestaurantCard.vue'

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
            this.getRestaurants();
        },

        searchQuery : function(){
            this.getRestaurants();
        }
    },

    data: function(){
        return {
            restaurants: [],
            currentPage: 1,
            nextPage: null,
            prevPage: null,
            lastPage: null,
        }
    },
    methods: {
        
        getRestaurants: function(){
            axios.get(`/api/restaurants?${this.typeNames.map(n => `type[]=${n}`).join('&')}&name=${this.searchQuery}`)
            .then((result) => {
                this.currentPage = 1;
                this.restaurants = result.data.results.data.data;
                this.nextPage = result.data.results.data.next_page_url; 
                this.prevPage = result.data.results.data.prev_page_url;
                this.lastPage = result.data.results.data.last_page;
            })
            .catch((err) => {
                console.warn(err);
            });
        },

        getNextPage(){
            if (this.currentPage < this.lastPage){
                axios.get(this.nextPage + '&' + `${this.typeNames.map(n => `type[]=${n}`).join('&')}&name=${this.searchQuery}`)
                .then((result) => {
                    this.restaurants = result.data.results.data.data;
                    this.nextPage = result.data.results.data.next_page_url;
                    this.prevPage = result.data.results.data.prev_page_url;
                    this.currentPage++;
                })
                .catch((err) => {
                    console.warn(err);
                })
            }
        },

        getPrevPage(){
            if (this.currentPage > 1){
                axios.get(this.prevPage + '&' + `${this.typeNames.map(n => `type[]=${n}`).join('&')}&name=${this.searchQuery}`)
                .then((result) => {
                    this.restaurants = result.data.results.data.data;
                    this.nextPage = result.data.results.data.next_page_url;
                    this.prevPage = result.data.results.data.prev_page_url;
                    this.currentPage--;
                })
                .catch((err) => {
                    console.warn(err);
                })
            }
        },
    },

    created(){
        this.getRestaurants();
    }
}

</script>

<style lang="scss">
@import "../../../sass/app.scss";


</style>
