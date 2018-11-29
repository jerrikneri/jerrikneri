<template>
    <div class="is-fluid">
        <Navbar></Navbar>
        <Header></Header>
        <div v-show="$route.path==='/'" class="has-text-white container has-text-centered is-size-1 p-t-xl p-b-xl">
                <p class="has-text-white title">
                    JERRIK NERI
                </p>
                <div class="hide-desktop">
                    <Resume position="center"></Resume>
                </div>
        </div>
        <section class="section container is-flex is-fluid has-text-centered">
            <img v-show="$route.path==='/'"
                class="image has-image-centered is-rounded"
                src="/images/car.jpg"
                srcset="/images/car.jpg 1024w,
                    /images/car.jpg 640w,
                    /images/car.jpg 320w"
                sizes="(min-width: 1024px) 1024px, 100vw"
                alt="Main image">

        </section>

        <SPA></SPA>

        <router-view v-show="$route.path!=='/'"></router-view>

        <div class="container has-text-left">
            <Subscribe class="m-t-lg p-b-md"></Subscribe>
        </div>

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
import Subscribe from "../forms/Subscribe";
import SPA from "./SPA";
import Resume from "./Resume";

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
        Resume,
        SPA,
        Subscribe
    },
    data() {
        return {};
    }
};
</script>

<style>
</style>
