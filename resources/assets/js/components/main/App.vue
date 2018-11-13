<template>
  <div class="is-fluid">
    <Navbar></Navbar>
    <Header></Header>
    <section class="section container is-flex is-fluid">
      <img v-show="$route.path==='/'" class="has-image-centered" src="/images/hike.jpg" alt="Place holder face">
    </section>
    
    <hr>

    <SPA></SPA>

    <router-view v-show="$route.path!=='/'"></router-view>
    
    <!-- <div class="is-divider" data-content="JAN"></div> -->
    <div class="section"></div>
    <About v-show="$route.path==='/'"></About>
    <Footer></Footer>
  </div>
</template>

<script>
import About from "./About";
import Blog from "./../blog/Blog";
import Code from "./../code/Code";
import Diary from "./../diary/Diary";
import Header from "./Header";
import Footer from "./Footer";
import Navbar from "./Navbar";
import SPA from "./SPA";

export default {
  name: "Home",
  components: {
    About,
    Blog,
    Code,
    Diary,
    Header,
    Footer,
    Navbar,
    SPA
  },
  data() {
    return {};
  }
};
</script>

<style>
</style>
