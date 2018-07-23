<template>
  <div class="content">
    <div v-show="preview === true">
      <div class="flex">
        <h5>{{ entries[0].date }}</h5>
        <h5>{{ entries[0].tag }}</h5>
      </div>
      <div class="writing m-b-md">   
          <h6>{{ entries[0].title }}</h6>
          <p class="preview">{{ entries[0].content }}</p>
      </div>
    </div>

    <section v-for="entry in entries">
      <div class="flex">
        <h2>{{ entry.date }}</h2>
        <h2>{{ entry.tag }}</h2>
      </div>
      <div class="writing m-b-md">
        
        <h3>{{ entry.title }}</h3>
        <p>{{ entry.content }}</p>
      </div>
      <hr>
    </section>
  </div> 

</template>
<script>
import axios from 'axios';
import { mapGetters, mapMutations, mapActions } from "vuex";

  export default {
  props: [ 'preview' ],
  name: 'Diary',
  components: { },
  data () {
    return {
      entries: [
        {
          date: 'July 19, 2018 17:00',
          tag: 'R1D11 #100daysofcode',
          title: '“Never compare yourself and your progress to anyone but yourself.”',
          content: `
          I’m proud to say that I’m learning to read a lot. I always liked to write creatively, but never found a passion or appreciation for reading. In fact, I always dreaded it. But through sheer discipline, some motivation, and a growing hunger to learn, I’ve found the beauty in setting time to read every day.

So from time to time, I might just try to reflect on the articles or book that I’ve read for the day and regurgitate it here to see if I really understand it. Or, to see what I really took from it and possibly how I can apply it or agree/disagree with it.

Here’s a quote from an article I read today:

“Never compare yourself and your progress to anyone but yourself.”

Like most advise and quotes, that’s much easier said than done. Comparison, I think is something that plagues everyone. It’s almost too natural not to do. As if envy is just seething in our veins, waiting to surface if we allow it or pay it too much attention.

I think it’s good to know where you stand in comparison to others. To be mindful in that sense. To not be overly oblivious to what’s happening around you, or what other people in your field or industry or circle of friends are doing. It’s good to have perspective and perhaps some sort of measurable metric? But once those metrics start to generate negative thoughts or make you feel less of a person and accomplished for what you’ve personally done, then it becomes detrimental. Suddenly your acknowledge of such is hindering. 

It’s far too easy to focus on what you don’t have, haven’t accomplished, or aren’t yet. I also think it’s easy to forget that we’re all unique individuals with our own unique paths. For each person, things happen at different times, in different ways, in different mediums. As much as our society tries to cling onto some sort of structure - which has to be necessary to some degree, for some shape and organization, right? - people inevitably will mold their own paths, and figure things out at their own pace. Being “asian” and not having finished college is more than shameful. It burdens me to this day to have to think about it, and continue to accept that. 

But why?

Culture? Tradition? Social precedence? I’m not less of a person because of that, and yet somewhere ingrained in my head, I’ve developed, acquired, the mindset that I am. That thought process can be and is paralyzing. It’s demoralizing. I can’t help but internally hang my head low when the discussion of college comes up. Or subconsciously try to over compensate with varying skill sets for the paper degree I haven’t accomplished.

It feels like trying to walk a straight line blindfolded versus trying to balance on a narrow plank suspended in the air. You can walk confidently in any which direction and not really know where you’re going. Or you can freeze in indecision and demoralization as you absorb how narrow you perceive your path to be and the height at which you’re trying to scale this path at - the more you look around and take in what’s around you, the less you feel like moving, the less you realize how far you’ve come, and the plank beneath you seems to shrink and narrow and your path to be journeyed, fade farther into the distance. 

Learning therefore to believe in yourself. Be mindful enough of who and what’s around you so that you’re not blindfolded, but focused enough that you realize the plank is on the ground, and all you have to do is believe in yourself and continue to inch forward.

That’s a lot of weird drawn out analogies for such a simple quote. It’s more than relevant for me in my life as I constantly remind myself to count my blessings and regale in my accomplishments. Dividing each task that needs to be done into millimeters of my plank walk.

I’m going to keep reading and believing in myself, and have faith that it will work itself out.
          `
        },
        {
          date: 'July 18, 2018 23:30',
          tag: 'R1D10 #100daysofcode',
          title: 'Life is short',
          content: `
  My heart dropped and the room froze to a still silence. Suddenly I was the only one standing in the room. The person before me held a powerful gravity. Silence rung. Time seemed to slow down. My breaths ran short. My heart sunk deeper and deeper. I felt either reality slipping away or crashing abruptly like a consuming wave. 

I couldn’t help but stare at his face - I was compelled to do so, locked in on the moment. I was trying to make sense of the situation. Reason something into why and what lay before me. I waited patiently and watched closely for movement. 

Nothing. Silence. 

Meanwhile, the room seemed to get heavier. The ceiling sinking closer to my face. The walls caving in to create a narrow passage.

I heard my breath echo. I felt my chest rise and fall. I waited for him to do the same.

Still nothing.

I felt empty. More empty than the body that lay before me. Reason and Logic shied away from the moment, failing to attribute any answers.

I was locked in some strange illusory trance. I couldn’t look away. His presence was pulling me closer, striking the chords of my curiosity, while baffling my mind and reason in the same instant.

Everything seemed to shrink and implode upon itself. I felt frozen, while the very environment around me seemed to collapse.

Then someone broke my gaze, and I gasped for breath. The aura of isolation surrounding me vanished. The phenomenon that was occurring right before me didn’t make any more sense. But that’s OK.

Life is short. Terminal. Full circle. Untimely.

“Ride safe bro.”
          `
        },

        {
          date: 'July 17, 2018 21:00',
          tag: 'R1D9 #100daysofcode',
          title: '“Nothing changes if nothing changes.”',
          content: `
  There’s so many ways to dissect that quote. It’s applicable in a lot of different ways. I’m conflicted with how to interpret it, let alone apply it. I suppose depending on your views of destiny, how things play out, and just life in general it can be positive?

  I’m a strong believer in holding true to who you are as a person. That alone has its troubles, as it becomes increasingly easy to make excuses for the type of person you are, and fall into some perpetual motion, or chain of blanket excuses to stay in your comfortable shell. On the other hand, I’m also a strong proponent that growth happens when you’re uncomfortable - at your edges and limits. Perhaps I’m picking and choosing the bits and pieces that give me positive affirmation, while ignoring the parts that disagree with my values, I can readily admit that that is a possibility. I don’t think anything falls into your lap, at least not anymore. I was naive and entitled enough at least at one point in my life to think that I deserved more without working harder for it. Caught in some incessant battle of comparisons with others, with blame placed only outwardly. I think working towards something continually, each day, eventually snowballing into visceral and measurable change can at one point seem like things fall into your lap.

  “What got you here, won’t get you there.”

  On the surface, it makes sense. But at what cost I suppose? Is it worth becoming someone who you’re not, to get what you wanted? Wherein between does passion wane, and your greed or pleasure or appreciation for things meet or clash? If destiny plays it’s part - depending on your own personal interpretation of that phenomenon - you could argue that the choices you make in between may not matter as much. But that’s not to say they don’t matter at all as they have a direct impact on the journey and quality of life, happiness, success - however you’d like to measure and gauge, label even, your metric of a good life.

  I can personally say that I’ve held onto the crutch of being shy. That in one way or another, I tend to entrap myself in that bubble, limit myself even, because I see it as an attribute of what makes me, me. I’m mindful enough to realize that much, but naive enough to have not taken enough dutiful action on it thus far? 

  On some deep internal reflection, I could look at this whole train of thought, even documenting these opinions as some self attempt to justify who I am and what I believe. Therein lies the ideas that sometimes thinking wholly just incites inaction or indecision. After angling a thought or perspective, you just come full circle. Geometrically, that makes sense right? If you ‘curve’ your box enough and attack your own thought process with enough angles... we’re drawing some analogous circle now.

  I think change, or growth, or teeming on the limits of your boundaries, can be measured in different ways, more specifically, smaller units of... change? That’s a lot of confusing words in a round about manner to attempt to say that, I think a lot of the focus on changing and growing is too macro. You don’t become a new person over night. 


  Kaizen.

  There’s that word again. Google says:

  “Kaizen, also known as continuous improvement, is a long-term approach to work that systematically seeks to achieve small, incremental changes in processes in order to improve efficiency and quality.”

  So nothing changes if nothing changes, but if you’re making small micro changes each day, they’re not necessarily observable? I think these are all different angles of saying the same thing and these quotes are meant to be vague and interpreted, and maybe even incite a little bit of controversy.

  I’m proud of who I am and the small steps I’m taking each day to work towards becoming a better person. I think that’s enough.
          `
      },
    ]
  }  
  },
  methods: {
    ...mapActions([
        'getEntries',
        'submitEntry',
      ]),
  },
  mounted() {
    this.getEntries();
  },
}
</script>

<style>

</style>