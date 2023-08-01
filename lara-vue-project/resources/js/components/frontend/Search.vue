<template>
       <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="search" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword" v-model="query" >
                        <ul>
                            <li v-for="d in results" :key="d.id">{{ d.title }} ({{ d.service.title }} - {{ d.team.name }})</li>
            
                        </ul>
                      <button class="btn btn-primary px-4"><i class="bi bi-search" @click="search" ></i></button>
                    
                    </div>
                </div>
</template>

<script>
import axios from 'axios';

export default{
    name:"Search",
    data() {
    return {
      query: '',
      results: [],
    };
  },
  methods: {
    search() {
      
      axios.get(`/api/search?search=${this.query}`)
        .then(response => {
          this.results = response.data;
          console.log(response.data);
        })
       
    },
  },
}
</script>


