<template>
    <div>
        <HeaderNav/>
        <SearchComponent/>
        <TagContainer @typeIds="storeTypeId"/>
        <HomeRestaurantContainer :typeIds="typeIds"/>
        <FooterComponent/>
    </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import FooterComponent from '../components/FooterComponent.vue'
import SearchComponent from '../components/SearchComponent.vue'
import TagContainer from '../components/TagContainer.vue'
import HomeRestaurantContainer from '../components/HomeRestaurantContainer.vue'

export default {
    name: 'HomePage',
    components: {
        HeaderNav,
        FooterComponent,
        SearchComponent,
        TagContainer,
        HomeRestaurantContainer,

    },
    data : function(){
        return {
            typeIds : []
        }
    },
    methods : {
        storeTypeId : function(id){
            if(this.typeIds.includes(id)){
                this.typeIds = this.typeIds.filter(e => e !== id)
            } else {
                this.typeIds.push(id);
            }
        }
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
