<template>
  <form class="content"
    @submit.prevent="submit">
    <p>Title:</p>
    <input type="text"
        id="title"
        class="form-control"
        v-model="title"
        name="title"
        placeholder="Post Title">
    <p>Date:</p>
    <input type="text"
        id="date"
        class="form-control"
        v-model="date"
        name="date"
        placeholder="Date">
    <p>Tag:</p>
    <input type="text"
        id="tag"
        class="form-control"
        v-model="tag"
        name="tag"
        placeholder="Tag">

    <p>Dances with words:</p>
    <textarea name="content" 
        class="form-control-content"
        v-model="content"
        rows="20"></textarea>
            <button type="submit"
                class="">Submit Entry</button>
  </form> 

</template>
<script>
import { mapActions } from "vuex";

export default {
  name: "EntryForm",
  components: {},
  data() {
    return {
      title: "",
      date: "",
      tag: "",
      content: ""
    };
  },
  methods: {
    ...mapActions(["submitEntry"]),
    submit() {
      this.submitEntry({
        title: this.title,
        date: this.date,
        tag: this.tag,
        content: this.content
      });
    }
  }
};
</script>

<style>
</style>