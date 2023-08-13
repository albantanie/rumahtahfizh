<template>
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <!-- Kode template Breadcrumb Anda -->
    </div>

    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
        <div class="container checkout-page-style">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="login-form-box">
                        <h1 class="text-center mb-5">Masuk Sebagai Admin</h1>
                        <form class="login-form" @submit.prevent="login">
                            <div class="input-box mb--30">
                                <input v-model="username" type="text" placeholder="Username" />
                            </div>
                            <div class="input-box mb--30">
                                <input v-model="password" type="password" placeholder="Password" @keyup.enter="login" />
                            </div>
                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                <span>Masuk</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { isLoggedIn } from '@/middleware';

export default {
    methods: {
        login() {
            const correctUsername = "admin"; // Ganti dengan nilai yang sesuai
            const correctPassword = "password"; // Ganti dengan nilai yang sesuai

            if (this.username === correctUsername && this.password === correctPassword) {
                isLoggedIn.value = true;
                this.$router.push('/admin');
            } else {
                alert('Username atau password salah');
            }
        }
    },
    data() {
        return {
            username: '',
            password: ''
        };
    }
};
</script>