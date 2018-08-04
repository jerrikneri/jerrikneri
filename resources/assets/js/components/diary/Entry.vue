<template>
  <div>
    <div @click="showModal = true" class="content"
      @mouseover="hover = !hover" @mouseout="hover = !hover"
      :class="{ 'has-background-light' : hover }">
      <div class="columns has-text-centered">
        <span class="column">
          <h3>{{ title }}</h3>
        </span>
        <div class="is-divider-vertical" data-content="*"></div>
        <span class="column">
          <h3>{{ date }} {{ tag }}</h3>
        </span>
      </div>
    </div>
    
    <CardModal :show="showModal"
      @close="showModal = false"
      :title="title" :tag="tag" :date="date">
      <p v-for="line in formattedContent"
        class="mb5"
        :class="line==formattedContent[formattedContent.length-1] ? 'mb50' : ''">
              {{ line }}
            </p>
    </CardModal>

  </div>

</template>
<script>
import CardModal from "./CardModal";
import EntryModal from "./EntryModal";

export default {
  props: ["title", "tag", "date", "content"],
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