<template>
<div>
    <div class="container fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Categorie</h2>
            </div>
        </div>
    </div>
        <div class="slider">
            <!-- <TagCard v-for="tag in tags" :key="tag.id" :tag="tag"/> -->
            <div class="slider_container">
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
                <div class="tag-card"></div>
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
            tags: []
        }
    },
    mounted() {
    /*     axios.get('/api/tags')
            .then((response) => {
                this.tags = response.data;
            }) */
    }

}
</script>

<style lang="scss">
@import "../../sass/app.scss";

.tag-card{
    display: inline-block;
    height: 50vh;
    width: 25vw;
    background-color: $accent-main;
    overflow: visible;
    border: 2px red solid;

}

.slider{
    display: block;
    width: 100%;
    overflow-x:scroll ;
    box-sizing: border-box;
}

.slider_container{
    display:block;
    white-space: nowrap;
}


</style>
