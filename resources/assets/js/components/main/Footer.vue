<template>
<div>
  <div class="content">
    <div class="title">JERRIKNERI</div>
    <div class="text-center">
        <span v-for="trait in traits"> {{ trait }} <strong>|</strong> </span>
      </div>
  </div>

<hr>
</div>
</template>

<script>


export default {
  name: 'Footer',
  components: { },
  data () {
    return {
      traits: [
        'Aspiring Developer',
        'Dances with Words',
        'Keyboard Warrior & Enthusiast',
        'Esports Fanatic',
        'Keto Connoisseur',
        'Iron Lifter'
      ]
    }
  }
}
</script>

<style>


</style>
