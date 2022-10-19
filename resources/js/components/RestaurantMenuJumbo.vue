<template>
    <div class="jumbotronn">
        <div class="wrap">
            <div class="text-center text-white">
                <h1>Ristorante Il Villino</h1>
                <p>C.da San Carlo 25, 62010, Treia(MC)</p>
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
}
</script>
<style lang="scss">
@import "../../sass/app.scss";
@import "../../sass/_variables.scss";

.jumbotronn {
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