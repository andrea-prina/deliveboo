<template>
        <div class="card col-12 col-md-6 col-lg-3 mx-1">
            <!-- <span class="offer">FirstOrder25</span> -->
            <div class="item-image"> <img src="../../../public/assets/img/il villino.jpg"> </div>
            <div class="item-content">
                <h3>Ristorante il Villino</h3>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <div class="item-price"> <span>125/piece</span> <span>min order(200)</span> </div>
            </div>
        </div>
</template>

<script>
export default {
    name: 'RestaurantCard'
}
</script>

<style lang="scss">
@import "../../sass/app.scss";


    .card .offer {
        
        height: 40px;
        background-color: red;
        position: absolute;
        top: 28px;
        left: -14px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 15px;
        font-weight: 700;
        color: #fff
    }

    .card {
        height: 310px;
        
        background-color: #fff;
        border-radius: 20px;
        position: relative;

        .item-content {
            padding: 10px
        }

        .item-content h3 {
            font-size: 20px
        }

        .item-content p {
            font-size: 15px;
            font-weight: 500
        }

        .item-price {
            margin-top: 10px;
            display: flex;
            justify-content: space-between
        }
    }



    .card span:before {
        position: absolute;
        content: '';
        background-color: red;
        height: 30px;
        width: 17px;
        top: 20px;
        left: 0px;
        border-radius: 10px;
        z-index: -10
    }

    .card span:after {
        position: absolute;
        content: '';
        background-color: #d70303;
        height: 30px;
        width: 17px;
        top: 30px;
        left: 0px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 20px;
        z-index: -10
    }

    .card .item-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .card .item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover
    }

</style>
