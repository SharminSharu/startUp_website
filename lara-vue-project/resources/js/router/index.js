import { createRouter,createWebHistory } from "vue-router";
import store from "../store";

import Dashboard from '../components/admin/Dashboard.vue';
import Login from '../components/admin/Login.vue';

import About from '../components/admin/about/About.vue';
import Add_about from '../components/admin/about/Add_about.vue';
import Edit_about from '../components/admin/about/Edit_about.vue';

import Service from '../components/admin/service/Service.vue';
import Add_service from '../components/admin/service/Add_service.vue';
import Edit_service from '../components/admin/service/Edit_service.vue';

import Team from '../components/admin/team/Team.vue';
import Add_team from '../components/admin/team/Add_team.vue';
import Edit_team from '../components/admin/team/Edit_team.vue';

import Slider from '../components/admin/slider/Slider.vue';
import Add_slider from '../components/admin/slider/Add_slider.vue';
import Edit_slider from '../components/admin/slider/Edit_slider.vue';

import Vendor from '../components/admin/vendor/Vendor.vue';
import Add_vendor from '../components/admin/vendor/Add_vendor.vue';

import Review from '../components/admin/review/Review.vue';
import Add_review from '../components/admin/review/Add_review.vue';
import Edit_review from '../components/admin/review/Edit_review.vue';

import Blog from '../components/admin/blog/Blog.vue';
import Add_blog from '../components/admin/blog/Add_blog.vue';
import Edit_blog from '../components/admin/blog/Edit_blog.vue';


import General from '../components/admin/general/General.vue';
import Add_general from '../components/admin/general/Add_general.vue';


import Quote from '../components/admin/quote/Quote.vue';

import Contact from '../components/admin/contact/Contact.vue';
import Email from '../components/admin/contact/Email.vue';

import Com from '../components/admin/com/Com.vue';


// --frontend---
import Home from '../components/frontend/Home.vue';
import Abot from '../components/frontend/Abot.vue';
import Serves from '../components/frontend/Serves.vue';
import Tems from '../components/frontend/Tems.vue';
import Ven from '../components/frontend/Ven.vue';
import Test from '../components/frontend/Test.vue';
import Quot from '../components/frontend/Quot.vue';
import Conct from '../components/frontend/Conct.vue';
import Blgdel from '../components/frontend/Blgdel.vue';
import Bl from '../components/frontend/Bl.vue';
import Comm from '../components/frontend/Comm.vue';
import Foot from '../components/frontend/Foot.vue';

const routes=[
    //Frontend-----
    {
        name:'home',
        path:'/',
        component:Home,
      
    },
    {
        name:'foot',
        path:'/foot',
        component:Foot,
      
    },
    //Blog------------

    {
        name:'blo',
        path:'/blo/:id',
        component:Blgdel,
     
    },
    {
        name:'bl',
        path:'/bl',
        component:Bl,
     
    },
// -----------------------
    {
        name:'abo',
        path:'/ab',
        component:Abot,
       
    },
    {
        name:'comm',
        path:'/comm',
        component:Comm,
       
    },
    {
        name:'serves',
        path:'/serves',
        component:Serves,
       
    },
    {
        name:'tem',
        path:'/tems',
        component:Tems,
       
    },

    {
        name:'ven',
        path:'/ven',
        component:Ven,
      
    },
    {
        name:'test',
        path:'/test',
        component:Test,
      
    },
    {
        name:'quo',
        path:'/quo',
        component:Quot,
      
    },
    {
        name:'conct',
        path:'/conct',
        component:Conct,
      
    },


    //dashboard-------

    //Quote----------
    {
        name:'quote',
        path:'/quote',
        component:Quote,
     
    },
    {
        name:'email',
        path:'/email',
        component:Email,
     
    },
    //contact-----
    {
        name:'Contact',
        path:'/Contact',
        component:Contact,
     
    },
    //contact-----
    {
        name:'com',
        path:'/com',
        component:Com,
     
    },
    //Blog--------

    {
        name:'blog',
        path:'/blog',
        component:Blog,
     
    },
    {
        name:'add_blog',
        path:'/adblog',
        component:Add_blog,
     
    },

    {   name:'edit_blog',
        path:'/edit_blog/:id',
        component:Edit_blog,
 
},
//-------General------
{
    name:'gen',
    path:'/gen',
    component:General,
 
},
{
    name:'add_gen',
    path:'/adgen',
    component:Add_general,
 
},

    //----Review----
    {
        name:'review',
        path:'/review',
        component:Review,
     
    },
    {
        name:'add_review',
        path:'/adreview',
        component:Add_review,
     
    },
    {
        name:'edit_review',
        path:'/edit_review/:id',
        component:Edit_review,
     
    },
    //---Vendor----
    {
        name:'vendor',
        path:'/vendor',
        component:Vendor,
     
    },
    {
        name:'add_vendor',
        path:'/advendor',
        component:Add_vendor,
     
    },
// ---------Slider-------------
{
    name:'slider',
    path:'/slider',
    component:Slider,
 
},
{
    name:'add_slider',
    path:'/adslider',
    component:Add_slider,
 
},
{
    name:'edit_slider',
    path:'/edit_slider/:id',
    component:Edit_slider,
 
},

    // ------About------
    {
        name:'about',
        path:'/about',
        component:About,
     
    },
    {
        name:'add_about',
        path:'/adabout',
        component:Add_about,
     
    },
    {
        name:'edit_about',
        path:'/edit_about/:id',
        component:Edit_about,
     
    },

    
    // ------Service------
    {
        name:'service',
        path:'/service',
        component:Service,
     
    },
    {
        name:'add_service',
        path:'/adservice',
        component:Add_service,
     
    },
    {
        name:'edit_service',
        path:'/edit_service/:id',
        component:Edit_service,
     
    },
    // ---Team----
    {
        name:'team',
        path:'/team',
        component:Team,
     
    },
    {
        name:'add_team',
        path:'/adteam',
        component:Add_team,
     
    },
    {
        name:'edit_team',
        path:'/edit_team/:id',
        component:Edit_team,
     
    },
    {
        name:'login',
        path:'/login',
        component:Login,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'dashboard',
        path:'/dashboard',
        component:Dashboard,
        meta:{
            middleware:'auth'
        }
    },
]
const router=createRouter({
    history:createWebHistory(),
    routes
})
router.beforeEach((to,from,next)=>{
    if(to.meta.middleware=='guest'){
        if(store.state.auth.auth){
            next({name:'dashboard'})
        }
        next()
    }else{
        if(store.state.auth.auth){
            next()
        }
        next({name:'login'})
    }
})
export default router;