<template>
  <section>
    <div class="container-lg py-4">
      <div class="row py-4">

        <!-- form side  -->
        <div class="col-12 col-lg-8">
          <h2>Order Details</h2>
          <form class="row g-3">

            <div class="col-12 col-md-6">
              <label for="customer_firstName"  class="form-label">Name <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="First name" name="customer_firstName" id="customer_firstName" required
              v-bind="customer_firstName">
            </div>
            <div class="col-12 col-md-6">
              <label for="customer_lastName" class="form-label">Surname <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="Last name" required name="customer_lastName" id="customer_lastName"
              v-bind="customer_lastName">
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_email" class="form-label">Email <span class="star">*</span></label>
              <input type="email" class="form-control" required name="customer_email" id="customer_email"
              v-bind="customer_email" >
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_phoneNumber" class="form-label">Phone Number <span class="star">*</span></label>
              <input type="text" class="form-control" required name="customer_phoneNumber" id="customer_phoneNumber"
              v-bind="customer_phoneNumber"  >
            </div>

            <div class="col-12">
              <label for="customer_address" class="form-label">Address <span class="star">*</span></label>
              <input type="text" class="form-control" placeholder="Via Roma 1" required name="customer_address" id="customer_address"
              v-bind="customer_address" >
            </div>

            <div class="col-12">
              <label for="additional_notes" class="form-label" >Additional Notes</label>
              <textarea class="form-control" placeholder="Any additional notes"
                style="height: 100px" name="additional_notes" id="additional_notes"
                v-bind="additional_notes" ></textarea>
            </div>

          </form>
        </div>

        <!-- cart side  -->
        <div class="col-12 col-lg-4">
          <RestaurantMenuCart
          :deliveryFee="restaurantInfo.delivery_fee"
          :freeDelivery="restaurantInfo.free_delivery"
          :restaurantId="restaurantId"
          />
        </div>

        <!-- BraintreeDropIn -->
        <v-braintree
            authorization="sandbox_mfpgm8gp_j6kyrc5ff9wmsngg"
            locale="it_IT"
            btnText="Ordina"
            @success="onSuccess"
            @error="onError"
        ></v-braintree>

      </div>
    </div>

        <div class="btn btn-primary col-12" @click='getTotalFromCart(restaurantInfo.delivery_fee,restaurantInfo.free_delivery)'>
            Get Total
        </div>

  </section>
</template>

<script>

import RestaurantMenuCart from '../components/RestaurantMenuComponents/RestaurantMenuCart.vue'
import axios from 'axios'

export default {

  name: 'CheckoutPage',
    data(){
        return{
            storageKey: 'deliveboo',
            restaurantId: this.$route.params.restaurantId,
            customer_firstName: null,
            customer_lastName: null,
            customer_email: null,
            customer_phoneNumber: null,
            customer_address: null,
            additional_notes: null,
            cart:[],

        }

    },
    props: {
        restaurantId : Number,
        restaurantInfo : Object,
    },

    components : {
      RestaurantMenuCart,
    },
    methods: {
    onSuccess (payload) {
      let nonce = payload.nonce;
         // Do something great with the nonce...
        console.log(nonce);
        console.log({nonce: nonce, restaurantId: this.restaurantId, restaurantInfo: this.restaurantInfo});
        axios.post('/api/order',
            {
                nonce: nonce,
                restaurantId: this.restaurantId,
                customer_firstName: this.customer_firstName,
                customer_lastName: this.customer_lastName,
                customer_email: this.customer_email,
                customer_phoneNumber: this.customer_phoneNumber,
                customer_address: this.customer_address,
                additional_notes: this.additional_notes,
                total:this.getTotalFromCart(this.restaurantInfo.delivery_fee,this.restaurantInfo.free_delivery),
                cart: this.cart,

            })
            .then((response) => {
                console.log(response);
            })

    },
    onError (error) {
        let message = error.message;
        // Whoops, an error has occured while trying to get the nonce
    },
    getTotalFromCart(delivery_fee, free){
        let total = cart.reduce((acc, item) => acc + item.price * item.quantity, 0)
            if (!free){
                total += delivery_fee;
            }

            total = Math.round((total + Number.EPSILON) * 100) / 100
            console.log(total);

            return total;
    },
    getCart(){
        this.cart = JSON.parse(localStorage.getItem(this.storageKey));
    },
  }

}

</script>

<style lang="scss" scoped>
@import "../../sass/app.scss";

.star {
  color: red;
}

.title-margin{
  margin-bottom: 38px;

}

.button {
  cursor: pointer;
  font-weight: 500;
  left: 3px;
  line-height: inherit;
  position: relative;
  text-decoration: none;
  text-align: center;
  border-style: solid;
  border-width: 1px;
  border-radius: 3px;
  -webkit-appearance: none;
  -moz-appearance: none;
  display: inline-block;
}

.button--small {
  padding: 10px 20px;
  font-size: 0.875rem;
}

.button--green {
  outline: none;
  background-color: #64d18a;
  border-color: #64d18a;
  color: white;
  transition: all 200ms ease;
}

.button--green:hover {
  background-color: #8bdda8;
  color: white;
}
</style>
