<template>
    <div>
        <div v-show="preview === true">
            <!-- <h3>Read with me...</h3> -->
        </div>
        <section class="section box"
                 v-show="preview == null">
            <div class="content is-large">
                <div class="has-text-centered">
                    <h1><u>BLOG</u></h1>
                    <div v-for="post in posts">
                        <a :href="`/blog/${post.id}`">
                            <div class="columns">
                              <div class="column">
                                    <img :src="post.image" alt="Blog Picture">
                                </div>
                                <div class="column">
                                    <h3>{{ post.title }}</h3>
                                </div>
                                <div class="column">
                                    <h3>{{ new
                                        Date(Date.parse(post.created_at)).toLocaleDateString('en-US',
                                        dateFormat) }}</h3>
                                </div>
                            </div>
                            <hr>
                        </a>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <h3>The River</h3>
                        </div>
                        <div class="column">
                            <h3>August 6, 2018</h3>
                        </div>
                    </div>
                </div>
                <p>
                    The birds sang, and we might have made it. We ran along the
                    meadow, freely, following the river bank as far as we
                    could. We laughed, we played, made stupid jokes even. The
                    water flowed serenely down the way, as we stared and got
                    lost in the enormity of ripples. It was all so surreal you
                    know? That day, laughing and playing, because that was when
                    not many things mattered. When you woke up and each day
                    really was a brand new day full of adventures and
                    completely free of yesterday’s problems. We were kids then
                    and even if we knew the world didn’t revolve around us, it
                    sure felt like it.
                </p>
                <p>
                    I remember it was particularly sunny that day. The summer
                    breeze carried a cool drift and everything just seemed to
                    dance; in the wind, in color, in magic. I can’t remember
                    ever smiling so much, let alone laughing so hard until I
                    could barely breathe. I’ll never forget what she said.
                    “Tommy.. when I get older, I think I want to be a
                    scientist. I really want to be President but my daddy says
                    they’re no good and don’t change nothin’. I want to make
                    change. I want to make people’s lives better.” We were
                    laying at the rest of a hill, gazing at clouds and trying
                    to pick out shapes, animals, faces. I didn’t know what to
                    say back so I laughed, “A scientist?! Ha! I’m going to be a
                    firefighter and help lots more people!” I jeered. We both
                    laughed, found a cloud to poke more jokes at, and bounced
                    around silly topics. I didn’t know love happened this way.
                    I didn’t know all the silly games we played would actually
                    mean something. And I didn’t know how easy it was to lose.
                </p>
                <p>
                    We ran up and down the river bank, flying kites, doing cart
                    wheels, and talking about a future we both knew nothing
                    about. We drowned in happiness that so easily surrounded
                    us. Those were the days when simple things made you happy
                    and happiness in itself was just as simple. As simple as it
                    is easily found, even if at night papa yelled at mama, mama
                    yelled back, and things bounced off the walls with violent
                    metallic clangs. Pots were mama’s favorite thing to throw
                    and “bitch” was papa’s favorite thing to say. It was ok
                    though because each new day the sun rose again, and so long
                    as there was light and the cool summer breeze, everything
                    was alright as if they swept away the night’s problems;
                    blown away and burned out.
                </p>
                <p>
                    Sarah and I liked to venture far and out. Our families
                    shared similar struggles just as we shared similar joyous
                    freedom. The days it rained were challenging at first until
                    we discovered an old abandoned tree house across the river
                    some ways away. We perched up top with our
                    favorite snacks and toys and watched the rain fall and blue
                    streaks light up the sky. It was amazing as much as it was
                    fun. I don’t know how long we’ve know each other, just that
                    her family’s farm was next to mine, and ever since I can
                    remember, we’ve been meeting at the dock in the lake at
                    sunrise and parting ways at sundown. Sometimes with new
                    bruises, new stories, new tears. But the sun and breeze
                    seemed to just wash them all away, and her company was the
                    catalyst.
                    Sarah used to say the sun might not rise tomorrow and I
                    believed her because I didn’t know any better. And I
                    thought she didn’t either. Until one week it rained so hard
                    and was so dark we both thought the sun might never show. I
                    didn’t see her for a week. There was a flash flood,
                    a lightning storm, and a field of crops set on fire;
                    anguishing in smoldering rain. Mama called it the “Devil’s
                    Play yard,” but I didn’t know what that meant.
                </p>
                <p>
                    The storm passed and suddenly the world outside had
                    transformed. It was broken in a lot of new places, but they
                    became new adventures. And just as suddenly as the outside
                    changed, so did our lives. The crops that burned down were
                    my family’s and mama said
                    something about “harvesting”, “annual”, and “shorthanded.”
                    Within days, men in suits were outside our house holding
                    papers in their hands, and stern faces on their heads. Mama
                    cried and prayed at night and papa cursed storms fueled by
                    alcohol.
                    <p>
                        The next day, the birds sang, and we might have made
                        it. Sarah and I ran down the bank, following the river
                        as far as we could. We ran from what gave us life, but
                        trapped us and hurt us; away from broken nights toward
                        a bright day that we weren’t even prepared for. We ran
                        until
                        night broke onto the river, until the light faded, and
                        stars faintly shined. And it was like magic. Darkness
                        fell, but it was silent. No yelling, no clangs. I
                        didn’t have to cover my ears or hide in my safe place,
                        because I already was. And we were free.
                    </p>
                    <p>
                        But Sarah started to cry, and suddenly I felt scared.
                        The chill of the night enshrouded us and we shivered. I
                        cried with her. We shook, laughed, and cried. We were
                        alone, far away, and free. We might have made it, but
                        morning came, and with it the sun. The sun burned away
                        the cold chains of the night before. A steady gentle
                        breeze swept across and made the leaves dance. But she
                        didn’t. 
                    </p>
            </div>

        </section>

    </div>
</template>

<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
export default {
  props: ["preview"],
  name: "Blog",
  components: {},
  data() {
    return {
      posts: []
    };
  },
    methods: {
    ...mapActions(["getBlogPosts", "submitEntry"]),
  },
  mounted() {
    let self = this;
    this.getBlogPosts().then(() => {
      self.posts = self.$store.state.blog_posts;
      self.loading = false;
    });
  },
};
</script>

<style>
</style>