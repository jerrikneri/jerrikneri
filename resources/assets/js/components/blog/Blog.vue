<template>
    <div class="">
        <div v-show="preview === true">
            <!-- <h3>Read with me...</h3> -->
        </div>
        <section class="container box section"
            v-show="preview == null">
            <div class="content is-large">
                <div class="has-text-centered">
                    <!-- <h1><u>BLOG</u></h1> -->
                    <div v-if="cachedPosts.length === 0">
                        <p class="title is-size-1">
                            Blog posts coming soon...
                        </p>
                    </div>
                    <div v-else>
                        <div class="has-text-right p-b-xl">
                        <i class="fa fa-filter"></i>
                        <input type="text" v-model="filter" @keyup="filterBy">
                        </div>
                        <div class="columns is-multiline">
                        <div v-for="post in posts" class="column is-one-third ">
                            <a :href="`/blog/${post.id}`">
                                    <div class="">
                                        <img :src="`/images/blog/${post.image}`"
                                            alt="Blog Picture">
                                        <hr>
                                    </div>
                                    <div class="">
                                        <p class="is-size-3">
                                            {{ post.title }}
                                        </p>
                                        <!-- <p>
                                            {{ post.content.slice(1,100) }}...
                                        </p> -->
                                        <div class="tags has-text-centered">
                                            <span class="tag is-info" v-for="tag in post.tags">
                                            #{{ tag.name }}</span>
                                        </div>
                                    </div>
                                    <!-- <div class="">
                                        <p class="title is-size-6">
                                            {{ new
                                            Date(Date.parse(post.created_at)).toLocaleDateString('en-US',
                                            dateFormat) }}
                                        </p>
                                    </div> -->
                            </a>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div v-show="preview == null">
            <Pagination v-show="cachedPosts.length > perPage" :listData=[...cachedPosts] :perPage="perPage" @update="updatePage"/>
        </div>
    </div>
</template>

<script>
import Pagination from "../UI/Pagination";
export default {
    props: ["preview"],
    name: "Blog",
    components: {Pagination},
    data() {
        return {
            dateFormat: this.$store.state.date_format,
            filter: '',
            posts: [],
            cachedPosts: [],
            perPage: 9
            }
    },
    methods: {
        filterBy() {
            this.posts = this.cachedPosts.filter(posts => {
                let doesTitleMatch = posts.title.toLowerCase().includes(this.filter.toLowerCase());
                let doesTagMatch = [];
                posts.tags.forEach( tag => {
                    doesTagMatch.push(tag.name.toLowerCase().includes(this.filter.toLowerCase()))
                });
                return doesTitleMatch || doesTagMatch.includes(true);
            });
        },
        updatePage(data) {
            this.posts = data;
        }
    },
    created() {
        this.posts = [...this.$store.state.blog_posts].slice(0, this.perPage);
        this.cachedPosts = this.$store.state.blog_posts;
    },
};
</script>

<style>
</style>