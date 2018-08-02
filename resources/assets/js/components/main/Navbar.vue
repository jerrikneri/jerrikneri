<template>
<nav class="navbar is-fixed-top is-light">
  <div class="navbar-item has-dropdown is-hoverable navbar__dropdown--hide">
    <router-link class="navbar-item"
      to="/">
      <span class="navbar-link">JERRIKNERI</span>
    </router-link>
    <div class="navbar-dropdown">
      <router-link class="navbar-item"
      to="/blog">
        <span>Blog</span>
      </router-link>
      <router-link class="navbar-item"
        to="/code">
        <span>Code</span>
      </router-link>
      <router-link class="navbar-item"
        to="/diary">
        <span class="">Diary</span>  
      </router-link>
      <router-link class="navbar-item"
        to="/epitome">
        <span>Epitome</span>
      </router-link>
    </div>
  </div>
  <div class="navbar-brand">
      <a @click="toggleBurger" role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true">Test</span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  <div class="navbar-menu">
    <div class="navbar-end">
      <router-link class="navbar-item"
        to="/blog">
        <span>Blog</span>
      </router-link>
      <router-link class="navbar-item"
        to="/code">
        <span>Code</span>
      </router-link>
      <router-link class="navbar-item"
        to="/diary">
        <span class="">Diary</span>  
      </router-link>
      <router-link class="navbar-item"
        to="/epitome">
        <span>Epitome</span>
      </router-link>
    </div>
  </div>
  
</nav>
</template>

<script>
export default {
  name: "Navbar",

  methods: {
    toggleBurger(e) {
      e.target.classList.toggle("is-active");
      console.log("clicked", e);
    }
  }
};
</script>

<style>
</style>

