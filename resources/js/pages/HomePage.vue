<template>
    <div>
        <SearchComponent/>
        <TagContainer @typeName="storeTypeNames"/>
        <HomeRestaurantContainer :typeNames="typeNames"/>
        <FooterComponent/>
    </div>
</template>

<script>
import FooterComponent from '../components/FooterComponent.vue'
import SearchComponent from '../components/SearchComponent.vue'
import TagContainer from '../components/TagContainer.vue'
import HomeRestaurantContainer from '../components/HomeRestaurantContainer.vue'

export default {
    name: 'HomePage',
    components: {
        FooterComponent,
        SearchComponent,
        TagContainer,
        HomeRestaurantContainer,

    },
    data : function(){
        return {
            typeNames : []
        }
    },
    methods : {
        storeTypeNames : function(id){
            if(this.typeNames.includes(id)){
                this.typeNames = this.typeNames.filter(e => e !== id)
            } else {
                this.typeNames.push(id);
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
