<template>
    <section>
        <div class="container-lg py-4">
            <div class="row py-4">
                <div class="col-12 col-lg-8">
                    <div class="row g-5 my-4">
                    <div class="col-12 col-lg-6 my-2" v-for="menuItem in menuItems" :key="menuItem.id">
                        <RestaurantMenuCard :menuitem="menuItem"
                        @addToCart='addItem'/>
                    </div>
                </div>
                </div>
            <!-- cart side  -->
                <div class="col-12 col-lg-4 ">
                    <div class="col-12">
                        <RestaurantMenuCart
                        v-if="cart.length"
                        :cart="cart"
                        :deliveryFee="restaurantInfo.delivery_fee"
                        :freeDelivery="restaurantInfo.free_delivery"
                        :total="getTotal(restaurantInfo.delivery_fee, restaurantInfo.free_delivery)"
                        :restaurantId="restaurantInfo.id"
                        @resetCart="resetCart"
                        @removeItem="removeItem"
                        @addItem="addItem"

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


    },

    data() {
        return {
            cart:[],
            storageKey:'deliveboo'
        }

    },
    methods: {
        //se l'utente ha un cerrello lo carica
        initCart(){
            const data = this.getCart()
            if(data){
            this.cart = data
            }else{
            this.syncCart()
            }
        },

        syncCart() {
            const localCartStorage = JSON.stringify(this.cart)
            localStorage.setItem(this.storageKey, localCartStorage)
        },

        getCart(){
            const stringResult= localStorage.getItem(this.storageKey)
            if(stringResult){
                return JSON.parse(stringResult)
            }else{
                return null
            }
        },

        //ritorna l'oggetto se esiste nel carrello
        findById(id){
            return this.cart.findIndex((item) => item.id == id)
        },

        addItem(item){
            console.log({aggiunge:item})
            const itemIndex = this.findById(item.id)
            if(itemIndex >= 0){
                this.cart[itemIndex].quantity++
            }else{
                this.cart.push({ quantity: 1, ...item })
            }
            this.syncCart()
        },
        //diminuisce di uno la quantity del item all'indice fornito o lo rimuove se era l'ultimo elemento
        removeItem(id){
            console.log({rimuove:id})
            const itemIndex = this.findById(id)
            if(itemIndex === -1) return
            this.cart[itemIndex].quantity--
            if(this.cart[itemIndex].quantity<= 0){
                this.cart.splice(itemIndex,1)
            }
            this.syncCart()
        },
        resetCart(){
            console.log(this.cart)
            if(window.confirm('Do you really want to empty your cart?')){
                this.cart = []
                this.syncCart()
            }
        },
        //ritorna il totale del carrello
        getTotal(delivery_fee, free){

            let total = this.cart.reduce((acc, item) => acc + item.price * item.quantity, 0)
            if (!free){
                total += delivery_fee;
            }

            total = Math.round((total + Number.EPSILON) * 100) / 100

            return total;
        },

    },
    mounted() {
        this.initCart();
    }
}
</script>

<style lang="scss">
@import "../../../sass/app.scss";


</style>
