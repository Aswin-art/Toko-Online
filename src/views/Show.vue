<template>
    <div class="navbar">
        <Navbar />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
export default {
    data(){
        return {

        }
    },

    components: {
        Navbar
    },

    methods: {

    },

    created(){
        if(!localStorage.getItem('status')){
            this.$router.push('/login')
        }
    }
}
</script>

<style scoped>

</style>