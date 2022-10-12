<template>
<div class="jumbotron">
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you hungry for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
</div>

</template>

<script>
export default {
    name: 'SearchComponent',
    data: function () {
        return {
            search: '',
        }
    },
}
</script>

<style lang="scss">
@import "../../sass/app.scss";
@import "../../sass/_variables.scss";


.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid $accent-main;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: $accent-main;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid $accent-main;
  background: $accent-main;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.jumbotron {
    height: 40vh;
    background-color: $brand-white;
    position: relative;
    background-image: url('https://thumbs.dreamstime.com/b/balanced-diet-food-background-balanced-diet-food-background-organic-food-healthy-nutrition-superfoods-meat-fish-legumes-nuts-121936796.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

}
</style>
