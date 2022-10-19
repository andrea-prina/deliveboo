<template>
    <section>
        <div class="container">
            <div class="row">

                <!-- menu side dishes -->
                <div class="col-12 col-md-7">

                    <div class="row ">
                        <div class="col-12 col-md-6 my-1">
                            <RestaurantMenuCard :menu="menu"/>
                        </div>  
                        <div class="col-12 col-md-6 my-1">
                            <RestaurantMenuCard :menu="menu"/>
                        </div>  
                        <div class="col-12 col-md-6 my-1">
                            <RestaurantMenuCard :menu="menu"/>
                        </div>  
                        <div class="col-12 col-md-6 my-1">
                            <RestaurantMenuCard :menu="menu"/>
                        </div>  
                    </div>

                </div>

                <!-- catt side  -->
                <div class="col-12 col-md-5 ">
                    <div class="col-12">
                        <RestaurantMenuCart :cart="cart"/>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
import RestaurantMenuCard from './RestaurantMenuCard.vue'
import RestaurantMenuCart from './RestaurantMenuCart.vue'

export default {
    name: 'RestaurantMenuContainer',
    components: {
        RestaurantMenuCard,
        RestaurantMenuCart,

    },
}
</script>

<style lang="scss">
@import "../../sass/app.scss";


</style>