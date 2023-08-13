import { ref } from 'vue';

export const isLoggedIn = ref(false);

export const authMiddleware = (to, from, next) => {
    if (isLoggedIn.value) {
        next();
    } else {
        next('/login');
    }
};
