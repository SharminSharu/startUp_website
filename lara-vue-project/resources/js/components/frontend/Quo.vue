<template>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Business quote is a document that specifies the price for a set of goods or services. Quotes are sometimes referred to as “sales quotations.” Sales quotes are common business documents and essential to most organizations' sales processes.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+880151263720</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div v-if="message" class="alert alert-success">
                            {{ message }}
                        </div>
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                     
                        <form action="javascript:void(0)" method="post">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" v-model="name"
                                        placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        v-model="email" style="height: 55px;">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"
                                        v-model="msg"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit" @click="submit">Request A
                                        Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Quo",
    data() {
        return {
            name: "",
            email: "",
            msg: "",
            message: '',

        };
    },

    methods: {

        submit() {
            axios.post("api/quote", {
                name: this.name,
                email: this.email,
                msg: this.msg,
                
            })
                .then((response) => {
                    // this.$router.push("/");
                    this.name = '';
                    this.email = '';
                    this.msg = '';
                    this.message = 'Message is sent Successfully!';
                });


        },


    }
}
</script>