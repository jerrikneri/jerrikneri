<template>
    <div class="flex-container">
      <div class="spa">
        <div class="flex-vue">
          <router-link class="flex-vue-item-three"
          to="/blog">
            <h3>BLOG</h3>
            <Blog :preview="true"></Blog>
          </router-link>
          <router-link class="flex-vue-item-three"
          to="/code">
            <h3>PROJECTS</h3>
            <Code :preview="true"></Code>
          </router-link>
          <router-link class="flex-vue-item-three"
          to="/diary">
            <h3>JOURNAL</h3>
            <Diary :preview="true"></Diary>
          </router-link>
        </div>
      </div>
    </div>
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
@media only screen and (max-device-width: 800px) and (orientation: portrait) {
  .spa {
    display: block;
  }
}
</style>
