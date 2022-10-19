<template>
    <div class="row slider-bg-cont" id="tag-section">
        <div class="slider p-3 col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 scrollbar m-0">
            <div class="slider_container">
                <TagCard v-for="type in types" :key="type.id" :type="type" @typeName="passEmitToParent"/>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import TagCard from './TagCard';

export default {
    name: "TagContainer",
    components: {
        TagCard
    },
    data() {
        return {
            types: []
        }
    },
    methods: {
        getTypes() {
        
            axios.get("/api/types")
                .then(response => {
                this.types = response.data.results;
                
            })
                .catch(error => {
                console.log(error);
            });

        },

        passEmitToParent : function(name){
            this.$emit('typeName', name);
        },

    },

    created() {
        this.getTypes()
    }, 
}


</script>

<style lang="scss">
@import "../../sass/app.scss";


#tag-section{
    width: 100%;
    background-color: $brand-white;
    margin-left: 0 !important;
    margin-right: 0 !important;
    position: relative;
}
.slider{
    display: block;
    overflow-x:scroll ;
    box-sizing: border-box;
    width: 80vw;
}


.slider_container{
    display:flex;
    white-space: nowrap;
    width: 100%;

}

.slider-bg-cont{
    display: flex;
    justify-content: center;
}

.scrollbar::-webkit-scrollbar {
    width: 5px;
}

.scrollbar::-webkit-scrollbar-track {
    background-color: $accent-secondary;
}

.scrollbar::-webkit-scrollbar-thumb {
    box-shadow: inset 6px 0 6px $brand-secondary;
    background-color: $brand-secondary;
    border-radius: 10px;
}

</style>
