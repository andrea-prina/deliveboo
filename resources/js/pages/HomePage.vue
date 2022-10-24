<template>
    <div>
        <SearchComponent @search="saveQuery" :typeNames="typeNames"/>
        <TagContainer @typeName="storeTypeNames"/>
        <SearchFilters :typeNames="typeNames" :searchQuery="searchQuery"/>
        <HomeRestaurantContainer :typeNames="typeNames" :searchQuery="searchQuery"/>
        <FooterComponent/>
    </div>
</template>

<script>
import FooterComponent from '../components/FooterComponent.vue'
import SearchComponent from '../components/HomePageComponents/SearchComponent.vue'
import TagContainer from '../components/HomePageComponents/TagContainer.vue'
import HomeRestaurantContainer from '../components/HomePageComponents/HomeRestaurantContainer.vue'
import SearchFilters from '../components/HomePageComponents/SearchFilters.vue'

export default {
    name: 'HomePage',
    components: {
        FooterComponent,
        SearchComponent,
        TagContainer,
        SearchFilters,
        HomeRestaurantContainer,

    },
    data : function(){
        return {
            typeNames : [],
            searchQuery : '',
        }
    },
    methods : {
        storeTypeNames : function(id){
            if(this.typeNames.includes(id)){
                this.typeNames = this.typeNames.filter(e => e !== id)
            } else {
                this.typeNames.push(id);
            }
        },

        saveQuery : function(query){
            this.searchQuery = query;
        },

        resetSearch : function(){
            this.typeNames = [];
            this.searchQuery = "";
        }
    }
}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>
