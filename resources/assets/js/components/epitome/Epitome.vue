<template>
	<div class="box container section">
		<div class="">
			<header class="section">
				<div class="title">Jerrik Neri</div>
				<div class="subtitle">Self taught Front End Engineer</div>
				<Resume></Resume>
			</header>
			<hr>
			<div class="section">
				I am a self-taught Front End Engineer who has been diving head first
				into all of the readily available resources to acquire the tools and
				skillsets required in this industry. Over the past couple of years, I have
				taken Computer Programming / Engineering classes at UCSD, Udacity, and Free
				Code Camp to absorb as many skills and perspectives as I can, to
				effectively utilize them as I begin to step foot into a Front End Web
				Development career.
				From a young age, I have always been highly passionate about computers and
				technology, and I hope to bring into this industry the same passion,
				dedication, and discipline that I have learned in traversing the path to
				becoming​ a better programmer.
			</div>
			<div class="section is-flex">
				<img class="has-image-centered image"
					src="/images/epitome/motorcycle.jpg"
					srcset="/images/epitome/motorcycle.jpg 1024w,
						/images/epitome/motorcycle.jpg 640w,
						/images/epitome/motorcycle.jpg 320w"
					sizes="(min-width: 1024px) 1024px, 100vw"
				     alt="Main middle picture">
			</div>

			<div class="title has-text-centered">Featured Work</div>

			<section class="columns has-text-centered is-multiline">
				<div class="column">
					<a href="https://github.com/jerrikneri/multi-user-blog">
						<section>
							<img class=""
							     width="300"
							     src="/images/epitome/blog.jpg"
							     alt="Blog Project Picture">
							<button class="button">
								<h3>Multi User Blog</h3>
							</button>
						</section>
					</a>
				</div>
				<div class="column">
					<a href="https://codepen.io/jaewrek/full/PKWQQV/">
						<section>
							<img class=""
							     width="300"
							     src="/images/epitome/twitch.jpg"
							     alt="Twitch Project Picture">
							<button class="button">
								<h3>Twitch App</h3>
							</button>
						</section>
					</a>
				</div>
				<div class="column">
					<a href="https://codepen.io/jaewrek/full/NydLvP/">
						<section>
							<img class=""
							     width="300"
							     src="/images/epitome/pomodoro.jpg"
							     alt="Pomodoro Project Picture">
							<button class="button">
								<h3>Pomodoro Clock</h3>
							</button>
						</section>
					</a>
				</div>
			</section>
			<section class="columns has-text-centered is-multiline">
				<div class="column">
					<a href="https://codepen.io/jaewrek/full/xLdBGd">
						<section>
							<img class=""
							     width="300"
							     src="/images/epitome/calculator.jpg"
							     alt="VueJS Calculator Project Picture">
							<button class="button">
								<h3>Calculator</h3>
							</button>
						</section>
					</a>
				</div>
				<div class="column">
					<a href="https://github.com/jerrikneri/TicTacToe">
						<section>
							<img class=""
							     width="300"
							     src="/images/epitome/ttt.jpg"
							     alt="TicTacToe Project Picture">
							<button class="button">
								<h3>Tic Tac Toe</h3>
							</button>
						</section>
					</a>
				</div>
				<div class="column">
					<a href="https://github.com/jerrikneri/simongame">
						<section>
							<img class=""
								width="500"
							     src="/images/epitome/simon.jpg"
							     alt="Simon Project Picture">
							<button class="button">
								<h3>Simon</h3>
							</button>
						</section>
					</a>
				</div>
			</section>
		</div>

		<hr>

		<div class="content has-text-centered">
			<div class="title">Contact Me</div>
			<div>
				<a href="mailto:jaewrek@gmail.com">jaewrek@gmail.com</a>
			</div>
			<div class="p-b-xl">
				<a href="https://www.linkedin.com/in/jerrik-neri">linkedin</a> |
				<a href="https://github.com/jerrikneri">github</a> |
				<a href="https://codepen.io/jerrikneri/">codepen</a>
			</div>
			<Resume position="center"></Resume>
		</div>

	</div>


</template>
<script>
import Resume from '../main/Resume';
export default {
	name: "Epitome",
	components: {
		Resume
	},
	data() {
	return {
		test: "Test"
	};
	}
};
</script>

<style>
</style>