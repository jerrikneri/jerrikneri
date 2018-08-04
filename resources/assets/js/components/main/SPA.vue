<template>
    <section class="section">
      <div class="columns">

        <div class="column has-text-centered is-size-4">
          <router-link class="box column" to="/blog">
            BLOG
          <Blog :preview="true"></Blog>
        </router-link>
        </div>
        
        <div class="column has-text-centered is-size-4">
          <router-link class="box column" to="/code">
          PROJECTS
          <Code :preview="true"></Code>
        </router-link></div>
        
        <div class="column has-text-centered is-size-4">
          <router-link class="box column" to="/diary">
          JOURNAL
          <Diary :preview="true"></Diary>
        </router-link></div>
        
      </div>
    </section>
</template>

<script>
import Blog from "./../blog/Blog";
import Code from "./../code/Code";
import Diary from "./../diary/Diary";

export default {
  name: "SPA",
  components: { Blog, Code, Diary },
  data() {
    return {};
  }
};
</script>

<style>
.box {
  margin-bottom: 0 !important;
}
</style>
