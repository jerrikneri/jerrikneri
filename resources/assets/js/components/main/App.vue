<template>
  <div>
    <Navbar></Navbar>
    <hr>
    <div class="flex-container">
      <div class="flex-vue">
        <router-link class="flex-vue-item"
        to="/blog">
          <Blog class="ellipsis"></Blog>
        </router-link>
        <router-link class="flex-vue-item"
        to="/code">
          <Code class="ellipsis"></Code>
        </router-link>
        <router-link class="flex-vue-item"
        to="/diary">
        <Diary class="ellipsis"></Diary>
        </router-link>
      </div>
    </div>
    <hr>
    <router-view v-show="$route.path!=='/'"></router-view>
    
    <About></About>
  </div>
</template>

<script>
import About from './About';
import Blog from './../blog/Blog';
import Code from './../code/Code';
import Diary from './../diary/Diary';
import Navbar from './Navbar';

export default {
  name: 'Home',
  components: { About, Blog, Code, Diary, Navbar },
  data () {
    return {
      "test": router
    }
  }
  
}
</script>

<style>


</style>
