<template>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center footer mt-5">
                    <h2 class="footer-title text-light">ALJB <span class="sub-brand">STORE</span></h2>
                </div>
                <div class="col-12 mt-3">
                    <div class="follow-us">
                        <h6 class="follow-title text-center">Follow us</h6>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="follow-icon d-flex">
                        <div class="icon-group rounded-circle">
                            <a href="https://www.facebook.com/" class="d-flex">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </div>
                        <div class="icon-group rounded-circle ms-3 me-3">
                            <a href="https://www.twitter.com/" class="d-flex">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </div>
                        <div class="icon-group rounded-circle">
                            <a href="https://www.instagram.com/" class="d-flex">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3 text-center">
                    <ul class="d-flex footer-link">
                        <li class="me-3">
                            <router-link :to="{name: 'Home'}" class="text-light">Home</router-link>
                        </li>
                        <div class="pembatas-footer-link me-3"></div>
                        <li class="me-3">
                            <router-link :to="{name: 'About'}" class="text-light">About</router-link>
                        </li>
                        <div class="pembatas-footer-link me-3"></div>
                        <li class="me-3">
                            <router-link :to="{name: 'Product'}" class="text-light">Product</router-link>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-3 mb-3">
                    <hr>
                    <p class="text-center footer-copyright">@Copyright 2022</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    .footer-title.sub-brand{
        font-weight: normal;
    }
    .footer{
        background-color: black;
    }
    .follow-title{
        color: #eded81;
        text-transform: uppercase;
    }
    .icon-group{
        background-color: white;
        width: 40px;
        height: 40px;
        justify-content: center;
        align-items: center;
    }
    .icon-group a{
        display: block;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
    }
    .follow-icon{
        justify-content: center;
    }
    hr{
        color: white;
    }
    .footer-copyright{
        font-size: 12px;
        color: #acacac;
    }
    .footer-link{
        justify-content: center;
        align-items: center;
        padding-left: 10px;
    }
    .footer-link li a:hover{
        color: #eded81;
    }
    .footer-link .pembatas-footer-link{
        border-right: 1px solid white;
        height: 15px;
    }
</style>