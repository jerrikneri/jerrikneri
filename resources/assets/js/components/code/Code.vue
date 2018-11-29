<template>
    <div class="content">

        <div v-show="preview === true"
             class="">
        </div>
        <!-- <h3>Build with me...</h3> -->
        <!-- <img class="img-center" src="../../../img/ls.jpg" height="250px"> -->
        <section v-show="preview == null"
                 class="box container has-text-centered is-large">
            <span class="title is-size-2"><u>PROJECTS</u></span>
            <div class="section">
                <p class="title is-size-3">
                    JERRIKNERI.COM
                </p>
                <ul class="text-center">
                    <li>Laravel</li>
                    <li>VueJS</li>
                    <li>SASS & Bulma</li>
                    TODO:
                    	<li class="striked">Admin section to create, edit, and delete existing models.</li>
	<li class="striked">Add color</li>
	<li class="striked">Filter by tags</li>
	<li class="striked">Add downloadable resume</li>
	<li class="no strike">Track visitors (analytics? expand) / PHP log all IPs that visit and what pages visited?</li>
	<li class="no strike">SEO</li>
	<li class="no strike">Google Tag Manager? if necessary</li>
	<li class="no strike">Clean up Featured Work section in Epitome</li>
	<li class="no strike">Personalized comments? Visitor accounts…? or hook into facebook/google accounts?</li>
	<li class="no strike">Re-order Hackintosh image and text in Projects section</li>
	<li class="no strike">Finalize a view / process for Projects section (can create, edit, delete, but not currently pulling JSON from DB)</li>
	<li class="no strike">Add more projects</li>
	<li class="striked">Style subscribe component</li>
	<li class="striked">Decide where to include subscribe component on blog/ general app</li>
	<li class="no strike">add success toaster or message when ajax request for subscribe complete</li>
	<li class="no strike">Set up automation in Sendlane account</li>
	<li class="no strike">Set up templates for blog updates as campaigns in sendlane</li>
	<li class="striked">Rename to Coding Repos</li>
	<li class="no strike">Add more detail to http://Jerrikneri.com project</li>
	<li class="striked">Add pagination</li>
                </ul>
            </div>
            <hr>
            <div class="section">
                <div class="columns">
                    <div class="column order-2">
                        <img class="image"
                             src="/images/project/hackintosh.jpg"
                             alt="Computer">
                    </div>
                    <div class="column order-1">
                        <p class="title is-size-3">
                            Hackintosh
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
            <hr>
            <div class="section">
                <div class="columns">
                    <div class="column">
                        <p class="title is-size-3">
                            Let's Split
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
                        <a href="https://codepen.io/jaewrek/">codepen:
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