<template>
    <div class="box footer has-text-centered has-background-light">
        <div class="">
            <hr>
            <div class="is-size-1">JERRIKNERI</div>
            <div class="">
                <span v-for="trait in traits"> {{ trait }} 
          <span v-if="trait !== traits[traits.length-1]"><strong>|</strong> </span>
                </span>
                <div class="">
                    IG <strong>|</strong> FB <strong>|</strong> YT
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
