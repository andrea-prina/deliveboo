<template>
    <div class="container">
        <div class="row" v-if="(typeNames.length > 0) || (searchQuery != '')">
            <div class="col-10">
                <span>Search Filters:</span> 
                <ul class="d-flex">
                    <li v-if="typeNames.length > 0"> Categories: <span v-for="(type, index) in typeNames" :key="index">"{{ type}}" </span></li>
                    <li v-if="searchQuery != ''"> Query: {{ searchQuery }} </li>
                </ul>
            </div>
            <div class="col-2">
                <button class="btn btn-danger" @click="$emit('resetSearch')">RESET SEARCH</button>
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

<style>

</style>