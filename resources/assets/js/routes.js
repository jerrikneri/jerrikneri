import store from './components/store';
import Home from "./components/main/App";
import Blog from "./components/blog/Blog";
import Code from "./components/code/Code";
import Diary from "./components/diary/Diary";
import Epitome from "./components/epitome/Epitome";

export default [
    {
        path: "/",
        name: "Home",
        alias: "*",
        component: Home
    },
    {
        path: "/blog",
        name: "Blog",
        component: Blog,
        meta: {
            title: 'Blog'
        },
        async beforeEnter(to, from, next) {
            if (!store.state.blog_posts.length) {
                await store.dispatch('fetchBlog');
            }
            next();
        }
    },
    {
        path: "/code",
        name: "Code",
        component: Code
    },
    {
        path: '/diary',
        name: "Diary",
        component: Diary,
        meta: {
            title: 'Diary Entries'
        },
        async beforeEnter(to, from, next) {
            if (!store.state.diary_entries.length) {
                await store.dispatch('fetchDiary');
            }
            next();
        }
    },
    {
        path: "/epitome",
        name: "Epitome",
        component: Epitome
    }
];
