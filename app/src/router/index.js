import {createRouter, createWebHistory} from 'vue-router';

import HomeView from '../views/HomeView.vue';
import LoginView from '../views/LoginView.vue';
import RegisterView from '../views/RegisterView.vue';
import CartView from '../views/CartView.vue';
import ProductsView from '../views/ProductsView.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeView,
    },
    {
        path: '/login',
        name: 'login',
        component: LoginView,
    },
    {
        path: '/register',
        name: 'register',
        component: RegisterView,
    },
    {
        path: '/cart',
        name: 'cart',
        component: CartView,
    },
    {
        path: '/products',
        name: 'products',
        component: ProductsView,
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
