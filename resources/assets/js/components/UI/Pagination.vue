<template>
<div>
  <ul>
    <li v-for="p in paginatedData">
      {{p.first}} 
      {{p.last}}  
      {{p.suffix}}
    </li>
  </ul>
  <button @click="prevPage"
    :disabled="pageNumber===0">
    Previous
  </button>
  <button @click="nextPage"
    :disabled="pageNumber >= pagecount -1">
    Next
  </button>
</div>
</template>
<script>
export default {
  props: {
    listData: {
      type: Array,
      required: true
    },
    size: {
      type: Number,
      required: false,
      default: 5
    }
  },
  name: "Pagination",
  data() {
    return {
      pageNumnber: 0
    };
  },
  methods: {
    nextPage() {
      this.pageNumber++;
    },
    prevPage() {
      this.pageNumber--;
    }
  },
  computed: {
    pageCount() {
      let l = this.listData.length,
        s = this.size;
      return Math.floor(l / s);
    },
    paginatedData() {
      const start = this.pageNumber * this.size,
        end = start + this.size;

      return this.listData.slice(start, end);
    }
  }
};
</script>
<style>
</style>
