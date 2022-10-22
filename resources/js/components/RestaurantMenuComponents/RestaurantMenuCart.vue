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
                            <div
                                class="position-absolute top-right"
                                @click="$emit('resetCart')"
                            >
                                <a href="#/" class="text-danger"
                                    ><i class="fas fa-trash fa-lg"></i
                                ></a>
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
                                            <div
                                                class="d-flex justify-content-between"
                                            >
                                                <button
                                                    class="btn btn-link p-0 px-2"
                                                    @click="
                                                        $emit(
                                                            'removeItem',
                                                            item.id
                                                        )
                                                    "
                                                >
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <span>{{ item.quantity }}</span>
                                                <button
                                                    class="btn btn-link p-0 px-2"
                                                    @click="
                                                        $emit('addItem', item)
                                                    "
                                                >
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
                                    <div class="fw-bolder fs-5 p-2">
                                        Total € {{ total }}
                                    </div>
                                </tbody>
                        
                            </table>
                            <div v-else>Il Carrello sta vuoto pezzente</div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <button
                                type="button"
                                class="btn bg-brand btn-block btn-lg w-100"
                            >
                                Proceed to Pay
                            </button>
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
        cart: Array,
        storageKey: String,
        total: Number,
        deliveryFee: Number,
        freeDelivery: Number,
    },
    methods: {},
};
</script>

<style lang="scss">
@import "../../../sass/app.scss";

.top-right {
    top: 0.5rem;
    right: 0.5rem;
}
</style>
