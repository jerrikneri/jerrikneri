<template>
    <div class="m-b-lg container is-fluid">
        <div class="box section">
            <div class="has-text-centered p-b-md">
                Want to follow me on my journey or know when my next blog is released? Subscribe below to stay in touch!
            </div>
            <div class="
             field">
                <label class="label has-text-white">Name</label>
                <div class="control">
                    <input class="input"
                           type="text"
                           name="name"
                           placeholder="Enter Name"
                           v-model="name"
                           v-validate="'required'">
                </div>
            </div>

            <div class="field">
                <label class="label has-text-white">Email</label>
                <div class="control">
                    <input class="input"
                           type="email"
                           name="email"
                           placeholder="Enter Email Address"
                           v-model="email"
                           v-validate="'required|email'">
                    <span>{{ errors.first('email') }}</span>
                </div>
            </div>
            <div class="field">
                <div class="has-text-centered">
                    <button @click="submit"
                            class="button is-link has-text-dark">Subscribe!</button>
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
        if (this.errors.first('email')) {
            return;
        }
        let name = this.name;
        let email = this.email;
        this.newsletterSubscribe({ name, email });
    }
    },
}
</script>
<style>
</style>
