<template>
    <div class="container">
        <div class="row" v-if="(typeNames.length > 0) || (searchQuery != '')">
            <div class="col-10">
                <ul class="d-flex category-list">
                    <li v-if="typeNames.length > 0"> Filter for: <span v-for="(type, index) in typeNames" :key="index">{{ type}} </span></li>
                    <li v-if="searchQuery != ''"> Query: {{ searchQuery }} </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    name : 'SearchFilters',

    props : {
        typeNames : Array,
        searchQuery : String,
    }

}
</script>

<style lang="scss" scoped>
@import "../../../sass/app.scss";

.category-list {
    list-style: none;
    padding: 0;
    margin: 0;
    justify-content: center;
    li {
        font-weight: bold;
        color: $brand-main;
        span{
            margin-right: 10px
        }
    }
}
</style>