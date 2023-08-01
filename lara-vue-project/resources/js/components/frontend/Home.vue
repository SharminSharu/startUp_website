<template>
  <body>
    
    <Nav />
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div v-if="loading">Loading...</div>
            <div class="carousel-inner">
                <div v-for="(d, i) in slider" :key="i"   
                 :class="['carousel-item', { 'active': i === 0 }]">
                    <img class="w-100" :src="`/uploads/${d.photo}`"  alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{d.title}}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{d.details}}</h1>
                            <router-link to="/quo" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</router-link>
                            <router-link to="/conct" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</router-link>
                        </div>
                    </div>
                </div>
        
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
 <!-- Facts Start -->
 <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12453</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- <Head /> -->
    <Abo />

    <Serv />
    <Quo/>
    <Tem />
    <Test/>
  <Blg/>

  <Ven/>
    <Foot />
  </body>
</template>
<script>
import Abo from './Abo.vue'
import Serv from './Serv.vue'
import Foot from './Foot.vue'
import Nav from './Nav.vue'
import Tem from './Tem.vue'
import Head from './Head.vue'
import Ven from './Ven.vue'
import Test from './Test.vue'
import Quo from './Quo.vue'
import Blg from './Blg.vue'
export default {
  components: { Nav, Foot, Abo, Serv, Tem, Head, Ven, Test,
    Quo,Blg },


  name: 'Home',
  data() {
        return {
            slider: [],
            loading: true,
        }
    },
    methods: {
        getslider() {
            axios.get('api/slider')
                .then((response) => {
                    this.slider = response.data.data
                    this.loading = false;
        })
        .catch((error) => {
          console.error(error);
          this.loading = false;
        });
               
        },
    },
    mounted() {
        this.getslider()
}
}
</script>