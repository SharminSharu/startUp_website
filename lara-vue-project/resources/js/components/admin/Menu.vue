<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Sharmin Akter</a> -->
          <a href="#" class="d-block">{{$store.state.auth.user.name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open" >
            <router-link to="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </router-link>

          </li>




          <li class="nav-item" :class="{'menu-open': isMenuOpen('slider') }">
            <a href="#" class="nav-link" @click="toggleMenu('slider')">
              <i class="fas fa-users"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview" v-show="isMenuOpen('slider')">
              <li class="nav-item">
                <router-link to="/adslider" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/slider" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Status</p>
                </router-link>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
         General Info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/adgen" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>General info Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/gen" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>General Info Status</p>
                </router-link>

              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/adabout" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>About Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/about" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>About Status</p>
                </router-link>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Team
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/adteam" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/team" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Status</p>
                </router-link>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
              Testimonials
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/adreview" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Review Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/review" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Review Status</p>
                </router-link>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class='fas fa-donate'></i>
              <p>
             Vendors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/advendor" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendor Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/vendor" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendor Status</p>
                </router-link>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class='fas fa-blog'></i>
              <p>
             Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/adblog" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Add Info</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/blog" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Status</p>
                </router-link>

              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="fa fa-cogs"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/adservice" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Managment</p>
                </router-link>

              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/service" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Status</p>
                </router-link>

              </li>
            </ul>
          </li>

          <li class="nav-item" >
            <router-link to="/quote" class="nav-link ">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Quote Message
                <i class="right fas fa-angle-left"></i>
              </p>
            </router-link>

          </li>
          <li class="nav-item " >
            <router-link to="/contact" class="nav-link ">
              <i class="nav-icon 	fas fa-envelope-open"></i>
              <p>
                Contact Message
                <i class="right fas fa-angle-left"></i>
              </p>
            </router-link>

          </li>
          <li class="nav-item " >
            <router-link to="/com" class="nav-link ">
              <i class="nav-icon fa fa-comments"></i>
              <p>
              Comment Message
                <i class="right fas fa-angle-left"></i>
              </p>
            </router-link>

          </li>
          <li class="nav-item " >
            <router-link to="/email" class="nav-link ">
              <i class="nav-icon fa fa-comments"></i>
              <p>
             Email Message
                <i class="right fas fa-angle-left"></i>
              </p>
            </router-link>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Authetication
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" @click="logout">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>

              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <main class="mt-3">
    <router-view></router-view>
  </main>
</template>


<script>
import { mapActions } from 'vuex'

export default {
  name: 'Menu',
  data() {
    return {
      activeMenus: []
    }
  },
  methods: {
    ...mapActions({
      signout: 'auth/logout'
    }),
    logout() {
      this.signout()
    },

    toggleMenu(menu) {
      const index = this.activeMenus.indexOf(menu)
      if (index !== -1) {
        this.activeMenus.splice(index, 1) // Close the menu
      } else {
        this.activeMenus.push(menu) // Open the menu
      }
    },
    isMenuOpen(menu) {
      return this.activeMenus.includes(menu)
    }
  }
}
</script>
