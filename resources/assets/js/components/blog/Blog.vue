<template>
<div class="content">
  <div v-show="preview === true">
    <p class="preview">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor magna eget est lorem. Mi tempus imperdiet nulla malesuada. Nam aliquam sem et tortor consequat id porta nibh. At quis risus sed vulputate odio ut enim. Sem viverra aliquet eget sit amet tellus cras. Metus vulputate eu scelerisque felis. Vulputate odio ut enim blandit volutpat maecenas. Scelerisque viverra mauris in aliquam sem fringilla ut. Bibendum ut tristique et egestas quis ipsum suspendisse. Vitae turpis massa sed elementum tempus egestas sed sed risus. Donec enim diam vulputate ut pharetra sit amet aliquam. Nunc id cursus metus aliquam. Iaculis at erat pellentesque adipiscing commodo.
    </p>
  </div>
  <div>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor magna eget est lorem. Mi tempus imperdiet nulla malesuada. Nam aliquam sem et tortor consequat id porta nibh. At quis risus sed vulputate odio ut enim. Sem viverra aliquet eget sit amet tellus cras. Metus vulputate eu scelerisque felis. Vulputate odio ut enim blandit volutpat maecenas. Scelerisque viverra mauris in aliquam sem fringilla ut. Bibendum ut tristique et egestas quis ipsum suspendisse. Vitae turpis massa sed elementum tempus egestas sed sed risus. Donec enim diam vulputate ut pharetra sit amet aliquam. Nunc id cursus metus aliquam. Iaculis at erat pellentesque adipiscing commodo.
    </p>
  </div>

</div>
</template>

<script>
export default {
  props: ["preview"],
  name: "Blog",
  components: {},
  data() {
    return {
      test: "Test"
    };
  }
};
</script>

<style>
</style>