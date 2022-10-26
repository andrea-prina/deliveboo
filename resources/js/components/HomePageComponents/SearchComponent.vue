<template>
  <div class="jumbotron">
    <div class="wrap">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="Search your favorite restaurant" v-model.trim="searchQuery"
          @keyup.enter="$emit('search', searchQuery)">

        <button v-if="searchQuery !== ''" class="btn-disappear" @click="clearSearch()">
          <i class="fa-regular fa-circle-xmark"></i>
        </button>

        <button type="submit" class="searchButton" @click="$emit('search', searchQuery)">
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
      searchQuery: '',
    }
  },

  methods: {
    clearSearch(){
      this.searchQuery = '';
      this.$emit('search', this.searchQuery);

    }
  }
}
</script>

<style lang="scss" scoped>
@import "../../../sass/app.scss";
@import "../../../sass/_variables.scss";


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
  color: $footer-main;
  min-width: 190px;
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
.wrap {
  width: 55%;
  //position: absolute;
  //top: 50%;
  //left: 50%;
  //transform: translate(-50%, -50%);
}

.jumbotron {
  height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: $brand-white;
  //position: relative;//
  background-image: url('https://thumbs.dreamstime.com/b/balanced-diet-food-background-balanced-diet-food-background-organic-food-healthy-nutrition-superfoods-meat-fish-legumes-nuts-121936796.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;

}

.btn-disappear {
  background-color: $accent-main;
  color: white;
  border: none;
  font-size: 1.3rem;
  padding-right: 0;

}
</style>
