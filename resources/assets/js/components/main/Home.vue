<template>
  <div>
    <!-- <Navbar></Navbar> -->
    
    <Diary></Diary>
    
  </div>
</template>

<script>
import Diary from './../diary/Diary';
import Navbar from './Navbar';

export default {
  name: 'Home',
  components: { Diary, Navbar },
  data () {
    return {

    }
  }
}
</script>

<style>


</style>
