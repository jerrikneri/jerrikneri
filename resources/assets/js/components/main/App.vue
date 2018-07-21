<template>
  <div>
    <Navbar></Navbar>
    <SPA></SPA>
    <hr>
    <router-view v-show="$route.path!=='/'"></router-view>
    <hr>
    <About></About>
    <Footer></Footer>
  </div>
</template>

<script>
import About from './About';
import Blog from './../blog/Blog';
import Code from './../code/Code';
import Diary from './../diary/Diary';
import Footer from './Footer';
import Navbar from './Navbar';
import SPA from './SPA';

export default {
  name: 'Home',
  components: { 
    About, Blog, Code, 
    Diary, Footer, Navbar, 
    SPA 
    },
  data () {
    return {
      
    }
  }
  
}
</script>

<style>


</style>
