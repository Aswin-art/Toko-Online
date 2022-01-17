<template>
    <div class="navbar-sect">
        <Navbar />
    </div>

    <div class="cart-content mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex cart-text">
                    <h1 class="text-center">Ooppss.... keranjang belanja anda kosong</h1>
                    <router-link :to="{name: 'Product'}" class="btn btn-primary text-center mt-3">Belanja Sekarang</router-link>
                </div>
            </div>
        </div>
    </div>

    <div class="footer sect">
        <Footer />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
    data(){
        return {

        }
    },

    components: {
        Navbar, Footer
    },

    methods: {

    },

    created(){
        // if(!localStorage.getItem('status')){
        //     this.$router.push('/login')
        // }
    }
}
</script>

<style scoped>
    .cart-text{
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 500px;
        flex-direction: column;
    }
</style>