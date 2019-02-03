<template>
  <div @click="$emit('update', paginatedData)" class="has-text-centered">

    <div class="container section">
      <button @click="pageChange(0)" class="button is-link is-active is-outlined"
        :disabled="pageNumber===0">
        First
      </button>

      <button @click="prevPage" class="button is-link is-active is-outlined"
        :disabled="pageNumber===0">
        <span class="fa fa-arrow-left"></span>
      </button>
      <button v-show="pageNumber" @click="pageChange(pageNumber-1)" class="button is-link is-outlined">
        {{ pageNumber }}
      </button>
      <button @click="pageChange(pageNumber)" class="button is-link is-active is-static">
        {{ pageNumber+1 }}
      </button>
      <button @click="pageChange(pageNumber+1)" class="button is-link is-outlined" v-show="pageNumber+1 <= pageCount">
        {{ pageNumber+2 }}
      </button>
      <button @click="nextPage" class="button is-link is-active is-outlined"
        :disabled="pageNumber >= pageCount">
        <span class="fa fa-arrow-right"></span>
      </button>

      <button @click="pageChange(pageCount)" class="button is-link is-active is-outlined"
        :disabled="pageNumber >= pageCount">
        Last
      </button>
    </div>

  </div>
</template>
<script>
export default {
  props: {
    listData: {
      required: true
    },
    perPage: {
      type: Number,
      required: false,
      default: 5
    }
  },
  name: "Pagination",
  data() {
    return {
      pageNumber: 0
    };
  },
  methods: {
    nextPage() {
      this.pageNumber++;
    },
    prevPage() {
      this.pageNumber--;
    },
    pageChange(page) {
      this.pageNumber = page;
    }
  },
  computed: {
    pageCount() {
      let l = this.listData.length,
        s = this.perPage;
      return Math.floor(l / s) - 1;
    },
    paginatedData() {
      let start = parseInt(this.pageNumber+1) * this.perPage,
        end = parseInt(start) + parseInt(this.perPage);
        console.log(start, end);
        console.log('currentpage', [...this.listData].slice(start, end))
      return [...this.listData].slice(start, end);
    }
  }
};
</script>

<style>
</style>
