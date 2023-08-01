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
                                <h3 class="m-0">Add General Status</h3>
                                <h4 class="btn btn-warning" style="margin-left:93%">
                                    <router-link to="/gen">Show</router-link></h4>
                               
                             
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Email:</label>
                                        <input type="text" class="form-control" placeholder="" v-model="email" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Contact Number:</label>
                                        <input type="text" class="form-control" placeholder="" id="inputPassword4" v-model="phn" />
                                    </div>

                                    <br />
                                    <div class="col-md-6">
                                        <label for="">Address:</label>
                                        <br />
                                        <textarea id="summernote" v-model="address" rows="4" cols="50"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Map:</label>
                                        <br />
                                        <textarea id="summernote" v-model="map" rows="4" cols="50"></textarea>
                                    </div>

                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary" @click="submit">
                                            Save
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

    name: 'Add_general',
    data() {
        return {
            address: "",
            phn: "",
            email: "",
            map: "",
         
        };
    },
    methods: {

        submit() {
            axios.post("api/gn", {
                address: this.address,
                phn: this.phn,
                map: this.map,
                email: this.email,
            })
                .then((response) => {
                    this.$router.push("/gen");
                    
                });
        },

    }
}
</script>