<template>
  <section>
    <div class="container py-4">
      <div class="row py-4">

        <!-- form side  -->
        <div class="col-12 col-lg-8 mb-5">
          <h3>Order Details</h3>
          <form class="row g-3" action="/api/order" method="POST" @submit="submitOrder">

            <div class="col-12 col-md-6">
              <label for="customer_firstName" class="form-label">Name <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="First name" name="customer_firstName"
                id="customer_firstName" required v-bind="customer_firstName">
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_lastName" class="form-label">Surname <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="Last name" required name="customer_lastName"
                id="customer_lastName" v-bind="customer_lastName">
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_email" class="form-label">Email <span class="star">*</span></label>
              <input type="email" class="form-control" required name="customer_email" id="customer_email"
                v-bind="customer_email">
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_phoneNumber" class="form-label">Phone Number <span class="star">*</span></label>
              <input type="text" class="form-control" required name="customer_phoneNumber" id="customer_phoneNumber"
                v-bind="customer_phoneNumber">
            </div>

            <div class="col-12">
              <label for="customer_address" class="form-label">Address <span class="star">*</span></label>
              <input type="text" class="form-control" placeholder="Via Roma 1" required name="customer_address"
                id="customer_address" v-bind="customer_address">
            </div>

            <div class="col-12">
              <label for="additional_notes" class="form-label">Additional Notes</label>
              <textarea class="form-control" placeholder="Any additional notes" style="height: 100px"
                name="additional_notes" id="additional_notes" v-bind="additional_notes"></textarea>
            </div>
            <div class="col-12"><input type="hidden"
                :value="getTotalFromCart(restaurantInfo.delivery_fee, restaurantInfo.free_delivery)" name="total">
              <input type="hidden" name="foodItems" :value="foodItems">
              <button class=" btn btn-main">
                <input class="btn text-white" type="submit" value="SUBMIT">
              </button>
            </div>



          </form>
        </div>

        <!-- cart side  -->
        <div class="col-12 col-lg-4">
          <RestaurantMenuCart :deliveryFee="restaurantInfo.delivery_fee" :freeDelivery="restaurantInfo.free_delivery"
            :restaurantId="restaurantId" />
        </div>

        <!-- BraintreeDropIn -->
        <v-braintree 
        authorization="sandbox_mfpgm8gp_j6kyrc5ff9wmsngg" 
        locale="it_IT" 
        btnText="Ordina"
          @success="onSuccess" 
          @error="onError">
        </v-braintree>
      


      </div>
    </div>

  </section>
</template>

<script>

import RestaurantMenuCart from '../components/RestaurantMenuComponents/RestaurantMenuCart.vue'

export default {

  name: 'CheckoutPage',
  data() {
    return {
      storageKey: 'deliveboo',
      restaurantId: this.$route.params.restaurantId,
      customer_firstName: null,
      customer_lastName: null,
      customer_email: null,
      customer_phoneNumber: null,
      customer_address: null,
      additional_notes: null,
      cart: [],
      foodItems: '',

    }

  },
  props: {
    restaurantId: Number,
    restaurantInfo: Object,
  },

  components: {
    RestaurantMenuCart,
  },
  methods: {

    getTotalFromCart(delivery_fee, free) {

      this.getCart();

      let total = this.cart.reduce((acc, item) => acc + item.price * item.quantity, 0)
      if (!free) {
        total += delivery_fee;
      }

      total = Math.round((total + Number.EPSILON) * 100) / 100

      return total;
    },

    getCart() {
      this.cart = JSON.parse(localStorage.getItem(this.storageKey));
    },

    submitOrder: function () {

      this.foodItems = localStorage.getItem(this.storageKey);

    },


  },

}

</script>

<style lang="scss" scoped>
@import "../../sass/app.scss";

.star {
  color: red;
}

.title-margin {
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
