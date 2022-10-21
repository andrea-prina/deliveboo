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

          <h2 class="title-margin">Payment Summary</h2>

          <div class="col-12 col-md-6 col-lg-12">
            <div class="card rounded mb-4 position-relative">
              <div class="card-body p-4">
                <div class="position-absolute top-right" @click="$emit('resetCart')">
                  <a href="#/" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
                <table class="table my-2">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th colspan="2" class="text-center">Quantity</th>
                      <th class="text-end">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in cart" :key="item.id">
                      <td>{{item.name}}</td>
                      <td colspan="2" class="text-center">
                        <div class="d-flex justify-content-between">
                          <button class="btn btn-link p-0 px-2" @click="$emit('removeItem',item.id)">
                            <i class="fas fa-minus"></i>
                          </button>
                          <span>{{item.quantity}}</span>
                          <button class="btn btn-link p-0 px-2" @click="$emit('addItem', item)">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="text-end">{{item.price + ' €'}}</td>
                    </tr>
                    <tr>
                      <td colspan="3">Delivery Fee</td>
                      <td class="text-end"> {{freeDelivery ? 'FREE' : deliveryFee + ' €'}}</td>
                    </tr>
                  </tbody>
                </table>
                <div class="fw-bolder fs-5 p-2">
                  Total € {{ total }}
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-12 col-md-6 col-lg-12">
            <h2>Payment Method</h2>
            <div class="col-12">
              <div id="dropin-container"></div>
              <button id="submit-button" class="button button--small button--green">Purchase</button>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {

  name: 'RestaurantMenuCart',
    props: {

        cart : Array,
        storageKey : String,
        total : Number,
        deliveryFee : Number,
        freeDelivery : Number,
        restaurantId : Number,
    },

  // methods: {
  //   var button = document.querySelector('#submit-button');

  //   braintree.dropin.create({
  //     authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b',
  //     selector: '#dropin-container'
  //   }, function (err, instance) {
  //     button.addEventListener('click', function () {
  //       instance.requestPaymentMethod(function (err, payload) {
  //         // Submit payload.nonce to your server
  //       });
  //     })
  //   });
  // }
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
