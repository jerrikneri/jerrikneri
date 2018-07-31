<template>
  <div>
    <div @click="showModal = true" class="content">
      <div class="flex-vue entry-content">
        <h3>{{ title }}</h3><h3>{{ date }}</h3>
      </div>
    </div>

    <EntryModal 
      :show="showModal"
      @close="showModal = false">
      <div class="content">
        <div class="flex-vue">
           <h1>{{ title }}</h1>
           <button class="text-center" @click="showModal = false">X</button>
        </div>
          <div class="flex-vue">
            <h3>{{ date }}</h3><h3>{{ tag }}</h3>
          </div>
          <p v-for="line in formattedContent">
            {{ line }}
          </p>
          <!-- <div v-text='`${content}`'>
          `${content}`
          </div> -->
      </div>
          
    </EntryModal>

  </div>

</template>
<script>
import EntryModal from "./EntryModal";

export default {
  props: ["title", "tag", "date", "content"],
  name: "Entry",
  components: { EntryModal },
  data() {
    return {
      formattedContent: "",
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
.entry-content {
  padding: 20px;
}
</style>