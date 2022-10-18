<template>
    <div>
        <SearchComponent @search="saveQuery"/>
        <TagContainer @typeName="storeTypeNames"/>
        <HomeRestaurantContainer :typeNames="typeNames" :searchQuery="searchQuery"/>
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
    }
}
</script>

<style lang="scss">
@import "../../sass/app.scss";
</style>
