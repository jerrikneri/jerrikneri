<template>
  <div class="content">
    <div v-show="preview === true">
      <!-- <h3>Write with me...</h3> -->
    </div> 

    <!-- <EntryForm></EntryForm> -->
<h1 v-show="preview == null"><u>DIARY</u></h1>
    <div v-for="entry in entries">
      <Entry
        :title="entry.title"
        :date="entry.date"
        :tag="entry.tag"
        :content="entry.content">
        </Entry>
        <span v-if="entry !== entries[entries.length-1]">
          <hr>
        </span>
    </div>

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