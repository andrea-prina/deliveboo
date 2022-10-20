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
                            <div class="row d-flex justify-content-between align-items-center" v-for="item in cart" :key="item.id">
                                <div class="col-4 col-md-4 col-lg-4">
                                    <p class="lead fw-normal mb-2 ms_font-size">{{item.name}}</p>
                                </div>

                                <div class="col-4 col-md-4 col-lg-4 d-flex">
                                    <button class="btn btn-link px-2" @click="$emit('remove1food',item.id)">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <p>{{item.quantity}}</p>

                                    <button class="btn btn-link px-2"
                                        @click="$emit('add1food', item)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-3 col-md-3 col-lg-2 offset-lg-1">
                                    <h5 class="mb-0 ms_font-size">{{item.price}}</h5>
                                </div>
                            </div>
                        </div>
                            <div class="col-1 col-md-1 col-lg-1 text-end" @click="$emit('faistoreset')">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                            <div>
                                <p class="lead fw-normal mb-2 ms_font-size">Total: {{total}}</p>
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
        cart:Array,
        storageKey:String,
        total:Number,
    },
    methods: {

    }

}
</script>

<style lang="scss">
@import "../../../sass/app.scss";


</style>
