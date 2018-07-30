<template>
  <div class="content">
    <div v-show="preview === true">
      <!-- <h3>Write with me...</h3> -->
    </div> 
    

    <!-- Find a way to preview the latest entries. Logging out
    console to see what type and format entries is from DB. -->
    <!-- <div v-show="preview === true && entriesLoaded">
      <div class="flex">
        <h5>{{ entries[0].date }}</h5>
        <h5>{{ entries[0].tag }}</h5>
      </div>
      <div class="writing m-b-md">   
          <h6>{{ entries[0].title }}</h6>
          <p class="preview">{{ entries[0].content }}</p>
      </div>
    </div> -->

    <!-- <EntryForm></EntryForm> -->

    <div v-for="entry in entries">
      <Entry
        :title="entry.title"
        :date="entry.date"
        :tag="entry.tag"
        :content="entry.content">
        </Entry>
    </div>

    <!-- <section v-for="entry in entries">
      <div class="flex">
        <h2>{{ entry.date }}</h2>
        <h2>{{ entry.tag }}</h2>
      </div>
      <div class="writing m-b-md">
        
        <h3>{{ entry.title }}</h3>
        <p>{{ entry.content }}</p>
      </div>
      <hr>
    </section> -->
  </div> 

</template>
<script>
import EntryModal from "./EntryModal";
import Entry from "./Entry";
import EntryForm from "./EntryForm";
import { mapGetters, mapMutations, mapActions } from "vuex";

export default {
  props: ["preview"],
  name: "Diary",
  components: { EntryForm, EntryModal, Entry },
  data() {
    return {
      entries: "",
      loading: true,
      showEntry: false
    };
  },
  methods: {
    ...mapActions(["getEntries", "submitEntry"])
  },
  mounted() {
    let self = this;
    this.getEntries().then(() => {
      self.entries = self.$store.state.entries;
      // self.entries = self.addShowProperty(self.$store.state.entries);
      self.loading = false;
    });
  },
  created() {},
  computed: {
    entriesLoaded() {
      return !this.loading;
    }
  }
};
</script>

<style>
</style>