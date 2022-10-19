<template>

    <div class="card position-relative">
    <router-link :to="" >
        <div class="position-absolute bg-style p-2 free-delivery" :class="{'d-block':checkFreeDelivery()}">
            <h1 class="text-white">Free Delivery</h1>
        </div>
        <img :src='validateImagePath()' class="card-img-top" :alt=restaurant.restaurant_name>
        <div class="card-body">
            <h5 class="card-title brand-title">{{ restaurant.restaurant_name }}</h5>
            <span :class="{'text-decoration-line-through':checkFreeDelivery()}">Consegna: € {{ restaurant.delivery_fee }}</span>
        </div>
    </router-link>
    </div>

</template>

<script>
export default {
    name: 'RestaurantCard',
    props: {
        restaurant: Object,
    },
    data() {
        return {
            isFreeActive:false
        }
    },
    methods: {
        checkFreeDelivery(){
            if(this.restaurant.free_delivery == 1){
                this.isFreeActive = true;
                return true
            }

        },
        validateImagePath(){
            if(this.restaurant.image_path.includes('http')){
                return this.restaurant.image_path
            } else {
                return 'storage/' + this.restaurant.image_path
            }
        }
    },
    mounted()
    {
        this.checkFreeDelivery();

    }

}
// passare a restaurantCard un props che sarà l'oggetto ristorante che recupero con la chiamata api nel component parent
</script>

<style lang="scss">
@import "../../sass/app.scss";

.bg-style{
    top: 10px;
    background-color: $brand-main;
    h1{
        font-size: 14px;
        margin-bottom: 0;
    }
}
.card{
    border-radius: 0 !important;
}
.card img{
    height: 150px;
    width: 100%;
    object-fit: cover;
    border-radius: 0 !important;
}
.free-delivery{
    top:10%;
    display: none;
}
</style>
