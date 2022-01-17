import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Categories from '../views/Categories.vue'
import Product from '../views/Product.vue'
import Show from '../views/Show.vue'
import Cart from '../views/Cart.vue'
import Dashboard from '../views/Dashboard.vue'
import AdminProduct from '../views/Product.vue'
import CategoryAdmin from '../views/admin/Category.vue'
import UserAdmin from '../views/admin/User.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/categories',
    name: 'Categories',
    component: Categories
  },
  {
    path: '/product',
    name: 'Product',
    component: Product
  },
  {
    path: '/show',
    name: 'Show',
    component: Show
  },
  {
    path: '/cart',
    name: 'Cart',
    component: Cart
  },
  {
    path: '/register',
    name: 'Register',
    component: Register
  },
  {
    path: '/admin',
    name: 'Admin',
    component: Dashboard
  },
  {
    path: '/adminProduct',
    name: 'AdminProduct',
    component: AdminProduct
  },
  {
    path: '/categoryAdmin',
    name: 'CategoryAdmin',
    component: CategoryAdmin
  },
  {
    path: '/userAdmin',
    name: 'UserAdmin',
    component: UserAdmin
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
