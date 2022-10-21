<template>
  <section>
    <div class="container-lg py-4">
      <div class="row py-4">

        <!-- form side  -->
        <div class="col-12 col-lg-8">
          <h2>Order Details</h2>
          <form class="row g-3">

            <div class="col-12 col-md-6">
              <label for="inputName" class="form-label">Name <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="First name" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="inputSurname" class="form-label">Surname <span class="star">*</span></label>
              <input type="text" class="form-control" aria-label="Last name" required>
            </div>

            <div class="col-12 col-md-6">
              <label for="inputEmail4" class="form-label">Email <span class="star">*</span></label>
              <input type="email" class="form-control" id="inputEmail4" required>
            </div>

            <div class="col-12 col-md-6">
              <label for="inputPhoneNumber" class="form-label">Phone Number <span class="star">*</span></label>
              <input type="text" class="form-control" id="inputPhoneNumber" required>
            </div>

            <div class="col-12">
              <label for="inputAddress" class="form-label">Address <span class="star">*</span></label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            </div>

            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>

            <div class="col-12 col-md-6">
              <label for="inputCity" class="form-label">City <span class="star">*</span></label>
              <input type="text" class="form-control" id="inputCity" required>
            </div>

            <div class="col-12 col-md-4">
              <label for="inputState" class="form-label">State <span class="star">*</span></label>
              <input type="text" class="form-control" id="inputState" required>
            </div>

            <div class="col-12 col-md-2">
              <label for="inputZip" class="form-label">CAP <span class="star">*</span></label>
              <input type="text" class="form-control" id="inputZip" required>
            </div>

            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px"></textarea>
              <label for="floatingTextarea2">Comments</label>
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
