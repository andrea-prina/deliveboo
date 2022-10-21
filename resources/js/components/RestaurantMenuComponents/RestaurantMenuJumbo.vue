<template>
    <div class="jumbotron">
        <img :src="restaurantInfo.image_path" :alt="restaurantInfo.restaurant_name">
        <div class="text-center text-white my-text">
            <h1>{{ restaurantInfo.restaurant_name }}</h1>
            <p>{{ restaurantInfo.address }}</p>
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
    widows: 100%;
    height: 80vh;
    display: flex;
    position: relative;
    justify-content: center;
    align-items: center;
    
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        filter: brightness(0.4);
        left: 0;
    }

    .my-text{
        z-index: 2;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        h1{
            font-size: 3rem;
            color: white;
        }
        p{
            font-size: 1.5rem;
            color: white;
        }
    }

}
</style>
