<template>
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white ">
                <VueAIcarousel :Property="{ID: 'Unique_id', Dlay:1000}">
                <div class="cards" v-for="(d, i) in ven" :key="i">
                    <img :src="`/uploads/${d.photo}`" alt="">
         
                </div>
                

        </VueAIcarousel>
            </div>
        </div>
    </div>


</template>
<style scoped>
.cards{
  background: #c0e1fe;
  height: 9rem;
  width: 12rem;
}
</style>
<script>
import VueAIcarousel from "vue-ai-carousel"
export default {

    components:{VueAIcarousel},
    name: 'Ven',
 
    data() {
        return {
            ven: [],
        }
    },
    methods: {
        getvendor() {
            axios.get('api/vendor')
                .then((response) => {
                    this.ven = response.data.data

                })


        },
    },
    mounted() {
        this.getvendor()
    }
}
</script>