<template>
    <div>
        <div v-show="preview === true">
            <!-- <h3>Read with me...</h3> -->
        </div>
        <section class="container section box"
            v-show="preview == null">
            <div class="content is-large">
                <div class="has-text-centered">
                    <h1><u>BLOG</u></h1>
                    <div v-if="posts.length === 0">
                        Blog posts coming soon...
                    </div>
                    <div class="has-text-right p-b-md">
                        Filter:
                        <input type="text" v-model="filter" @keyup="filterBy">
                    </div>
                    <div v-for="post in posts">
                        <a :href="`/blog/${post.id}`">
                            <div class="columns">
                                <div class="column">
                                    <img :src="`/images/blog/${post.image}`"
                                        alt="Blog Picture">
                                </div>
                                <div class="column">
                                    <h3>{{ post.title }}</h3>
                                </div>
                                <div class="column">
                                    <h5><span v-for="tag in post.tags">
                                        #{{ tag.name }}</span></h5>
                                    <h3>{{ new
                                        Date(Date.parse(post.created_at)).toLocaleDateString('en-US',
                                        dateFormat) }}</h3>
                                </div>
                            </div>
                            <hr>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
export default {
    props: ["preview"],
    name: "Blog",
    components: {},
    data() {
        return {
            dateFormat: this.$store.state.date_format,
            filter: '',
            posts: [],
            cachedPosts: [],
            }
    },
methods: {
    ...mapActions(["getBlogPosts"]),
    filterBy() {
        this.posts = this.cachedPosts.filter(posts => {
            let doesTitleMatch = posts.title.toLowerCase().includes(this.filter.toLowerCase());
            let doesTagMatch = [];
            posts.tags.forEach( tag => {
                doesTagMatch.push(tag.name.toLowerCase().includes(this.filter.toLowerCase()))
            });
            return doesTitleMatch || doesTagMatch.includes(true);
        });
    }
    },
    mounted() {
        let self = this;
        this.getBlogPosts().then(() => {
        self.posts = self.$store.state.blog_posts;
        self.loading = false;
        self.cachedPosts = self.posts;
        });
        
    },
};
</script>

<style>
</style>