<template>
  <footer>
    <div class="top-footer container">
        <div class="row justify-content-between py-4">
            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Discover Deliveboo</h5>
                    <li><a href="">Investors</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Takeaway</a></li>
                    <li><a href="">More</a></li>
                    <li><a href="">Newsroom</a></li>
                    <li><a href="">Engineering</a></li>
                    <li><a href="">Design</a></li>
                    <li><a href="">Become a Rider</a></li>
                    <li><a href="">Careers</a></li>
                </ul>
            </div>

            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Legal</h5>
                    <li><a href="">Terms and conditions</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Cookies</a></li>
                    <li><a href="">Tax Strategy</a></li>
                </ul>
            </div>

            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Help</h5>
                    <li><a href="">Contact</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Cuisines</a></li>
                    <li><a href="">Brands</a></li>
                </ul>
            </div>

            <div class="ms_footer-card col-12 col-md-5 col-lg-2 mb-3 mx-md-2 mb-lg-0 text-white">
                <ul>
                    <h5 class="fw-bold">Take Deliveroo with you</h5>
                    <img class="w-50" src="../../../public/assets/img/download.png" alt="download">
                </ul>
            </div>

        </div>
    </div>

    <div class="btm-footer container">
        <div class="row justify-content-between text-white pb-2">
            <div class="col-12 col-md-6 ms_left-btm-footer">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
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

    a {
        text-decoration: none;
        color: white;

        &:hover {
            color: lightgrey;
        }
    }

}

</style>

