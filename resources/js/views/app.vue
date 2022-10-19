<template>
    <div>
        <HomePage/>
        <RestaurantPage/>
    </div>
</template>

<script>
import HomePage from '../pages/HomePage.vue'
import RestaurantPage from '../pages/RestaurantPage.vue'


export default {

    name: "App",
    components: {
        HomePage,
        RestaurantPage,
    }
}
</script>


<style lang="scss">
@import "~bootstrap/scss/bootstrap.scss";
@import "../../sass/app.scss";


</style>