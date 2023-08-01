<template>
    <Nav/>
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Team & Testimonial</h1>
                    <router-link to="/" class="h5 text-white">Home</router-link>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Contact</a>
                </div>
            </div>
        </div>
    <Tem/>
    <Test/>
    <Ven/>
    <Foot/>
</template>
<script>
import Foot from './Foot.vue'
import Nav from './Nav.vue'
import Tem from './Tem.vue'
import Test from './Test.vue'
import Ven from './Ven.vue'
export default{
  components: { Nav, Foot, Tem, Test, Ven },
    name:'Tems',
}
</script>