<template>
    <section class="h-100">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-4 text-center">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    </div>
                    <div class="card rounded mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">

                                <div class="col-md-4 col-lg-4">
                                    <p class="lead fw-normal mb-2 ms_font-size">Pizza Margherita</p>
                                </div>

                                <div class="col-md-4 col-lg-4 d-flex">
                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 offset-lg-1">
                                    <h5 class="mb-0 ms_font-size">€499.00</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <button type="button" class="btn bg-brand btn-block btn-lg w-100">Proceed to Pay</button>
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
        items:Array
    },

}
</script>

<style lang="scss">
@import "../../../sass/app.scss";


</style>
