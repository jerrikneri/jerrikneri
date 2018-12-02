<template>
  <div class="">
    <section>
        <section v-show="preview == null"
            class="container section box">
            <div v-if="cachedEntries.length === 0"
            class="has-text-centered">
            <p class="title is-size-1">
              Journal entries coming soon...
            </p>
            </div>
            <div v-else>
              <div class="has-text-right p-b-xl">
                <i class="fa fa-filter"></i>
                <input type="text" v-model="filter" @keyup="filterBy">
              </div>
              <div class="has-text-centered p-b-lg">
                <p class="title">Dances with Words</p>
                <p class="subtitle is-3">Table of Contents:</p>
              </div>
              <div v-for="entry in currentPage">
                <Entry :title="entry.title"
                  :tags="entry.tags"
                  :content="entry.content"
                  :date="new Date(Date.parse(entry.created_at)).toLocaleDateString('en-US', dateFormat)"
                  :id="entry.id">
                </Entry>
                <span v-if="entry !== currentPage[currentPage.length-1]">
                  <hr>
                <div class="is-divider" data-content="..."></div>
                </span>
              </div>
            </div>
        </section>
    </section>
    <div v-show="preview == null">
      <Pagination v-show="cachedEntries.length > perPage" :listData=[...cachedEntries] :perPage="perPage" @update="updatePage"/>
    </div>
  </div>

</template>
<script>
import Entry from "./Entry";
import EntryForm from "./EntryForm";
import Pagination from "../UI/Pagination";

export default {
  props: ["preview"],
  name: "Diary",
  components: { EntryForm, Entry, Pagination },
  data() {
    return {
      cachedEntries: '',
      currentPage: "",
      filter: '',
      showEntry: false,
      dateFormat : this.$store.state.date_format,
      perPage: 10
    };
  },
  methods: {
    filterBy() {
      this.currentPage = this.cachedEntries.filter(entry => {
          let doesTitleMatch = entry.title.toLowerCase().includes(this.filter.toLowerCase());
          let doesTagMatch = [];
          entry.tags.forEach( tag => {
            doesTagMatch.push(tag.name.toLowerCase().includes(this.filter.toLowerCase()))
          });
          return doesTitleMatch || doesTagMatch.includes(true);
      });
    },
    updatePage(data) {
      console.log(data);
      this.currentPage = data;
    }
  },
  created() {
    this.currentPage = [...this.$store.getters.diary].slice(0, this.perPage)
    this.cachedEntries = this.$store.getters.diary;
  },
};
</script>

<style>
</style>