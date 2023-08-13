<script>
import Header from '../layouts/Header.vue'
import Footer from '../layouts/Footer.vue'

export default {
    components: {
        Header,
        Footer
    },
};

</script>
<template>
    <notifications />
    <div class="main-wrapper">
<Header></Header>
<router-view></router-view>
<Footer></Footer>
    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
</template>