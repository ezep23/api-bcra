import {createRouter, createWebHistory} from 'vue-router';
import { useUserStore } from '../store/auth';

const userStore = useUserStore();

import HomeView from '../views/HomeView.vue';
import LoginView from '../views/LoginView.vue';
import RegisterView from '../views/RegisterView.vue';
import CartView from '../views/CartView.vue';
import ProductsView from '../views/ProductsView.vue';
import AdminView from '../views/AdminView.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeView,
        meta: { requiresAuth: false }
    },
    {
        path: '/login',
        name: 'login',
        component: LoginView,
        meta: { requiresAuth: false }
    },
    {
        path: '/register',
        name: 'register',
        component: RegisterView,
        meta: { requiresAuth: false }
    },
    {
        path: '/cart',
        name: 'cart',
        component: CartView,
        meta: { requiresAuth: true }
    },
    {
        path: '/products',
        name: 'products',
        component: ProductsView,
    },
    {
        path: '/admin',
        name: 'admin',
        component: AdminView,
        meta: { 
            requiresAuth: false,
            role: 'admin'
        }
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

router.beforeEach((to, from, next) => {
    const isAuthenticated = userStore.$state.isAuthenticated;
    const role = isAuthenticated ? userStore.$state.role : undefined;


    // DEFINIR BIEN ESTO, LAS RUTAS QUE DEBEN ESTAR PROTEGIDAS
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!isAuthenticated) {
            next({ name: 'login' });
        } else if (to.matched.some(record => record.meta.role) && to.meta.role !== role) {
            next({ name: 'home' });
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;
