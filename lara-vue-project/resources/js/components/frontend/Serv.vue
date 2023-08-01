<template>
      <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" v-for="(d, i) in service" :key="i">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i :class="(d.icon)"></i>
                        </div>
                        <h4 class="mb-3">{{d.title}}</h4>
                        <p class="m-0">{{ d.details }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">
                      <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
<!-- --------------------loop complete-------- -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">Sayings and quotes about our company  will inspire positivity and good, happy feelings</p>
                        <h2 class="text-white mb-0">+880151542361</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    name:"Serv",
      
    data() {
        return {
            service: [],
        }
    },
    methods: {
        getservice() {
            axios.get('api/service')
                .then((response) => {
                    this.service = response.data.data
                })
        },
    },
    mounted() {
        this.getservice()
    }
}
</script>