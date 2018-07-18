import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './components/main/Home';
import Blog from './components/blog/Blog';
import Code from './components/code/Code';
import Diary from './components/diary/Diary';
import Epitome from './components/epitome/Epitome';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/blog',
            name: 'Blog',
            component: Blog
        },
        {
            path: '/code',
            name: 'Code',
            component: Code
        },
        {
            path: '/diary',
            name: 'Diary',
            component: Diary
        },
        {
            path: '/epitome',
            name: 'Epitome',
            component: Epitome
        }
        
    ],
});

new Vue({
    el: '#app',
    components: { Home, Blog, Code, Diary, Epitome },
    router,
});