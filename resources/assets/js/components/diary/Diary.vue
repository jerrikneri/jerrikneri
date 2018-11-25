<template>
    <div class="">
        <div v-show="preview === true">
            <!-- <h3>Write with me...</h3> -->
        </div>
        <section v-show="preview == null"
            class="container section">
            <div v-if="entries.length === 0">
                Journal entries coming soon...
            </div>
            <div v-else>
              <div class="has-text-right p-b-md">
                Filter:
                <input type="text" v-model="filter" @keyup.enter="filterBy">
              </div>
              <div class="has-text-centered p-b-lg">
                <p class="title">Dance with Words</p>
              </div>
              <div v-for="entry in entries">
                <Entry :title="entry.title"
                  :tags="entry.tags"
                  :content="entry.content"
                  :date="new Date(Date.parse(entry.created_at)).toLocaleDateString('en-US', dateFormat)"
                  :id="entry.id">
                </Entry>
                <span v-if="entry !== entries[entries.length-1]">
                  <hr>
                <div class="is-divider" data-content="..."></div>
                </span>
              </div>
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
      filter: '',
      loading: true,
      showEntry: false,
      dateFormat : this.$store.state.date_format
    };
  },
  methods: {
    ...mapActions(["getDiaryEntries"]),
    filterBy() {
      this.entries = this.entries.filter(entry => {
        return entry.title.toLowerCase().includes(this.filter.toLowerCase()) ||
          entry.tags.includes(this.filter.toLowerCase())
      });
    }
  },
  mounted() {
  },
  created() {
    let self = this;
    this.getDiaryEntries().then(() => {
      self.entries = self.$store.state.diary_entries;
      self.loading = false;
    });
  },
  computed: {
    entriesLoaded() {
      return !this.loading;
    }
  }
};
</script>

<style>
</style>