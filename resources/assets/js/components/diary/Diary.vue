<template>
  <div class="content">
    <h1>Write with me...</h1>
    <!-- <EntryForm></EntryForm> -->

    <!-- <div v-if="preview === true && !loading">
      <div class="flex">
        <h5>{{ entries[0].date }}</h5>
        <h5>{{ entries[0].tag }}</h5>
      </div>
      <div class="writing m-b-md">   
          <h6>{{ entries[0].title }}</h6>
          <p class="preview">{{ entries[0].content }}</p>
      </div>
    </div> -->

    <section v-for="entry in entries">
      <div class="flex">
        <h2>{{ entry.date }}</h2>
        <h2>{{ entry.tag }}</h2>
      </div>
      <div class="writing m-b-md">
        
        <h3>{{ entry.title }}</h3>
        <p>{{ entry.content }}</p>
      </div>
      <hr>
    </section>
  </div> 

</template>
<script>
import EntryForm from './EntryForm';
import { mapGetters, mapMutations, mapActions } from "vuex";

  export default {
  props: [ 'preview' ],
  name: 'Diary',
  components: { EntryForm },
  data () {
    return {
      entries: '',
      loading: true,
  }  
  },
  methods: {
    ...mapActions([
        'getEntries',
        'submitEntry',
      ]),
  },
  mounted() {
    let self = this;
    this.getEntries()
    .then(() => {
      self.entries = self.$store.state.entries; 
      self.loading = false;
      });
    console.log('mount', this.entries)
  },
}
</script>

<style>

</style>