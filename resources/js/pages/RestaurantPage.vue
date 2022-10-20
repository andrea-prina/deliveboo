<template>
    <div>
        <RestaurantMenuJumbo/>
        <RestaurantMenuContainer/>
    </div>
</template>

<script>
import RestaurantMenuJumbo from '../components/RestaurantMenuComponents/RestaurantMenuJumbo.vue'
import RestaurantMenuContainer from '../components/RestaurantMenuComponents/RestaurantMenuContainer.vue'



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
