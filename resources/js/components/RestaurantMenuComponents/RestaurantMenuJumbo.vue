<template>
    <div class="jumbotron">
        <img src="http://www.ilvillinoristorante.it/images/mainimage4.jpg" alt="">
        <div class="wrap">
            <div class="text-center my-text">
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
    //position: relative;//
    
    
    
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
