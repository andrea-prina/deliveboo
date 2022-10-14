<template>

    <div class="card position-relative">
        <div class="position-absolute bg-style p-1">
            <h1 class="text-white">Free Delivery</h1>
        </div>
        <img :src='restaurant.image_path' class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title brand-title">{{ restaurant.restaurant_name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
            <span>Consegna: € {{ restaurant.delivery_fee }}</span>
        </div>
    </div>

</template>

<script>
export default {
    name: 'RestaurantCard',
    props: {
        restaurant: Object,
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

.card img{
    height: 230px;
    object-fit: cover;
}
</style>
