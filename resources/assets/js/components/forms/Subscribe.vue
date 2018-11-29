<template>
    <div class="m-b-lg is-fluid">
        <div class="box section column is-one-third my-auto">
            <div class="has-text-centered my-auto">
                Want to follow me on my journey or know when my next blog is released? Subscribe below to stay in touch!
            </div>
            <div class="has-text-centered">
                <div class="column my-auto is-paddingless">
                    <label class="label has-text-white">Name</label>
                    <div class="control"
                        :class="loading ? 'is-loading' : ''">
                        <input class="input"
                            type="text"
                            name="name"
                            placeholder="Enter Name"
                            v-model="name"
                            v-validate="'required'" required>
                        <span class="help is-danger">{{ errors.first('name') }}</span>
                    </div>
                </div>
                <div class="column my-auto is-paddingless">
                    <label class="label has-text-white">Email</label>
                    <div class="control"
                        :class="loading ? 'is-loading' : ''">
                        <input class="input"
                            type="email"
                            name="email"
                            placeholder="Enter Email Address"
                            v-model="email"
                            v-validate="'required|email'" required>
                        <span class="help is-danger">{{ errors.first('email') }}</span>
                    </div>
                </div>
            </div>

            <div class="field m-t-md">
                <div class="has-text-centered">
                    <button @click="submit"
                        class="button is-link has-text-dark">Subscribe!</button>
                </div>
            </div>
        </div>

        <div class="toast has-text-centered notification"
            v-show="show"
            :class="subscribed ? 'is-success' : 'is-danger'">
            {{ notification }}
        </div>
    </div>

</template>
<script>
import { mapGetters, mapMutations, mapActions } from "vuex";

export default {
    name: "SubscribeForm",
    data() {
        return {
            displayTime: 3000,
            name: '',
            email: '',
            loading: false,
            notification: '',
            submitted: false,
            subscribed: false
        }
    },
    methods: {
    ...mapActions(["newsletterSubscribe"]),
    submit() {
        if (this.errors.first('email')
        || this.name == ''
        || this.email == '') {
            return;
        }

        let self = this;
        let name = this.name;
        let email = this.email;
        this.loading = true;

        this.newsletterSubscribe({ name, email })
            .then((status) => {
                self.submitted = true;
                self.subscribed = true;
                self.notification = "You're now subscribed to my newsletter!"
                self.name = '';
                self.email = '';
                setTimeout(() => {
                    self.submitted = false;
                    }, this.displayTime);
            })
            .catch((err) => {
                console.log(err.message);
                self.submitted = true;
                self.notification = "There was an error in your request. Try again!"
                setTimeout(() => {
                    self.submitted = false;
                    }, this.displayTime);
            });
        }
    },
    computed: {
        show() {
            return this.submitted;
        }
    }
}
</script>
<style>
.toast {
    color: #000;
    line-height: 1.5;
    margin-bottom: 1em;
    padding: 1.25em;
    top: 1em;
    transition: 0.15s ease-in-out;
    width: 325px;
    margin: 0 auto;
}
.toast.on {
    transform: translateX(-365px);
}
</style>
