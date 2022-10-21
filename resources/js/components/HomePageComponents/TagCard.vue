<template>
<div class="col-4 col-md-2 col-lg-1 md-m2">
    <button @click="$emit('typeName', type.type_name), selected=!selected" :class="[selected ? 'selected' : '']" class="tag-card m-0">
        <img class="card-img-top test" :src="type.icon_path" :alt="type.type_name">
        <br>
        <span class="card-title fw-bold">{{type.type_name}}</span>
    </button>
</div>

</template>

<script>
export default {

    name: "TagCard",

    props: {
            type: {
                type: Object,
                required: true
            }
        },

    data : function(){
        return {
            selected : false,
        }
    }
}


</script>

<style lang='scss'>
@import "../../../sass/app.scss";

.tag-card {
    display: inline-block;
    height: 6rem;
    width: 5rem;
    background-color: $brand-white;
    overflow: hidden;
    // border-radius: 50%;
    margin-left: 1rem;
    border: none;

    img {
        width: 70%;
        height: 70%;
        object-fit: contain;
    }

    &:hover {
        // border: 2px solid $brand-main;
        transform: scale(105%);
    }

    span{
        font-size: 0.6rem;
    }

}

.selected {

    .test {
        filter: grayscale(0);
        transform: scale(140%);

    }
}

.test {
    filter: grayscale(100%);

    &:hover {
        filter: grayscale(0);
        transform: scale(140%);
    }
}

</style>
