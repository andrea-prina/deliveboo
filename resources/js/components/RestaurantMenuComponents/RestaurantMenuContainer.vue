<template>
    <section>
        <div class="container-lg py-4">
            <div class="row py-4">
                <div class="col-12 col-lg-8">
                    <div class="row g-5 my-4">
                    <div class="col-12 col-lg-6 my-2" v-for="menuItem in menuItems" :key="menuItem.id">
                        <RestaurantMenuCard :menuitem="menuItem"
                        @addToCart='setItemToPass'/>
                    </div>
                </div>
                </div>
            <!-- cart side  -->
                <div class="col-12 col-lg-4 ">
                    <div class="col-12">
                        <RestaurantMenuCart
                        :deliveryFee="restaurantInfo.delivery_fee"
                        :freeDelivery="restaurantInfo.free_delivery"
                        :restaurantId="restaurantId"
                        :item="menuItem"
                        :click="click"
                        :checkout="false"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import RestaurantMenuCard from './RestaurantMenuCard.vue'
import RestaurantMenuCart from './RestaurantMenuCart.vue'

export default {
    name: 'RestaurantMenuContainer',
    components: {
        RestaurantMenuCard,
        RestaurantMenuCart,

    },

    props : {

        menuItems : Array,
        restaurantInfo : Object,
        restaurantId : String,

    },

    data : function(){

        return {
            menuItem : {},
            click : false,
        }
            
    },

    methods : { 
        setItemToPass : function(item){
            this.menuItem = item;
            this.click = !(this.click);
        },
    },


    mounted(){
        console.log(this.restaurantInfo);
    }

}

</script>

<style lang="scss">
@import "../../../sass/app.scss";


</style>
