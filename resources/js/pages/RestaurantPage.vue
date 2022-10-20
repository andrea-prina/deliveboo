<template>
    <div>
        <RestaurantMenuJumbo :restaurantInfo="restaurantInfo"/>
        <RestaurantMenuContainer :menuItems="restaurantMenu" :restaurantInfo="restaurantInfo"/>
    </div>
</template>

<script>
import axios from 'axios';
import RestaurantMenuJumbo from '../components/RestaurantMenuComponents/RestaurantMenuJumbo.vue'
import RestaurantMenuContainer from '../components/RestaurantMenuComponents/RestaurantMenuContainer.vue'



export default {
    name: 'RestaurantPage',
    components: {
        RestaurantMenuJumbo,
        RestaurantMenuContainer,

    },

    data : function(){
        return {
            restaurantInfo : {},
            restaurantMenu : [],
        }
    },

    props : {
        restaurantId : {type : Number, required : true},
    },

    methods : {

        getRestaurantInfo : function($id){
            axios.get(`/api/restaurants/${$id}`)
            .then((result) => {
                this.restaurantInfo = result.data.results.data[0];
            }).catch((err) => {
                console.warn(err);
            });
        },

        getMenu : function($id){
            axios.get(`/api/restaurants/${$id}/food-items`)
            .then((result) => {
                this.restaurantMenu = result.data.results.data;
            }).catch((err) => {
                console.warn(err);
            });
        },
    },

    created(){
        this.getRestaurantInfo(this.restaurantId);
        this.getMenu(this.restaurantId);
    }

}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>
