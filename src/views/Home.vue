<template>
    <div class="home">
        <Navbar />
    </div>

    <div class="jumbotron">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="category-product mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center section-title">Category Product</h1>
                    <div class="line mx-auto mt-3 mb-5"></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                    <div class="card">
                        <img src="../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" alt="" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Category</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                    <div class="card">
                        <img src="../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" alt="" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Category</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                    <div class="card">
                        <img src="../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg" alt="" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Category</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <router-link :to="{name: 'Categories'}" class="btn btn-primary">View Categories</router-link>
                </div>
            </div>
        </div>
    </div>

    <div class="offer-product mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row offer-content">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 offer-text">
                                <h1>Find The Best Product
                                    from Our Shop</h1>
                                <p class="mt-3">Designers who are interesten creating state ofthe.</p>
                                <router-link :to="{name: 'Product'}" class="btn btn-dark text-light mt-4">Shop Now</router-link>
                            </div>
                            <div class="col-6 offer-img">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-product mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center section-title">Latest Product</h1>
                    <div class="line mx-auto mt-3 mb-5"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-3">
                    <div class="card">
                        <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Title</h5>
                            <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                            <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-3">
                    <div class="card">
                        <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Title</h5>
                            <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                            <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-3">
                    <div class="card">
                        <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Title</h5>
                            <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                            <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-3">
                    <div class="card">
                        <img src="../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Fashion Title</h5>
                            <p class="description mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ex.</p>
                            <router-link :to="{name: 'Show'}" class="btn btn-primary mt-3">View Detail</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-3">
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
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <router-link :to="{name:'Product'}" class="btn btn-primary">View All Product</router-link>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe mt-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card bg-subscription">
                        <div class="row">
                            <div class="col-12 mt-5 mb-5 subscribe-content d-flex">
                                <h1 class="text-center text-light">Get Our Latest Offers News</h1>
                                <p class="text-center text-light">Subscribe news latter</p>

                                <div class="btn-subscribe mt-5 d-flex">
                                    <input type="text" class="form-control" placeholder="Type your email...">
                                    <button class="btn btn-dark" @click.prevent="subscribe">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-sect mt-5">
        <Footer />
    </div>
</template>

<script>
// @ is an alias to /src
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
    name: 'Home',
    components: {
        Navbar, Footer
    }
}
</script>

<style scoped>
    @media (min-width: 768px) {
        .carousel-item{
            height: 550px;
        }
    }
  .carousel-item img{
    object-fit: cover;
  }
  .carousel-inner{
    position: relative;
  }
  .offer-product .card{
    background-image: url("../assets/bg-offer.png");
    border: none;
    }
    .category-product .card{
        padding: 5px;
    }
    .offer-text{
        padding: 50px;
    }
    .offer-text p{
        font-size: 20px;
    }
    .offer-img{
        background: linear-gradient(0deg, rgba(0 0 0 / 80%), rgba(0 0 0 / 20%)), url('../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg');
        background-size: cover;
    }
    .line{
        border-bottom: 4px solid #eded81;
        width: 100px;
    }
    .section-title{
        color: black;
    }
    .bg-subscription{
        background: linear-gradient(0deg, rgba(0 0 0 / 100%), rgba(0 0 0 / 60%)), url('../assets/parker-burchfield-tvG4WvjgsEY-unsplash.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        border: none;
        border-radius: 3px;
    }
    .bg-subscription .row{
        height: 100%;
    }
    .bg-subscription h1{
        font-size: 50px;
    }
    .bg-subscription p{
        font-size: 25px;
    }
    .btn-subscribe button{
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        height: 50px;
        font-size: 15px;
        line-height: 18px;
    }
    .btn-subscribe input{
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        height: 50px;
    }
    .subscribe-content{
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
