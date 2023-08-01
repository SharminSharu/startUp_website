<template>
<div class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->

            <Header />
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <Menu />

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0"></h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Dashboard
                                    </li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="m-0">Add About Status</h3>
                                <h4 class="btn btn-warning" style="margin-left:93%">
                                    <router-link to="/about">Show</router-link>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" v-model="name" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Degisnation</label>
                                        <input type="text" class="form-control" id="inputPassword4" v-model="degi" />
                                    </div>

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="fileHandle($event)" />
                                    </div>
                                    <br />
                                    <div class="col-md-6">
                                        <label for="">Details:</label>
                                        <br />
                                        <textarea id="summernote" v-model="details" rows="4" cols="50"></textarea>
                                    </div>

                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary" @click="update">
                                        Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <Footer />

            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    </div>
</template>

<script>
import axios from "axios";
import Footer from "../Footer.vue";
import Header from "../Header.vue";

import Menu from "../Menu.vue";


export default {
    components: { Menu, Footer, Header },
    name:'Edit_review',
    data() {
        return {
            id: "",
          name:"",
          degi:"",
          details:"",
        file: "",
        };
    },
    methods: {
        getreview() {
            axios.get(`/api/review/${this.id}`).then((response) => {
                this.name = response.data.data.name;
                this.degi = response.data.data.degi;
                this.details = response.data.data.details;
                this.file = response.data.data.file;
                console.log(response.data);
            });
        },
        fileHandle(e) {
            this.file = e.target.files[0];
        },
        update() {
            let formData = new FormData();
            formData.append("name", this.name);
            formData.append("degi", this.degi);
            formData.append("details", this.details);
         
            formData.append("_method", 'PUT');
            formData.append("file", this.file);
              
             axios.post(`/api/review/${this.id}`, formData, {
                    headers: { "Content-Type": "multipart/form-data" },
                })
                .then((response) => {
                    this.$router.push("/review");
                    console.log(response)
                });
        },
},
mounted() {
        this.id = this.$route.params.id;
        this.getreview();
    },

}
</script>