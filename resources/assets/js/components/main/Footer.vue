<template>
<div class="footer has-text-centered">
  <div class="">
    <hr>



    
    <div class="is-size-1">JERRIKNERI</div>
    <div class="">
        <span v-for="trait in traits"> {{ trait }} 
          <span v-if="trait !== traits[traits.length-1]"><strong>|</strong> </span>
        </span>
        <div class="">
          IG | FB | YT
        </div>
          
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: "Footer",
  components: {},
  data() {
    return {
      traits: [
        "Aspiring Developer",
        "Dances with Words",
        "Keyboard Warrior & Enthusiast",
        "Esports Fanatic",
        "Keto Connoisseur",
        "Iron Lifter"
      ]
    };
  }
};
</script>

<style>
</style>
