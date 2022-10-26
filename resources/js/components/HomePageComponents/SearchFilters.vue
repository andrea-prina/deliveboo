<template>
    <div class="container mt-5">
        <div class="row" v-if="(typeNames.length > 0) || (searchQuery != '')">
            <div class="col-10">
                <ul class="d-flex category-list mt-3">
                    <li v-if="typeNames.length > 0"> Filtered for: <span v-for="(type, index) in typeNames"
                            :key="index">{{ type}} </span></li>
                    <li v-if="searchQuery != ''"> Searched for: <span>{{ searchQuery }} </span></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    name: 'SearchFilters',

    props: {
        typeNames: Array,
        searchQuery: String,
    }

}
</script>

<style lang="scss" scoped>
@import "../../../sass/app.scss";

.category-list {
    list-style: none;
    padding: 0;
    margin: 0;
    justify-content: flex-start;

    li {
        font-weight: bold;
        color: dimgrey;

        span {
            margin-right: 10px;
            border: 1px solid $brand-main;
            border-radius: 5px;
            color: darkgray;
            padding: 5px;
        }
    }
}
</style>