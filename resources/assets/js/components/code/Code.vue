<template>
  <div class="">

    <div v-show="preview === true"
      class="">
    </div>
        <!-- <h3>Build with me...</h3> -->
    <!-- <img class="img-center" src="../../../img/ls.jpg" height="250px"> -->
    <section v-show="preview == null" class="box content has-text-centered is-large">
      <span class="title is-size-2"><u>PROJECTS</u></span>
      <div class="section">
        <h3>JERRIKNERI.COM</h3>
        <ul class="text-center">
          <li>Laravel</li>
          <li>VueJS</li>
          <li>SASS & Bulma</li>
        </ul>
      </div>
      <div class="section">
        <h3>Hackintosh</h3>
        <ul class="text-center">
          <li>Intel i7 8700k</li>
          <li>Noctua D15S</li>
          <li>ASUS ROG STRIX Z370-G GAMING</li>
          <li>Crucial Ballistix Sport LT 64 GB</li>
          <li>Sapphire RX 580 Pulse 8GB</li>
          <li>Samsung 850 EVO 1TB</li>
          <li>EVGA G2 850W Fully Modular</li>
          <li>Lian Li PC-A05FNA Case</li>
          <li>TP-Link Archer T9E 802.11AC AC1900</li>
        </ul>
      </div>
      
      <div class="section">
        <h3>Let's Split</h3>
        <ul class="text-center">
          <li>Acrylic sandwich plate</li>
          <li>Cherry Silent Black MX Switches</li>
          <li>RGB LED Strips</li>
          <li>Blank Cherry Profile PBT Caps</li>
        </ul>
      </div>

      <div class="box section">
        <h3>Coding Projects</h3>
        <div class="columns">
          <div class="column">
            <a href="https://github.com/jerrikneri">github: jerrikneri</a> 
          </div>
          <div class="is-divider-vertical" data-content="OR"></div>
          <div class="column">
            <a href="https://codepen.io/jaewrek/">codepen: jerrikneri</a>
          </div>
          
        </div>
      </div>
      
    </section>

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
ul,
li {
  margin: 0 !important;
  list-style-type: none;
}
</style>