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
              <input type="text" class="form-control" aria-label="First name" name="customer_firstName" id="customer_firstName" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="customer_lastName" class="form-label">Surname <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="Last name" required name="customer_lastName" id="customer_lastName">
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_email" class="form-label">Email <span class="star">*</span></label>
              <input type="email" class="form-control" required name="customer_email" id="customer_email" >
            </div>

            <div class="col-12 col-md-6">
              <label for="customer_phoneNumber" class="form-label">Phone Number <span class="star">*</span></label>
              <input type="text" class="form-control" required name="customer_phoneNumber" id="customer_phoneNumber" >
            </div>

            <div class="col-12">
              <label for="customer_address" class="form-label">Address <span class="star">*</span></label>
              <input type="text" class="form-control" placeholder="Via Roma 1" required name="customer_address" id="customer_address" >
            </div>

            <div class="form-floating">
              <label for="additional_notes">Additional Notes</label>
              <textarea class="form-control" placeholder="Any additional notes"
                style="height: 100px" name="additional_notes" id="additional_notes" ></textarea>
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
      </div>
    </div>


  </section>
</template>

<script>

import RestaurantMenuCart from '../components/RestaurantMenuComponents/RestaurantMenuCart.vue'

export default {

  name: 'CheckoutPage',
    props: {
        restaurantId : Number,
        restaurantInfo : Object,
    },

    components : {
      RestaurantMenuCart,
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
