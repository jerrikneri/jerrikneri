<template>
    <div class="box footer has-text-centered">
        <div class="">
            <figure class="has-image-centered image is-128x128">
                <img class="is-rounded"
                     src="/images/epitome/me.jpg"
                     alt="Place holder face">
            </figure>
            <div class="title">JERRIKNERI</div>
            <div class="">
                <span v-for="trait in traits"> {{ trait }}
                    <span v-if="trait !== traits[traits.length-1]">
                        <strong>|</strong>
                    </span>
                </span>
                <!-- <div class="">
                    IG <strong>|</strong> FB <strong>|</strong> YT
                </div> -->
            </div>
            <!-- <div class="container has-text-left">
                <Subscribe class="m-t-lg p-l-xxl p-r-xxl"></Subscribe>
            </div> -->
        </div>
    </div>
</template>

<script>
import Subscribe from "../forms/Subscribe";
export default {
  name: "Footer",
  components: {
      Subscribe
  },
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
