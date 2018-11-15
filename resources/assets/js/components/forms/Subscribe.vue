<template>
    <div class="m-b-lg container">
        <div class="box section">
            <div class="
             field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input"
                           type="text"
                           placeholder="Enter Name"
                           v-model="name">
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger"
                           type="email"
                           placeholder="Enter Email Address"
                           v-model="email">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
                </div>
            </div>
            <div class="field">
                <div class="field is-grouped">
                    <div class="control">
                        <button @click="submit"
                                class="button is-link">Subscribe!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
export default {
    name: "SubscribeForm",
    data() {
        return {
            name: '',
            email: ''
        }
    },
    methods: {
    ...mapActions(["newsletterSubscribe"]),
    submit() {
        let name = this.name;
        let email = this.email;
        this.newsletterSubscribe({ name, email });
    }
    },
}
</script>
<style>
</style>
