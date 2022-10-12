<template>
    <div>
        <HomePage/>
    </div>
</template>

<script>
import HomePage from '../pages/HomePage.vue'


export default {

    name: "App",
    components: {
        HomePage,
    }
}
</script>


<style lang="scss">
@import "~bootstrap/scss/bootstrap.scss";
@import "../../sass/app.scss";


</style>