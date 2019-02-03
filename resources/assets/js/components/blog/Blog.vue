<template>
    <div class="">

        <div v-show="preview === true"></div>

        <section class="container box section"
            v-show="preview == null">
            <div class="content is-large">
                <div class="has-text-centered">
                    <div v-if="cachedPosts.length === 0">
                        <p class="title is-size-1">
                            Blog posts coming soon...
                        </p>
                    </div>
                    <div v-else>
                        <div class="has-text-right p-b-xl">
                            <i class="fa fa-filter"></i>
                            <input type="text" v-model="filter" @keyup="filterBy">
                            <button v-show="filter !== ''" @click="clearFilter">Clear</button>
                        </div>
                        <div class="has-text-center p-b-xl">
                            <p class="title">
                                Share Knowledge!
                            </p>
                        </div>
                        <div class="content p-b-md">
                            <p>
                                This is a couple of things for me. My attempt at regurgitating information with the
                                intention of retaining what’s important as well as solidifying my knowledge - or lack
                                thereof - and taking a stab at more formal writing. I love creative writing and playing
                                with the aesthetics of words, but formally writing in school was a bit of a challenge?
                                This style of writing should help me create concise, structured sentences that are to
                                the point to balance out the run-on sentences of emotions that spill out of my hands
                                and mind when I write. I’m sure my character and tone of writing - whatever that is - will
                                leak out occasionally from time to time, but hopefully after some time we’ll figure out
                                what type of presence and language I really want to convey!
                            </p>
                            <p>
                                Join me as I attempt to explain topics of interest and expand someone’s knowledge!
                            </p>
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
        clearFilter() {
            this.filter = '';
            this.filterBy();
        },
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