<template>
<div class="col-4 col-md-3 col-lg-2 md-m2 ">
    <button @click="$emit('typeName', type.type_name), selected=!selected" :class="[selected ? 'selected' : '']" class="tag-card m-0">
        <img class="card-img-top test" :src="type.icon_path" :alt="type.type_name">
        <span class="card-title">{{type.type_name}}</span>
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
    height: 5rem;
    width: 5rem;
    background-color: $brand-white;
    overflow: hidden;
    border-radius: 50%;
    margin-left: 1rem;

    img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

}

.selected {

    .test {
        filter: grayscale(0);
    }
}

.test {
    filter: grayscale(100);

    &:hover {
        filter: grayscale(0);
    }
}

</style>
