<template>
    <div class="is-fluid">
        <Navbar></Navbar>
        <Header></Header>
        <section class="section container is-flex is-fluid has-text-centered">
            <img v-show="$route.path==='/'"
                class="image has-image-centered is-rounded"
                src="/images/sunset.jpg"
                srcset="/images/sunset.jpg 1024w,
                    /images/sunset.jpg 640w,
                    /images/sunset.jpg 320w"
                sizes="(min-width: 1024px) 1024px, 100vw"
                alt="Main image">
            <div class="has-text-white container has-text-centered is-size-1"> 
                <p class="has-text-white title">
                    JERRIK NERI
                </p>
                 </div>
            
        </section>


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
