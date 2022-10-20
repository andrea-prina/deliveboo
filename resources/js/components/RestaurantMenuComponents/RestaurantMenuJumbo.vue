<template>
    <div class="jumbotron">
        <div class="wrap">
            <div class="text-center text-white">
                <h1>{{ restaurantInfo.restaurant_name }}</h1>
                <p>{{ restaurantInfo.address }}</p>
            </div>

        </div>
    </div>
</template>
<script>
export default {
    name: 'RestaurantMenuJumbo',
    data: function () {
        return {

        }
    },

    props : {
        restaurantInfo : Object,
    }
}
</script>
<style lang="scss" scoped>
@import "../../../sass/app.scss";
@import "../../../sass/_variables.scss";

.jumbotron {
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: $brand-white;
    //position: relative;//
    background-image: url('http://www.ilvillinoristorante.it/images/mainimage4.jpg');
    filter: brightness(0.4);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

    .wrap {
        width: 55%;
        //position: absolute;
        //top: 50%;
        //left: 50%;
        //transform: translate(-50%, -50%);
    }
}
</style>
