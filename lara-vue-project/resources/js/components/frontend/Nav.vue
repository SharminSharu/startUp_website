<template>
    	  <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;"
                v-for="(d, i) in gen" :key="i">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{d.address}}</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{d.phn}}</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{d.email}}</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
  
  <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
      <router-link to="/" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
      </router-link>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <router-link to="/" class="nav-item nav-link">Home</router-link>
          <router-link to="/ab" class="nav-item nav-link">About</router-link>
          <router-link to="/serves" class="nav-item nav-link">Services</router-link>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
            <div class="dropdown-menu m-0">
        
              <router-link to="/bl" class="dropdown-item">Blog Detail</router-link>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu m-0">
              <!-- <router-link to="/price" class="dropdown-item">Pricing Plan</router-link>
              <router-link to="/feature" class="dropdown-item">Our features</router-link> -->
              <router-link to="/tems" class="dropdown-item">Team Members</router-link>
              <!-- <router-link to="/testimonial" class="dropdown-item">Testimonial</router-link> -->
              <router-link to="/quo" class="dropdown-item">Free Quote</router-link>
            </div>
          </div>
          <router-link to="/conct" class="nav-item nav-link">Contact</router-link>
        </div>
        <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </nav>
  </div>


      <!-- Full Screen Search Start -->
      <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             <Search/>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
  <main>
    <router-view></router-view>
  </main>
</template>

<script>
import Search from './Search.vue'
export default {
  components: { Search },
  name: 'Nav',
  data() {
        return {
            gen: [],
        }
    },
    methods: {
        getgen() {
            axios.get('api/gn')
                .then((response) => {
                    this.gen = response.data.data
                })
        },
    },
    mounted() {
        this.getgen()
    }
}

</script>
