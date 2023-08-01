<template>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">Startup Bootstrap 5 template comes with fewer cross-browser bugs, making the
                            template responsive to all major browsers available. CSS compatibility fixes allow this business
                            startup template to be compatible with all screen sizes. </p>
                            <div v-if="message" class="alert alert-success">
                            {{ message }}
                        </div>
                        <form action="javascript:void(0)" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email" v-model="email">
                                <button class="btn btn-dark" @click="submit">Sign Up</button>
                            </div>
                         

                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5"  v-for="(d, i) in gen" :key="i">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5" >
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">{{d.address}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">{{d.email}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+{{d.phn}}</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <router-link class="text-light mb-2 " to="/"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</router-link>
                                <router-link class="text-light mb-2 " to="/ab"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</router-link>
                                <router-link class="text-light mb-2 " to="/serves"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</router-link>
                                <router-link class="text-light mb-2 " to="/bl"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</router-link>

                                <router-link class="text-light mb-2 " to="/tems"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</router-link>

                                <router-link class="text-light mb-2 " to="conct"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</router-link>


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <router-link class="text-light mb-2 " to="/"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</router-link>
                                <router-link class="text-light mb-2 " to="/ab"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</router-link>
                                <router-link class="text-light mb-2 " to="/serves"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</router-link>
                                <router-link class="text-light mb-2 " to="/bl"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</router-link>

                                <router-link class="text-light mb-2 " to="/tems"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</router-link>

                                <router-link class="text-light mb-2 " to="conct"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</router-link>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <router-link class="text-white border-bottom" to="/">StartUp</router-link>.
                            All Rights Reserved. @<span v-text="year"></span>

                    
                            Designed by <a class="text-white border-bottom" href="#">Sharmin Akter</a>
                        </p>
                        <br>Distributed By: <a class="border-bottom" href="#"
                            target="_blank">StartUp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top">
        <i class="fa fa-angle-double-up"></i></a>
    <!-- Footer End -->
</template>
<script>
export default {
    name: 'Foot',
    data() {
        return {
        year:new Date().getFullYear(),
            email: "",
          
            message: '',
            gen:[],
        };
    },

    methods: {

        submit() {
            axios.post("api/email", {
            
                email: this.email,
           
            
                
            })
                .then((response) => {
                    // this.$router.push({name:'foot'});
                    this.email = '';
                   
                    this.message = 'Email is sent Successfully!';
                });


        },
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