<template>
  <div>
    <Navbar></Navbar>
    <Header></Header>
    <img class="" src="http://placehold.it/350x350" alt="Place holder face">
    <hr>
    <SPA></SPA>

    <router-view v-show="$route.path!=='/'"></router-view>
    
    <!-- <About></About> -->
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
