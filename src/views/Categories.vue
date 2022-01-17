<template>
    <div class="navbar-sect">
        <Navbar />
    </div>

    <div class="product-content mt-5 mb-5">
        <div class="bg-product">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex">
                        <h1 class="text-center text-light">Our Categories</h1>
                        <p class="text-center sub-text">Find all the best product in the world just at our store</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-items mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">ALL CATEGORIES</h1>
                        <div class="line mx-auto mt-3 mb-3"></div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="input-group mb-3 w-50">
                            <input type="text" class="form-control" placeholder="Search category..." aria-describedby="button-addon2">
                            <button class="btn btn-secondary text-light" type="button" id="button-addon2" @click.prevent="search">Search</button>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card">
                            <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="text-center">Fashion Title</h5>
                                <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                                <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card">
                            <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="text-center">Fashion Title</h5>
                                <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                                <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card">
                            <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="text-center">Fashion Title</h5>
                                <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                                <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card">
                            <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="text-center">Fashion Title</h5>
                                <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                                <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card">
                            <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="text-center">Fashion Title</h5>
                                <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                                <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card">
                            <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="text-center">Fashion Title</h5>
                                <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                                <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-sect">
        <Footer />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
    data(){
        return {
            products: ''
        }
    },

    components: {
        Navbar, Footer
    },

    methods: {
        async getProducts(){
            await fetch()
        }
    },

    created(){
        this.getProducts()
    }
}
</script>

<style scoped>
    .bg-product{
        background: linear-gradient(0deg, rgba(0 0 0 / 100%), rgba(0 0 0 / 50%)), url('../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg');
        height: 400px;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .bg-product .container, .bg-product .row{
        width: 100%;
        height: 100%;
    }
    .bg-product .container .row .col-12{
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .bg-product .container .row .col-12 h1{
        font-size: 70px;
    }
    .bg-product .container .row .col-12 .sub-text{
        color: #eded81;
        font-size: 20px;
    }
    .line{
        border-bottom: 4px solid #eded81;
        width: 100px;
    }
</style>