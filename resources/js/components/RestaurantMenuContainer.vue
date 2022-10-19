<template>
    <section>
        <div class="container">
            <div class="row">

                <!-- menu side dishes -->
                <div class="col-12 col-md-8 bg-danger">

                    <div class="row ">
                        <div class="col-12 col-md-6 my-1">
                            <div class="bg-white"></div>
                        </div>  
                        <div class="col-12 col-md-6 my-1">
                            <div class="bg-white"></div>
                        </div>  
                        <div class="col-12 col-md-6 my-1">
                            <div class="bg-white"></div>
                        </div>  
                        <div class="col-12 col-md-6 my-1">
                            <div class="bg-white"></div>
                        </div>                                              
                    </div>

                </div>

                <!-- catt side  -->
                <div class="col-12 col-md-4 bg-dark">
                    <div class="col-12 bg-primary">

                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {

}
</script>

<style lang="scss">
@import "../../sass/app.scss";

.bg-danger{
    height: 600px;
}

.bg-dark{
    height: 600px;
}

.bg-white{
    height: 100px;
}

.bg-secondary{
    height: 100px;
}

.bg-primary{
    height: 300px;

}

.column-try{
    flex-direction: row;
}
</style>