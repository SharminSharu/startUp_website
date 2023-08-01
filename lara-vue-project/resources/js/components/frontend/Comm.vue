<template>

                    <!-- Comment Form Start -->
         <!-- <div class="col align-self-center"> -->
                    <div class="bg-light rounded p-5 col-md-6 offset-md-3" style="margin-top:5%">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave A Comment</h3>
                        </div>
                        <div v-if="message" class="alert alert-success">
                            {{ message }}
                        </div>
                        <form action="javascript:void(0)" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" v-model="name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email" v-model="email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Web Design" v-model="website"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" v-model="comment"
                                        placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" @click="submit">Leave Your Comment</button>
                                </div>
                            </div>
                        </form>

                    </div>

    

                
         
             
</template>
<script>

export default{

  
 name:'Comm',
    data() {
        return {
            name: "",
            email: "",
            website: "",
            comment: "",
            message: '',
         
        };
    },
    methods: {
      
  submit() {
            axios.post("api/com", {
                name: this.name,
                email: this.email,
                website: this.website,
                comment: this.comment,
                
            })
                .then((response) => {
                    this.$router.push('/comm');
                    this.name = '';
                    this.email = '';
                    this.website = '';
                    this.comment = '';
                    this.message = 'Comment is sent Successfully!';
                });


     
    }
},
   
}
</script>