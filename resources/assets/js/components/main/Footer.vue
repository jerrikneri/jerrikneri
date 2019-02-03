<template>
    <div class="m-t-xl footer footer-font has-text-centered">

        <figure class="has-image-centered image is-128x128">
            <img class="is-rounded"
                    src="/images/epitome/me.jpg"
                    alt="Place holder face">
        </figure>
        <div class="title">JERRIKNERI</div>
        <div>
            <span v-for="trait in traits"> {{ trait }}
                <span v-if="trait !== traits[traits.length-1]">
                    <strong>|</strong>
                </span>
            </span>
        </div>

    </div>
</template>

<script>

export default {
  name: "Footer",
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
