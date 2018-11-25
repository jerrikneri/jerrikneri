<template>
<nav class="box navbar is-fixed-top is-light">
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
      <div class="is-size-4 hide-desktop pl5 pt10">A BLOG CODE DIARY</div>
      <a @click="showNav = !showNav" role="button" class="navbar-burger"
      aria-label="menu" aria-expanded="false" :class="{ 'is-active': showNav }">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
  </div>
  <div @click="showNav = !showNav" class="navbar-menu hide-desktop" :class="{ 'is-active': showNav }">
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
  </div>
  <div class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item">
        <div class="has-text-centered is-size-4">
          A Blog Code Diary <span class="is-size-6"><i>Read, code, and write with me.</i></span>
        </div>
      </div>
    </div>
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
      <a class="navbar-item" href="/view/resume.pdf">
        <span class="button is-link">View Resume</span>
      </a>
    </div>
  </div>
  
</nav>
</template>

<script>
export default {
  name: "Navbar",
  data() {
    return {
      showNav: false
    };
  },
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

