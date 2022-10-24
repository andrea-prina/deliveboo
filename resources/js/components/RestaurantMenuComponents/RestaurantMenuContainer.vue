<template>
    <section>
        <div class="container-lg py-4">
            <div class="row py-4">
                <div class="col-12 col-lg-8">
                    
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    
                    <div class="row g-5 my-4">
                        <div class="col-12 col-lg-6 my-2" v-for="menuItem in menuItems" :key="menuItem.id" v-if="menuItem.availability">
                            <RestaurantMenuCard  :menuitem="menuItem"
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
                        />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <router-link :to="{'name':'CheckoutPage', 'params': {'restaurantId' : restaurantId , 'restaurantInfo' : restaurantInfo},}">
                        <button type="button" class="btn bg-brand btn-block btn-lg w-100">Proceed to Pay</button>
                        </router-link>
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

<style lang="scss" scoped>
@import "../../../sass/app.scss";


</style>
