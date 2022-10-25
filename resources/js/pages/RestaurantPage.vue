<template>
    <div>
        <RestaurantMenuJumbo :restaurantInfo="restaurantInfo"/>
        <RestaurantMenuContainer :menuItems="restaurantMenu" :restaurantInfo="restaurantInfo" :restaurantId="restaurantId" :clearCart = 'clearCart'/>
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
            storageKey:'deliveboo',
            clearCart:false,
        }
    },

    props : {
        restaurantId : {type : String, required : true},
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

        checkRestaurantId : function(id){

            const activeRestaurantId = JSON.parse(localStorage.getItem(this.storageKey))[0].restaurantId;
            if(id != activeRestaurantId){
                this.$swal({
                        dangerMode:false,
                        title: 'Are you sure?',
                        text: 'Changing restaurant will clear your cart',
                        icon: 'warning',
                        buttons: true,
                        showDenyButton: true,
                        confirmButtonText: 'Yes, change it',
                        denyButtonText: 'No, take me back',
                    })
                    .then((results) => {
                        if (results.isConfirmed) {
                            this.clearCart = !this.clearCart;
                        } else {
                            history.back();
                        }

                    });


                /* if(window.confirm('Changing restaurant will clear your cart')){
                    // Clear local storage. When cart component mounts it will be empty
                    localStorage.clear();
                } else {
                    // Return to main page (previous one)
                    history.back();
                } */
            }
        },
    },

    created(){
        this.getRestaurantInfo(this.restaurantId);
        this.getMenu(this.restaurantId);
        this.checkRestaurantId(this.restaurantId)
    },

    mounted(){
    }

}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>
