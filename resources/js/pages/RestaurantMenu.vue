<template>
    <div>
        <RestaurantMenuJumbo/>
        <RestaurantMenuContainer/>
        <FooterComponent/>
    </div>
</template>

<script>
import RestaurantMenuJumbo from '../components/RestaurantMenuJumbo.vue'
import RestaurantMenuContainer from '../components/RestaurantMenuContainer.vue'
import FooterComponent from '../components/FooterComponent.vue'

export default {
    name: 'RestaurantMenu',
    components: {
        FooterComponent,
        RestaurantMenuJumbo,
        RestaurantMenuContainer,

    },
}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>