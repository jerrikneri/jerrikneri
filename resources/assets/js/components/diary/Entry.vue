<template>
  <div>
    <div @click="showModal = true" class="content">
      <div class="columns">
        <span class="column has-text-left">
          <h3>{{ title }}</h3>
        </span>
        <div class="is-divider-vertical" data-content="*"></div>
        <span class="column has-text-centered">
          <h3>{{ date }}</h3>
        </span>
      </div>
    </div>
    

    <CardModal :show="showModal"
      @close="showModal = false"
      :title="title" :tag="tag" :date="date">
      <p v-for="line in formattedContent">
              {{ line }}
            </p>
    </CardModal>

    
    <!-- <EntryModal 
      :show="showModal"
      @close="showModal = false">
      <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">{{ title }}</p>
            <button class="delete" aria-label="close"></button>
          </header>
          <section class="modal-card-body">
            <p v-for="line in formattedContent">
              {{ line }}
            </p>
          </section>
          <footer class="modal-card-foot columns has-text-centered">
            <div class="column">{{ date }}</div>
            <div class="column">{{ tag }}</div>
          </footer>
        </div>
      </div> -->




      <!-- <div class="content">
        <div class="flex-vue">
           <h1>{{ title }}</h1>
           <button class="text-center" @click="showModal = false">X</button>
        </div>
          <div class="columns">
            <div class="column">
              <h3>{{ date }}</h3>
            </div>
            <div class="column">
              <h3>{{ tag }}</h3>
            </div>
          </div>
          <p v-for="line in formattedContent">
            {{ line }}
          </p>
          <!-- <div v-text='`${content}`'>
          `${content}`
          </div> -->
      <!-- </div> -->

    <!-- </EntryModal> -->

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