<template>
<div>
  <div class="content">
    <hr>



    
    <div class="title">JERRIKNERI</div>
    <div class="text-center">
        <span v-for="trait in traits"> {{ trait }} 
          <span v-if="trait !== traits[traits.length-1]"><strong>|</strong> </span>
        </span>
        <div class="social">
          IG | FB | YT
        </div>
          
    </div>
  </div>

<hr>
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
.social {
  padding: 5px;
}
</style>
