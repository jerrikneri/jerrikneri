<template>
    <div class="content code-font">

        <div v-show="preview === true"
             class="">
        </div>
        <!-- <h3>Build with me...</h3> -->
        <!-- <img class="img-center" src="../../../img/ls.jpg" height="250px"> -->
        <section v-show="preview == null"
                 class="box container has-text-centered is-large">
            <span class="title is-size-2"><u>PROJECTS</u></span>
            <div class="box section">
                <p class="title is-size-3 jerrikneri">
                    JERRIKNERI.COM <span class="fa fa-tv"></span>
                </p>
                <ul class="text-center">
                    <li>Laravel</li>
                    <li>VueJS</li>
                    <li>SASS & Bulma</li>
                </ul>
            </div>
            <div class="box section">
                <div class="columns">
                    <div class="column order-2">
                        <img class="image"
                             src="/images/project/hackintosh.jpg"
                             alt="Computer">
                    </div>
                    <div class="column order-1">
                        <p class="title is-size-3">
                            Hackintosh <span class="fa fa-server"></span>
                        </p>
                        <ul class="text-center">
                            <li>Intel i7 4790k @4.7GHz</li>
                            <li>Noctua D15</li>
                            <li>MSI Z97 SLI Krait</li>
                            <li>G.Skill TridentZ 32 GB DDR3 2666 MHz</li>
                            <li>MSI RX580 Armor</li>
                            <li>WD 500GB m.2</li>
                            <li>EVGA G2 850W Fully Modular</li>
                            <li>Fractal Design Meshify C</li>
                            <li>Fenvi T919</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box section">
                <div class="columns">
                    <div class="column">
                        <p class="title is-size-3">
                            Let's Split <span class="fa fa-keyboard-o"></span>
                        </p>
                        <ul class="text-center">
                            <li>Acrylic sandwich plate</li>
                            <li>Cherry Silent Black MX Switches</li>
                            <li>RGB LED Strips</li>
                            <li>Blank Cherry Profile PBT Caps</li>
                        </ul>
                    </div>
                    <div class="column">
                        <img class="image"
                             src="/images/project/ls.jpg"
                             alt="Let's Split Keyboard">
                    </div>
                </div>
            </div>

            <div class="box section">
                <p class="title is-size-3">
                    Coding Repos
                </p>
                <div class="columns">
                    <div class="column">
                        <a href="https://github.com/jerrikneri">github:
                            jerrikneri</a>
                    </div>
                    <div class="is-divider-vertical"
                         data-content="OR"></div>
                    <div class="column">
                        <a href="https://codepen.io/jerrikneri/">codepen:
                            jerrikneri</a>
                    </div>

                </div>
            </div>

        </section>

    </div>
</template>

<script>
export default {
  props: ["preview"],
  name: "Code",
  components: {},
  data() {
    return {
      test: "Test"
    };
  }
};
</script>

<style>
ul,
li {
    margin: 0 !important;
    list-style-type: none;
}
.striked {
    text-decoration: line-through;
}
</style>