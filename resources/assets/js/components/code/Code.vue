<template>
  <div class="content">

    <div v-show="preview === true"
      class="preview-margin">
        <!-- <h3>Build with me...</h3> -->
    </div>
    <!-- <img class="img-center" src="../../../img/ls.jpg" height="250px"> -->
    <div v-show="preview == null">
      <h1><u>PROJECTS</u></h1>
      <div  class="writing m-b-md">
        <h3>Let's Split</h3>
        <ul class="text-center">
          <li>Acrylic sandwich plate</li>
          <li>Cherry Silent Black MX Switches</li>
          <li>RGB LED Strips</li>
          <li>Blank Cherry Profile PBT Caps</li>
        </ul>
      </div>

      <h3>Coding Projects</h3>
      <div class="flex-vue content-projects links">
        <a href="https://github.com/jerrikneri">github: jerrikneri</a>
        
        <a href="https://codepen.io/jaewrek/">codepen: jerrikneri</a>
      </div>
    </div>

  </div>  
</template>

<script>
export default {
  props: ["preview"],
  name: "Code",
  components: {},
  data() {
    return {
      test: "Test"
    };
  }
};
</script>

<style>
.preview-margin {
  margin-bottom: 300px;
}
</style>