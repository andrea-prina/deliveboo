<template>
  <footer>
    <div class="top-footer container">
        <div class="row justify-content-between py-4">
            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Scopri Deliveboo</h5>
                    <li>Investitori</li>
                    <li>Chi siamo</li>
                    <li>Ristoranti</li>
                    <li>Altro</li>
                    <li>Pressroom</li>
                    <li>Programmazione</li>
                    <li>Design</li>
                    <li>Lavora con noi</li>
                    <li>Diventa nostro partner</li>
                </ul>
            </div>

            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Note legali</h5>
                    <li>Termini & Condizioni</li>
                    <li>Informativa sulla Privacy</li>
                    <li>Ristoranti</li>
                </ul>
            </div>

            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Aiuto</h5>
                    <li>Contatti</li>
                    <li>FAQ</li>
                    <li>Tipi di Cucina</li>
                </ul>
            </div>

            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Porta Deliveboo con te</h5>
                    <img class="w-50" src="../../../public/assets/img/download.png" alt="download">
                </ul>
            </div>

        </div>
    </div>

    <div class="btm-footer container">
        <div class="row justify-content-between text-white pb-2">
            <div class="col-12 col-md-6 ms_left-btm-footer">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="col-12 col-md-6 ms_right-btm-footer">
                <span>© 2022 Deliveboo</span>
            </div>
        </div>
    </div>


  </footer>
</template>

<script>
export default {

}
</script>


<style lang="scss" scoped>
@import "../../sass/app.scss";

footer{
    background-color: $footer-main;
    .ms_footer-card{
        background-color: $footer-secondary;
        padding: 20px 0;
        // margin: 0 10px;
        /* flex-basis: calc(100% / 4 - 20px); */
        border-radius: 5px;
        flex-grow: 1;

        ul{
            list-style: none;

            li{
                margin-top: 8px;
                font-size: 0.8rem;
            }
        }
    }

    .ms_left-btm-footer i{
        font-size: 1.4rem;
        margin-right: 10px;
    }
    .ms_right-btm-footer{
        display: flex;
        justify-content: flex-end;
        color: $footer-secondary;
    }

}

</style>

