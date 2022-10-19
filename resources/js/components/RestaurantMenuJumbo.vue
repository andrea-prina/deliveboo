<template>
    <div class="jumbotron">
        <div class="wrap">

        </div>
    </div>
</template>
<script>
export default {
    name: 'RestaurantMenu',
    data: function () {
        return {

        }
    },
}
</script>
<style lang="scss">
@import "../../sass/app.scss";
@import "../../sass/_variables.scss";

.jumbotron {
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: $brand-white;
    //position: relative;//
    background-image: url('http://www.ilvillinoristorante.it/images/mainimage4.jpg');
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