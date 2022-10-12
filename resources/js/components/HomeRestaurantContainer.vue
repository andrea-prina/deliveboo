<template>
    <main>
        <div class="container ms_container-bg">
            <div class="row flex-wrap">
                <RestaurantCard/>
            </div>
            
        </div>
    </main>
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

.ms_container-bg{
    background-color: red;
    height: 200px;
}

</style>
