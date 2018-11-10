<template>
  <transition
    :name="transition"
    mode="in-out"
    appear
    :appear-active-class="enterClass"
    :enter-active-class="enterClass"
    :leave-active-class="leaveClass"
    @beforeEnter="beforeEnter"
    @afterEnter="afterEnter"
    @beforeLeave="beforeLeave"
    @afterLeave="afterLeave"
  >
    <div :class="classes" v-show="visible">
      <div class="modal-background" @click="$emit('close')"></div>
      <div class="modal-card has-text-centered">
        <header class="modal-card-head">
          <button class="delete is-pulled-right" @click="$emit('close')"></button>
          <p class="modal-card-title">{{ title }}</p>

        </header>
        <section class="modal-card-body">
          <slot></slot>
        </section>
        <footer class="modal-card-foot columns has-text-centered">
            <!-- <div class="column is-size-4">{{ date }}</div> -->
            <div class="column is-size-4">{{ tag }}</div>
          </footer>
      </div>
    </div>
  </transition>
</template>

<script>
import BaseModal from "./BaseModal";

export default {
  mixins: [BaseModal],

  props: {
    title: {
      type: String
    },
    // date: {
    //   type: String
    // },
    tag: {
      type: String
    },
    visible: {
      type: Boolean,
      default: false
    }
  },

  computed: {
    classes() {
      return ["modal", "animated", "is-active"];
    }
  },

  methods: {}
};
</script>
<style>
.modal-card-head {
  display: block;
}
</style>
