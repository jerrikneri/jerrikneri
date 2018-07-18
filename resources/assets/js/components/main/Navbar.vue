<template>
<div>
  <div class="navbar flex-center"> 
    <div class="links">
      <router-link class=""
      to="/">
      <span>Home</span>
    </router-link>
    <router-link class=""
      to="/blog">
      <span>Blog</span>
    </router-link>
    <router-link class=""
      to="/code">
      <span>Code</span>
    </router-link>
    <router-link class=""
      to="/diary">
      <span>Diary</span>
    </router-link>
    <router-link class=""
      to="/epitome">
      <span>Epitome</span>
    </router-link>
    </div>
  </div>
  <div class="content head-title">
      <div class="title m-b-md">
          A Blog Code Diary
      </div>
      <div>
          <h3><i>Read, code, and write with me.</i></h3>
      </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'Navbar',
}
</script>

<style>

</style>

