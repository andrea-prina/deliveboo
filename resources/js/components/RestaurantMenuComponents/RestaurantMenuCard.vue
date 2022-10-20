<template>
    <div class="row my-card" @click="$emit('addToCart', menuitem)">
            <div class="col-4 p-1">
                    <img src="https://www.scattidigusto.it/wp-content/uploads/2018/04/carbonara-ricetta-spaghetti.jpg" alt="..."
                    class="w-100"/>
            </div>
            <div class="col-8 p-0">
                <div class="card-body p-2">
                    <h5 class="card-title mt-1">{{menuitem.name}}</h5>
                    <p class="card-text my-1">{{menuitem.description}}</p>
                    <p class="card-text mt-1">Prezzo:{{menuitem.price}}</p>
                    <a href="#" class="btn btn-primary my-1">Go somewhere id:{{menuitem.id}}</a>
                </div>
            </div>



    </div>
</template>

<script>
export default {

    name: 'RestaurantMenuitemCard',
    props: {
        menuitem: Object,
    },
    data() {
        return {
            cart:[],
            storageKey:'delivebooCart',
        }
    },


}
</script>

<style lang="scss" scoped>
@import "../../../sass/app.scss";
.my-card {
    background-color: $brand-white !important;
    border-radius: 5px !important;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
    transition: transform 0.2s ease-in-out !important;

    &:hover {
        transform: translateY(-0.5rem);
        cursor: pointer;
    }

    .col-4{
        padding: 0px !important;
        img{
          object-fit: cover;
          height: 100%;
        }
    }
}




p {
    font-size: 10px !important;
}

a {
    font-size: 10px !important;
    background-color: $brand-main !important;
    color: $brand-white !important;
    border: 1px solid $brand-secondary !important;
}
</style>
