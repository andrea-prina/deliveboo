<template>
    <section>
        <div class="container-lg py-4">
            <div class="row py-4">
                <div class="col-12 col-lg-8">

                    <h3 class="fw-normal mb-0 text-black">Menu</h3>

                    <div class="row g-5 my-4">
                        <div class="col-12 col-lg-6 my-2" v-for="menuItem in menuItems" :key="menuItem.id" v-if="menuItem.availability">
                            <RestaurantMenuCard
                            :menuitem="menuItem"
                            @addToCart='setItemToPass'/>
                        </div>
                    </div>
                </div>

            <!-- cart side  -->
                <div class="col-12 col-lg-4">
                    <div>
                        <RestaurantMenuCart
                        :deliveryFee="restaurantInfo.delivery_fee"
                        :freeDelivery="restaurantInfo.free_delivery"
                        :restaurantId="restaurantId"
                        :item="menuItem"
                        :click="click"
                        :clearCart="clearCart"
                        @emptyCart="disableCheckoutBtn"
                        />
                    </div>
                    <div class="d-flex justify-content-center">
                        <router-link :to="{'name':'CheckoutPage', 'params': {'restaurantId' : restaurantId , 'restaurantInfo' : restaurantInfo},} " :class="{ disabled: !isCartNotEmpty }">
                            <button type="button" class="btn bg-brand btn-block btn-lg" :disabled="isCartNotEmpty === false">Checkout</button>
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
        clearCart: Boolean,

    },

    data : function(){

        return {
            menuItem : {},
            click : false,
            isCartNotEmpty : false,
        }

    },

    methods : {
        setItemToPass : function(item){
            this.menuItem = item;
            this.click = !(this.click);
        },

        disableCheckoutBtn : function(cartLength){
            if(cartLength == 0){
                this.isCartNotEmpty = false
            } else {
                this.isCartNotEmpty = true
            }
        }
    },

}

</script>

<style lang="scss" scoped>
@import "../../../sass/app.scss";

.disabled {
    pointer-events: none;
}

</style>
