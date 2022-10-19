<template>
    <div>
        <RestaurantMenuJumbo/>
        <RestaurantMenuContainer/>
    </div>
</template>

<script>
import RestaurantMenuJumbo from '../components/RestaurantMenuComponent/RestaurantMenuJumbo.vue'
import RestaurantMenuContainer from '../components/RestaurantMenuComponent/RestaurantMenuContainer.vue'



export default {
    name: 'RestaurantPage',
    components: {
        RestaurantMenuJumbo,
        RestaurantMenuContainer,

    },
}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>
