<template>
 <div class="login-box" style="margin-left:36%; margin-top:10%">
  <div class="login-logo">
    <a href="index2.html"><b>LOG</b>IN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="javascript:void(0)" method="post">
        <div class="col-12" v-if="Object.keys(validationErrors).length > 0">
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <li v-for="(value, key) in validationErrors" :key="key">{{ value[0] }}</li>
                                    </ul>
                                </div>
                            </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" v-model="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" v-model="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"
             @click="singin" :disabled="processing">
             {{ (processing)?'Please wait...':'Login' }} </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

  
    </div>

  </div>
</div>
 
</template>

<script>
import axios from "axios";
import { mapActions } from 'vuex'
export default {
    name:"login",
    data(){
        return{
                email:'',
                password:'',
                validationErrors:{},
                processing:false
            }
    },
    methods:{
        ...mapActions({
            login:'auth/login'
        }),
        async singin(){
                this.processing=true
                await axios.get('/sanctum/csrf-cookie')
                await axios.post('/login',{email:this.email,password:this.password},
                { headers:{"Accept":"application/json"}})
                .then(({data})=>{
                    this.login()
                
            }).catch(({response})=>{
                if(response.status===422){
                    this.validationErrors = response.data.errors
                }else{
                    this.validationErrors = {};
                    alert(response.data.message);
                }
            }).finally(()=>{
                this.processing = false;
            })
        },
    }
}
</script>