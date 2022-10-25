<template>
    <section class="h-100">
        <div class="container-fluid h-100">
            <div class="row ">

                <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>

                <div class="col-12 mt-2 p-0">
                    <div class="card rounded my-4 position-relative">
                        <div class="card-body p-4">
                            <div v-if="cart.length">
                                <div class="position-absolute bottom-right" @click="resetCart()">
                                    <a href="#/" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                                <table class="table my-2">
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
                                                {{ getTotalperItem(item) + " €" }} <!-- QUI INSERIRE MULTIPLO DI ITEM  -->
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
                            <div v-else class="text-center">
                                <strong>Your cart is empty</strong><br>Start adding items by clicking on them
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
        clearCart: Boolean,
    },

    data: function(){
        return {
            cart: [],
            storageKey: 'deliveboo',
        }
    },

    methods: {

        // Initialize cart if there is none
        initCart() {
            const data = this.getCart()
            if (data) {
                this.cart = data
            } else {
                this.syncCart()
            }
            this.$emit('emptyCart', this.cart.length);
        },

        // Sync local storage with cart variable
        syncCart() {
            const localCartStorage = JSON.stringify(this.cart)
            localStorage.setItem(this.storageKey, localCartStorage)
            this.$emit('emptyCart', this.cart.length);

        },

        // Get cart from localstorage and parse it to an object
        getCart() {
            const stringResult = localStorage.getItem(this.storageKey)
            if (stringResult) {
                return JSON.parse(stringResult)
            } else {
                return null
            }
        },

        // Return the object if the related id is in the cart
        findById(id) {
            return this.cart.findIndex((item) => item.id == id)
        },

        // Add item to cart
        addItem(item) {

            const itemIndex = this.findById(item.id)

            if (itemIndex >= 0) {
                this.cart[itemIndex].quantity++

            } else {
                // When you add an item to the cart add the "quantity" and "restaurantId" properties, then sync
                // Quantity is defaulted to 1 and is incresed with further addItem() calls
                this.cart.push({ quantity: 1, restaurantId: this.restaurantId, ...item })
            }
            this.syncCart()
        },

        // Reduce item quantity property in cart. Delete it if quantity = 0, then sync
        removeItem(id) {

            const itemIndex = this.findById(id)
            if (itemIndex === -1) return
            this.cart[itemIndex].quantity--
            if (this.cart[itemIndex].quantity <= 0) {
                this.cart.splice(itemIndex, 1)
            }
            this.syncCart()
        },

        // Delete cart by assigning it an empty array, then sync
        resetCart() {
            this.$swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.cart = []
                    this.syncCart()
                    this.$swal(
                        'Deleted!',
                        'Your cart has been deleted.',
                        'success'
                    )
                }
            })

         /*    if (window.confirm('Do you really want to empty your cart?')) {
                this.cart = []
                this.syncCart()
            } */
        },

        // Return total value of items in cart (price*quantity sum)
        getTotal(delivery_fee, free) {

            let total = this.cart.reduce((acc, item) => acc + item.price * item.quantity, 0)
            if (!free) {
                total += delivery_fee;
            }

            total = Math.round((total + Number.EPSILON) * 100) / 100

            return total;
        },
        getTotalperItem(item) {
            let total = item.price * item.quantity
            total = Math.round((total + Number.EPSILON) * 100) / 100
            return total;
        },

    },

    mounted() {
        this.initCart();
    },


    watch: {
        click: function () {
            this.addItem(this.item);
        },
        clearCart: function () {
            console.warn('puliscing the cart');
            this.resetCart();
        },
    }

}

</script>

<style lang="scss" scoped>
@import "../../../sass/app.scss";

.bottom-right {
    bottom: 0.5rem;
    right: 0.5rem;
}

</style>
