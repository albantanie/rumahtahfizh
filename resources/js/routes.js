import Home from './pages/Home.vue'
import Register from './pages/Register.vue'
import Login from './pages/Login.vue'
import Admin from './pages/Admin.vue'
import { authMiddleware } from './middleware';

// Set isLoggedIn in globalProperties
const globalProps = {
    isLoggedIn: false
};

export default [
    { 
        path: '/',
        component: Home
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/admin',
        component: Admin,
        beforeEnter: authMiddleware
    }
];
