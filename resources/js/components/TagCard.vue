<template>
<div class="tag-card col-5 m-2">
        <img class="card-img-top" :src="type.icon_path" :alt="type.type_name">
        
            <h5 class="card-title">{{type.type_name}}</h5>
            
        </div>
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


}
</script>

<style lang='scss'>
@import "../../sass/app.scss";

.tag-card{
    display: inline-block;
    height: 7vw;
    width: 7vw;
    background-color: $brand-white;
    overflow: hidden;
    border-radius: 50%;
    margin-left: 1rem;
    img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    

}
</style>
