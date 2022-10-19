<template>
<div class="col-2 m-2">
    <button @click="$emit('typeName', type.type_name), selected=!selected" :class="[selected ? 'selected' : '']" class="tag-card">
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
    height: 7vw;
    width: 7vw;
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
