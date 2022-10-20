<template>
    <div class="card my-card w-100" style="width: 18rem;" @click="$emit('addToCart', menuitem)">
        <div class="row">
            <div class="col-4 p-0">
                <div class="card-body p-1">
                    <img src="https://www.scattidigusto.it/wp-content/uploads/2018/04/carbonara-ricetta-spaghetti.jpg"
                        class="card-img-top w-75" alt="..." />
                </div>

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


}

img {
    margin: 4px !important;
    margin-left: 10px !important;

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
