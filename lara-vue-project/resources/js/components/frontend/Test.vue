<template>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
          <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
          <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
          <div class="col-md-12" v-for="(d, i) in test" :key="i">
            <div class="testimonial-item bg-light my-4">
              <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                <img class="img-fluid rounded" :src="`/uploads/${d.photo}`" style="width: 60px; height: 60px;" />
                <div class="ps-4">
                  <h4 class="text-primary mb-1">{{ d.name }}</h4>
                  <small class="text-uppercase">{{ d.degi }}</small>
                </div>
              </div>
              <div class="pt-4 pb-5 px-5">
                {{ d.details }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Test',
    data() {
      return {
        test: [],
        carouselInitialized: false,
      };
    },
    methods: {
      gettest() {
        axios.get('api/review').then((response) => {
          this.test = response.data.data;
        });
      },
      initializeCarousel() {
        if (!this.carouselInitialized) {
          this.$nextTick(() => {
            $(".testimonial-carousel").owlCarousel({
              loop: true,
              items: 1,
              dots: true,
              autoplay: true,
              autoplayTimeout: 5000,
            });
            this.carouselInitialized = true;
          });
        }
      },
    },
    mounted() {
      this.gettest();
    },
    updated() {
      this.initializeCarousel();
    },
  };
  </script>
  