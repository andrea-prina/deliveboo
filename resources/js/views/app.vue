<template>
    <div>
        <HomePage/>
        <RestaurantMenu/>
    </div>
</template>

<script>
import HomePage from '../pages/HomePage.vue'
import RestaurantMenu from '../pages/RestaurantMenu.vue'


export default {

    name: "App",
    components: {
        HomePage,
        RestaurantMenu,
    }
}
</script>


<style lang="scss">
@import "~bootstrap/scss/bootstrap.scss";
@import "../../sass/app.scss";


</style>