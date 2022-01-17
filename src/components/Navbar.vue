<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <router-link :to="{name: 'Home'}" class="navbar-brand">ALJB <span class="sub-brand">Store</span></router-link>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapseMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapseMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'About'}" class="nav-link">About</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'Product'}" class="nav-link">Product</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'Cart'}" class="nav-link">
                            Cart
                            <svg xmlns="http://www.w3.org/2000/svg" class="cart-svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .5);transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'Login'}" class="btn btn-primary" v-if="!status">Login</router-link>
                        <router-link :to="{name: 'Admin'}" class="btn btn-warning ms-3" v-if="!status">Admin</router-link>
                        <router-link :to="{name: 'Login'}" class="btn btn-danger" v-if="status">Logout</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        data(){
            return {
                status: localStorage.getItem('status')
            }
        }
    }
</script>

<style scoped>
    .navbar-brand{
        font-weight: bold;
        text-transform: uppercase;
        font-size: 25px;
    }
    .navbar-brand .sub-brand{
        font-weight: normal;
    }
    .cart-svg{
        margin-top: -5px;
    }
</style>