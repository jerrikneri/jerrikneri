<template>
    <div class="flex-container">
      <div class="flex-vue">
        <router-link class="flex-vue-item"
        to="/blog">
          <h3>BLOG</h3>
          <Blog :preview="true" class="ellipsis"></Blog>
        </router-link>
        <router-link class="flex-vue-item"
        to="/code">
          <h3>PROJECTS</h3>
          <Code :preview="true" class="ellipsis"></Code>
        </router-link>
        <router-link class="flex-vue-item"
        to="/diary">
          <h3>JOURNAL</h3>
        <Diary :preview="true" class="ellipsis"></Diary>
        </router-link>
      </div>
    </div>
</template>

<script>
import Blog from './../blog/Blog';
import Code from './../code/Code';
import Diary from './../diary/Diary';

export default {
  name: 'SPA',
  components: { Blog, Code, Diary },
  data () {
    return {

    }
  }
  
}
</script>

<style>


</style>
