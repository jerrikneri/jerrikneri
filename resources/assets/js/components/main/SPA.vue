<template>
    <section class="section">
      <div class="columns">
        <router-link class="box column has-text-centered is-size-4"
        to="/blog">
          <h3>BLOG</h3>
          <Blog :preview="true"></Blog>
        </router-link>
        <router-link class="box column has-text-centered is-size-4"
        to="/code">
          <h3>PROJECTS</h3>
          <Code :preview="true"></Code>
        </router-link>
        <router-link class="box column has-text-centered is-size-4"
        to="/diary">
          <h3>JOURNAL</h3>
          <Diary :preview="true"></Diary>
        </router-link>
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
