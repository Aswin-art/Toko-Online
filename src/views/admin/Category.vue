<template>

</template>

<script>
export default {
    data(){
        return {

        }
    },

    methods: {

    },

    created(){
        if(!localStorage.getItem('status') && !localStorage.getItem('admin')){
            this.$router.push('/login')
        }
    }
}
</script>

<style scoped>

</style>