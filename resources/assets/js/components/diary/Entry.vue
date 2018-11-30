<template>
  <div class="container">
    <div @click="showModal = true" class="content"
      @mouseover="hover = !hover" @mouseout="hover = !hover"
      :class="{ 'lighten' : hover }">
      <div class="columns has-text-centered">
        <div class="column">
          <p class="subtitle ">
            {{ title }}
          </p>
        </div>
        <div class="is-divider-vertical" data-content="*"></div>
        <div class="column">
          <p class="subtitle tags">
            <span class="tag is-dark" v-for="tag in tags">
            #{{ tag.name }}</span>
          </p>
          <p class="subtitle">
            {{ date }}
          </p>
        </div>
      </div>
    </div>

    <CardModal :visible="showModal"
      @close="showModal = false"
      :title="title" :tags="tags" :date="date">
      <!-- <h1><a :href="`/diary/${id}`">View</a></h1> -->
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
  props: ["title", "tags", "content", "id", "date"],
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
.lighten {
  opacity: .5;
}
</style>