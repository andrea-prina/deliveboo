<template>
    <div class="card my-card" style="width: 18rem;">
        <div class="row">
            <div class="col-4">
                <img src="https://www.scattidigusto.it/wp-content/uploads/2018/04/carbonara-ricetta-spaghetti.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Carbonara</h5>
                    <p class="card-text">Descrizione: Some quick example text to build on the card title and make up the
                        bulk of
                        the card's content.</p>
                    <p class="card-text">Prezzo:</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
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

.my-card {
    background-color: $brand-white !important;
    border-radius: 5px !important;
    //box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
    //transition: transform 0.2s ease-in-out !important;

}
</style>