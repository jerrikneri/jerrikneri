<template>
    <div class="">
        <div v-show="preview === true">
            <!-- <h3>Write with me...</h3> -->
        </div>
        <section v-show="preview == null"
                 class="box section">

            <div v-for="entry in entries">
                <Entry :title="entry.title"
                       :tag="entry.tag"
                       :content="entry.content"
                       :date="new Date(Date.parse(entry.created_at)).toLocaleDateString('en-US', dateFormat)"
                       :id="entry.id">
                </Entry>
                <span v-if="entry !== entries[entries.length-1]">
            <hr>
            <div class="is-divider" data-content="..."></div>
          </span>
            </div>

            <!-- <Pagination :listData=entries></Pagination> -->
        </section>
    </div>

</template>
<script>
import Entry from "./Entry";
import EntryForm from "./EntryForm";
import Pagination from "../UI/Pagination";
import { mapGetters, mapMutations, mapActions } from "vuex";

export default {
  props: ["preview"],
  name: "Diary",
  components: { EntryForm, Entry, Pagination },
  data() {
    return {
      entries: "",
      loading: true,
      showEntry: false,
      dateFormat : { year: 'numeric', month: 'long', day: 'numeric' }
    };
  },
  methods: {
    ...mapActions(["getDiaryEntries"]),
  },
  mounted() {
    let self = this;
    this.getDiaryEntries().then(() => {
      self.entries = self.$store.state.diary_entries;
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