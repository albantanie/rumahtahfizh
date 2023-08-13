<template>
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">

        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Halaman Admin</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Halaman Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-5">
                        <img src="assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-6">
                        <img src="assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="edu-cart-page-area edu-section-gap bg-color-white">
            <div class="container ">
                <div class="row g-5">
                    <div class="col-lg-12">
                            <!-- Cart Table -->
                            <div class="cart-table table-responsive mb--40">
                                <table id="myTable" class="table-cart table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <th class="pro-thumbnail"><span>ID</span></th>
                    <th class="pro-thumbnail"><span>Nama</span></th>
                    <th class="pro-thumbnail"><span>Username</span></th>
                    <th class="pro-thumbnail"><span>Email</span></th>
                    <th class="pro-thumbnail"><span>Phone</span></th>
                    <th class="pro-thumbnail"><span>Website</span></th>
                </tr>
            </thead>
        </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>






    
</template>

<script>
import $ from "jquery";
import axios from "axios";
import "bootstrap/dist/css/bootstrap.css"; //kalian bisa import ini di main.js agar dapat digunakan secara global
import "datatables.net-bs4"; //kalian bisa import ini di main.js agar dapat digunakan secara global
import { isLoggedIn } from '@/middleware'; // Import isLoggedIn dari middleware

export default {
// Middleware
beforeRouteEnter(to, from, next) {
        // Contoh pengecekan apakah pengguna sudah login atau belum
    
        if (isLoggedIn) {
            next(); // Lanjutkan navigasi ke halaman yang dituju
        } else {
            next('/login'); // Redirect ke halaman login jika belum login
        }
    },

    mounted() {
        axios.get("https://jsonplaceholder.typicode.com/users").then((response) => {

            $("#myTable").DataTable({
                data: response.data,
                columns: [
                    { data: "id" },
                    { data: "name" },
                    { data: "username" },
                    { data: "email" },
                    { data: "phone" },
                    { data: "website" },
                ],
            });
        });
    },
};
</script>