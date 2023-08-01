<template>
      <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" v-for="(d, i) in blog" :key="i">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" :src="`/uploads/${d.photo}`" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">{{d.Badge}} </a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{d.name}}</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{d.date}}</small>
                            </div>
                            <h4 class="mb-3">{{d.title}}</h4>
                            <p>{{d.details}}</p>
                            <router-link class="text-uppercase" :to="`/blo/${d.id}`">Read More <i class="bi bi-arrow-right"></i></router-link>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name:'Blg',

    data() {
        return {
            blog: [],
        }
    },
    methods: {
        getblog() {
            axios.get('api/blog')
                .then((response) => {
                    this.blog = response.data.data
                })
        },
    },
    mounted() {
        this.getblog()
    }
}
</script>