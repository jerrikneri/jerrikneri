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

import moment from 'moment';
Vue.use(moment);

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

import routes from './routes.js';

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
        if (to.path === '/') {
            return { x: 0, y: 0 };
        }
        return { x: 0, y: 150 };
    },
    routes: routes
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
