import Vue from "vue";

import Vuex from "vuex";
import state from "./components/store/state";
import getters from "./components/store/getters";
import mutations from "./components/store/mutations";
import actions from "./components/store/actions";
Vue.use(Vuex);

import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./components/main/App";
import Blog from "./components/blog/Blog";
import Code from "./components/code/Code";
import Diary from "./components/diary/Diary";
import Epitome from "./components/epitome/Epitome";

// import moment from 'moment';
// Vue.use(moment);

const router = new VueRouter({
    mode: "history",
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        }
        if (to.hash) {
            return {
                selector: to.hash
            };
        }
        return { x: 0, y: 1250 };
    },
    routes: [
        {
            path: "/",
            name: "Home",
            alias: "*",
            component: Home
        },
        {
            path: "/blog",
            name: "Blog",
            component: Blog
        },
        {
            path: "/code",
            name: "Code",
            component: Code
        },
        {
            path: "/diary",
            name: "Diary",
            component: Diary
        },
        {
            path: "/epitome",
            name: "Epitome",
            component: Epitome
        }
    ]
});

const store = new Vuex.Store({
    state,
    getters,
    mutations,
    actions
});

const app = new Vue({
    el: "#app",
    components: { Home, Blog, Code, Diary, Epitome },
    router,
    store
});
