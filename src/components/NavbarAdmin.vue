<template>
    <div class="sidebar-desktop d-flex flex-column col-2 fixed-left">
        <a href="" class="sidebar-brand text-dark text-center">ALJB STORE</a>
        <div class="line mt-3 mb-4"></div>
        <ul class="sidebar-bar">
            <li class="sidebar-item mb-3 active">
                <a href="" class="sidebar-link d-block">
                    <i class='bx bx-home-smile'></i>Dashboard</a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class='bx bx-package'></i>Product</a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class='bx bx-category'></i>Category</a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class="bx bx-user"></i> User</a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class="bx bx-code-alt"></i> Landing Page</a>
            </li>
        </ul>
    </div>
    <!-- <div class="sidebar-mobile d-flex flex-column col-2 fixed-left">
        <a href="" class="navbar-brand text-dark text-center">ALJB</a>
        <div class="line mt-3 mb-4"></div>
        <ul class="sidebar-bar">
            <li class="sidebar-item mb-3 active">
                <a href="" class="sidebar-link d-block">
                    <i class='bx bx-home-smile'></i>Dashboard</a>
            </li>
            <li class="sidebar-item mb-3">
                <div class="sidebar-link d-block">
                    <i class='bx bx-package'></i>Product</div>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class='bx bx-category'></i>Category</a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class="bx bx-user"></i> User</a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="" class="sidebar-link d-block">
                    <i class="bx bx-code-alt"></i> Landing Page</a>
            </li>
        </ul>
    </div> -->
</template>

<script>
export default {
    
}
</script>

<style scoped>
.sidebar-bar{
    padding: 0 3px;
}
.sidebar-desktop{
    padding: 10px;
    border-right: 1px solid rgb(230, 230, 230);
    height: 100%;
}
.sidebar-brand{
    font-size: 20px;
    font-weight: 500;
}
.sidebar-item{
    border-radius: 20px;
    transition: all .3s ease;
}
.sidebar-item:hover{
    background-color: #eded81;
}
.active{
    background-color: #eded81;
    color: black;
}
.sidebar-link{
    color: black;
    padding: 10px;
}
.bx{
    position: relative;
    top: 2px;
    margin-right: 5px;
}
.line{
    border-bottom: 1px solid rgb(230, 230, 230);
}
</style>