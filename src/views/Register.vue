<template>
    <div class="navbar mb-5">
        <Navbar />
    </div>

    <div class="form-login mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 card-wrap d-flex">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Form Register</h4>
                                <div class="line mt-3 mb-5"></div>
                            </div>

                            <div class="card-content mt-5">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Name">
                                    <label for="floatingName">Name Address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingEmail" placeholder="Email">
                                    <label for="floatingEmail">Email Address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="btn-login mt-5">
                                    <button class="btn btn-primary w-100" @click.prevent="register">Register</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <p class="text-center">Sudah punya akun ? <router-link :to="{name: 'Login'}">Login Sekarang</router-link></p>
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
            form: {
                name: '',
                email: '',
                password: ''
            },
        }
    },

    components: {
        Navbar, Footer
    },

    methods: {
        async register(){
            await fetch()
        }
    },

    created(){
        if(localStorage.getItem('status')){
            this.$router.push('/')
        }
    }
}
</script>

<style scoped>
    .form-login{
        background: linear-gradient(0deg, rgba(0 0 0 / 80%), rgba(0 0 0 / 20%)), url('../assets/hannah-morgan-ycVFts5Ma4s-unsplash.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
    }
    .card-wrap{
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }
    .form-login .card{
        width: 600px;
        padding: 20px;
    }
    .line{
        border-bottom: 3px solid #eded81;
        width: 50px;
    }
</style>