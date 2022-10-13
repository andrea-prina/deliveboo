<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light brand-title navbar-back">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../../../public/assets/img/logo-white.png" alt="Deliveboo Logo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/register">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>
<script>
export default {
    name: 'HeaderNav',
}
</script>
<style lang="scss">
@import "../../sass/app.scss";
@import "../../sass/partials/headerBackOffice.scss";

.navbar-back {
    background-color: $brand-main !important;
    color: $brand-white !important;

    a {
        color: $brand-white !important;

    }

}
</style>
