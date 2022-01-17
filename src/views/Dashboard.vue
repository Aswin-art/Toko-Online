<template>
    <div class="navbar-sidebar">
        <NavbarAdmin />
    </div>
</template>

<script>
import NavbarAdmin from '../components/NavbarAdmin.vue'
export default {
    data(){
        return {

        }
    },

    components: {
        NavbarAdmin
    },

    methods: {
        detectSidebar(){
            
        }
    },

    created(){
        // if(!localStorage.getItem('status') && !localStorage.getItem('admin')){
        //     this.$router.push('/login')
        // }
    }
}
</script>

<style scoped>
.navbar-sidebar{
    height: 100%;
}
</style>