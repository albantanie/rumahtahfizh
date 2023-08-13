<template>
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">

        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Daftar Rumah Tahfizh</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Daftar Rumah Tahfizh</li>
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

    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
      <div class="container checkout-page-style">
        <div class="row g-5 justify-content-center align-items-center">
          <div class="col-lg-6">
            <div class="login-form-box">
              <h1 class="text-center mb-5">Daftar Rumah Tahfizh</h1>
              <form class="login-form" @submit.prevent="submitForm">
                <div class="input-box mb--30">
                  <input v-model="nama" type="text" placeholder="Nama Rumah Tahfizh" />
                </div>
                <div class="input-box mb--30">
                  <input v-model="pemilik" type="text" placeholder="Pemilik" />
                </div>
                <div class="input-box mb--30">
                  <input v-model="alamat" type="text" placeholder="Alamat" />
                </div>
                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                  <span>Daftar</span>
                </button>
              </form>
            </div>
            <Notification ref="notificationRef" />
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import axios from 'axios';
import { ref } from 'vue';
import Notification from '../components/Notification.vue';

export default {
  components: {
    Notification
  },
  setup() {
    const notificationRef = ref();
    const nama = ref('');
    const pemilik = ref('');
    const alamat = ref('');

    const submitForm = async () => {
      const newData = {
        nama: nama.value,     // Use nama.value
        pemilik: pemilik.value, // Use pemilik.value
        alamat: alamat.value    // Use alamat.value
      };

      try {
        const response = await axios.post('/api/rumahtahfizh', newData);
        console.log(response.data);
        notificationRef.value.addNotification('Terima kasih telah mendaftar!', 'success');
      } catch (error) {
        console.error('Error:', error.response ? error.response.data : error.message);
        notificationRef.value.addNotification('Gagal mendaftar. Mohon cek kembali data Anda.', 'error');
      }
      location.reload();
    };

    return {
      notificationRef,
      submitForm,
      nama,
      pemilik,
      alamat
    };
  }
};
</script>
