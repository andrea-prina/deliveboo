<template>
    <section class="h-100">
        <div class="container h-100 py-5">
            <div
                class="row d-flex justify-content-center align-items-center h-100"
            >
                <div class="col-12">
                    <div
                        class="d-flex justify-content-between align-items-center mb-4 text-center"
                    >
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    </div>
                    <div class="card rounded mb-4 position-relative">
                        <div class="card-body p-4">
                            <div class="position-absolute bottom-right" @click="resetCart()">
                                <a href="#/" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                            <table v-if="cart.length" class="table my-2">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th colspan="2" class="text-center">
                                            Quantity
                                        </th>
                                        <th class="text-end">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="item in cart" :key="item.id">
                                        <td>{{ item.name }}</td>
                                        <td colspan="2" class="text-center">
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-link p-0 px-2" @click="removeItem(item.id)">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <span>{{item.quantity}}</span>
                                                <button class="btn btn-link p-0 px-2"
                                                    @click="addItem(item)">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            {{ item.price + " €" }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Delivery Fee</td>
                                        <td class="text-end">
                                            {{
                                                freeDelivery
                                                    ? "FREE"
                                                    : deliveryFee + " €"
                                            }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="fw-bolder fs-5 p-2">
                                Total € {{ getTotal(deliveryFee, freeDelivery) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "RestaurantMenuCart",
    props: {

        item : Object,
        click : Boolean,
        deliveryFee : Number,
        freeDelivery : Number,
        restaurantId : String,
    },

    data: function(){
        return {
            cart:[],
            storageKey:'deliveboo',
        }
    },

    methods: {

        // Initialize cart if there is none
        initCart(){
            const data = this.getCart()
            if(data) {
                this.cart = data
            } else {
                this.syncCart()
            }
        },

        // Sync local storage with cart variable
        syncCart() {
            const localCartStorage = JSON.stringify(this.cart)
            localStorage.setItem(this.storageKey, localCartStorage)
        },

        // Get cart from localstorage and parse it to an object
        getCart(){
            const stringResult = localStorage.getItem(this.storageKey)
            if(stringResult){
                return JSON.parse(stringResult)
            }else{
                return null
            }
        },

        // Return the object if the related id is in the cart
        findById(id){
            return this.cart.findIndex((item) => item.id == id)
        },

        // Add item to cart
        addItem(item){

            const itemIndex = this.findById(item.id)

            if(itemIndex >= 0) {
                this.cart[itemIndex].quantity++

            } else {
                // When you add an item to the cart add the "quantity" and "restaurantId" properties, then sync
                // Quantity is defaulted to 1 and is incresed with further addItem() calls
                this.cart.push({ quantity: 1, restaurantId : this.restaurantId, ...item })
            }
            this.syncCart()
        },

        // Reduce item quantity property in cart. Delete it if quantity = 0, then sync
        removeItem(id){

            const itemIndex = this.findById(id)
            if(itemIndex === -1) return
            this.cart[itemIndex].quantity--
            if(this.cart[itemIndex].quantity<= 0){
                this.cart.splice(itemIndex,1)
            }
            this.syncCart()
        },

        // Delete cart by assigning it an empty array, then sync
        resetCart(){

            if(window.confirm('Do you really want to empty your cart?')){
                this.cart = []
                this.syncCart()
            }
        },

        // Return total value of items in cart (price*quantity sum)
        getTotal(delivery_fee, free){

            let total = this.cart.reduce((acc, item) => acc + item.price * item.quantity, 0)
            if (!free){
                total += delivery_fee;
            }

            total = Math.round((total + Number.EPSILON) * 100) / 100

            return total;
        },

    },

    mounted(){
        this.initCart();
    },


    watch : {
        click : function(){
            this.addItem(this.item);
        }
    }

}

</script>

<style lang="scss">
@import "../../../sass/app.scss";

.bottom-right {
    bottom: 0.5rem;
    right: 0.5rem;
}
</style>
