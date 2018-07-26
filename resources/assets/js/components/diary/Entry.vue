<template>
  <div>
    <div @click="showModal = true" class="content">
      <div class="flex-vue">
        <h3>{{ title }}</h3><h3>{{ date }}</h3>
      </div>
    </div>

    <EntryModal 
      :show="showModal"
      @close="showModal = false">
      <div class="content">
        <div class="flex-vue">
           <h1>{{ title }}</h1>
           <span @click="showModal = false">X</span>
        </div>
          <div class="flex-vue">
            <h3>{{ date }}</h3><h3>{{ tag }}</h3>
          </div>
          <div>
          <p>{{ content }}</p>
          </div>
      </div>
          
    </EntryModal>

  </div>

</template>
<script>
import EntryModal from './EntryModal';

  export default {
  props: ['title', 'tag', 'date', 'content'],
  name: 'Entry',
  components: { EntryModal },
  data () {
    return {
      showModal: false
    }  
  },
  methods: {
    
    
  }
}
</script>

<style>

</style>