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
    <div :class="classes" v-show="show">
      <div class="modal-background" @click="$emit('close')"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">{{ title }}</p>
          <button class="delete" @click="$emit('close')"></button>
        </header>
        <section class="modal-card-body">
          <slot></slot>
        </section>
        <footer class="modal-card-foot columns has-text-centered">
            <div class="column">{{ date }}</div>
            <div class="column">{{ tag }}</div>
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
    date: {
      type: String
    },
    tag: {
      type: String
    },
    show: { type: Boolean, default: false }
  },

  computed: {
    classes() {
      return ["modal", "animated", "is-active"];
    }
  },

  methods: {}
};
</script>
