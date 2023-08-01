<template>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div v-if="loading">Loading...</div>
            <div class="carousel-inner" v-else>
              
         
                 <div  v-for="(d, i) in slider" :key="i"    :class="['carousel-item', { 'active': i === 0 }]">
                     <img class="w-100" :src="`/uploads/${d.photo}`" alt="Image">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                         <div class="p-3" style="max-width: 900px;">
                             <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{d.title}}</h5>
                             <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{d.details}}</h1>
                             <router-link to="/" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</router-link>
                             <router-link href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</router-link>
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
 
 <main>
<router-view></router-view>
 </main>
</template>
<script>
export default{
    name:"Head",
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

    <!-- <div class="carousel-item">
                 <img class="w-100" src="frontend/img/carousel-2.jpg" alt="Image">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                         <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                         <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                         <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                         <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                         </div>
                     </div>
                 </div> -->