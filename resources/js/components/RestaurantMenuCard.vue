<template>
    <div class="card myCard" style="width: 18rem;">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Carbonara</h5>
            <p class="card-text">Descrizione: Some quick example text to build on the card title and make up the bulk of
                the card's content.</p>
            <p class="card-text">Ingredienti:</p>
            <p class="card-text">Prezzo:</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</template>

<script>
export default {

    name: 'RestaurantMenuCard',
    props: {
        menu: Object,
    },
}
</script>
    
<style lang="scss">
@import "../../sass/app.scss";

.myCard {
    background-color: #fafafa;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transition: transform 0.2s ease-in-out;
}
</style>