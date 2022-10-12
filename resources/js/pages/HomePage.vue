<template>
    
    <div>
        <HeaderNav/>
        <FooterComponent/>
    </div>
  
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import FooterComponent from '../components/FooterComponent.vue'

export default {
    name: 'HomePage',
    components: {
        HeaderNav,
        FooterComponent,
    }
}
</script>

<style>

</style>




// Header con login, register (riprendere quello dal Blade) - COMPONENT
// Jumbotron con ricerca (searchbar - COMPONENT)
// Elenco ristoranti "spotlight" (cardHomepage - COMPONENT)
// Elenco categorie (solo nome)
// Footer - COMPONENT