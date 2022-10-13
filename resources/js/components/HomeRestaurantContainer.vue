<template>
    <section>
        <div class="container py-3">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <RestaurantCard/>
                </div>

               
            </div>
        </div>
    </section>
</template>

<script>
import RestaurantCard from '../components/RestaurantCard.vue'

export default {
    name: 'HomeRestaurantContainer',
    components: {
        RestaurantCard,

    }
}
</script>

<style lang="scss">
@import "../../sass/app.scss";


</style>
