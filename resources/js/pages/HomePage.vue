<template>
    <div>
        <HeaderNav/>
        <SearchComponent/>
        <HomeRestaurantContainer/>
        <FooterComponent/>
    </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import FooterComponent from '../components/FooterComponent.vue'
import SearchComponent from '../components/SearchComponent.vue'
import HomeRestaurantContainer from '../components/HomeRestaurantContainer.vue'

export default {
    name: 'HomePage',
    components: {
        HeaderNav,
        FooterComponent,
        SearchComponent,
        HomeRestaurantContainer,

    }
}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>




// Header con login, register (riprendere quello dal Blade) - COMPONENT
// Jumbotron con ricerca (searchbar - COMPONENT)
// Elenco ristoranti "spotlight" (cardHomepage - COMPONENT)
// Elenco categorie (solo nome)
// Footer - COMPONENT
