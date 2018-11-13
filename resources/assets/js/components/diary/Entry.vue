<template>
  <div class="container">
    <div @click="showModal = true" class="content"
      @mouseover="hover = !hover" @mouseout="hover = !hover"
      :class="{ 'has-background-light' : hover }">
      <div class="columns has-text-centered">
        <span class="column">
          <h3>{{ title }}</h3>
        </span>
        <div class="is-divider-vertical" data-content="*"></div>
        <span class="column">
          <h3>{{ tag }}</h3>
          <h3>{{ date }}</h3>
        </span>
      </div>
    </div>

    <CardModal :visible="showModal"
      @close="showModal = false"
      :title="title" :tag="tag" :date="date">
      <h1><a :href="`/diary/${id}`">View</a></h1>
      <p v-for="line in formattedContent"
        class="mb5"
        :class="line==formattedContent[formattedContent.length-1] ? 'mb50' : ''"
        :key="line">
              {{ line }}
            </p>
    </CardModal>

  </div>

</template>
<script>
import CardModal from "./CardModal";
import EntryModal from "./EntryModal";

export default {
  props: ["title", "tag", "content", "id", "date"],
  name: "Entry",
  components: { CardModal, EntryModal },
  data() {
    return {
      formattedContent: "",
      hover: false,
      showModal: false
    };
  },
  methods: {
    splitNewLine() {
      this.formattedContent = this.content.split("\n");
    }
  },
  mounted() {
    this.splitNewLine();
  }
};
</script>

<style>
</style>