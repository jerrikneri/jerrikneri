<template>
  <div class="content">
    <EntryForm></EntryForm>

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
import EntryForm from './EntryForm';
import { mapGetters, mapMutations, mapActions } from "vuex";

  export default {
  props: [ 'preview' ],
  name: 'Diary',
  components: { EntryForm },
  data () {
    return {
      entries: [
        {
          date: 'July 24, 2018 18:00',
          tag: 'R1D15 #100daysofcode',
          title: '“You can only see the stars when it’s dark enough - sometimes that means journeying into the darkest of valleys.”',
          content: `
          That’s a quote my friend and I made up the other day. It’s really just a spin off on this: “You have to experience the lows to appreciate the highs.” And with that quote comes to mind a bunch of other ideas and quotes, like “Ignorance is bliss.” Or simply not knowing any better. Or being a product of your own society, although, the more I go on, the farther off base they seem to land, at least in my head.

With everyone going through some sort of duress, pain, stress, struggle at one point or another in their lives, I think that attests to the necessity of it. As uncomfortable as it makes you in the moment, it’s that same discomfort and unease that’s forcing you to grow and forcing you to appreciate the higher notes in your life. If not so much when they happen eventually - because things will get better in time - then, the countless blessings you do have that are always present.

I think constantly living on some higher plain might possibly make you naive, grow too comfortable, or even oblivious and less mindful to what really surrounds you. Not to say that we should be finding ways to fall and suffer, but find a beauty and appreciation for them as they happen naturally and organically in our lives. In some odd way, find the positivity that stems from falling into a rut. Allowing us to take time to really reflect and see where we are and how far we’ve come.

If you don’t know any better, it’s harder to appreciate what you already have. Going to the Philippines multiple times with my parents thrust me into the conditions of a third world country, and I appreciated it. Not having hot water, not having a running shower head. Having to manually flush the toilet with a bucket of water. Having to bathe yourself in the right mixture of boiled and cold water, warm to the touch, fetched with a ladle from another bucket. Among so many other living conditions that we take for granted each day, it was more than just a culture shock. Being young, naive, moldable even, it was easy to find the beauty in that country. To appreciate the livestock. How my distant family led their lives. How the priority and structure of problems is completely different when your standard of living is a tier or two below that of what we have in this country.

On that note, and in another regard, falling in and out of love has taught me a lot as well. Heartbreak is the worst, most unnecessary type of feeling. It seems diminutive to be affected by, or ponder heavily on such things, when people across the world have “real” problems. It’s all relative perhaps, but that’s not an excuse to not be mindful.

At any rate, falling, or experience the darkness is necessary to appreciate the light. If the sun never set, how could we ever appreciate the stars and the moon? Alternatively, if we never experienced sun light, would the stars be so bad?`
        },
        {
          date: 'July 23, 2018 18:00',
          tag: 'R1D14 #100daysofcode',
          title: 'College',
          content: `
          "I'm studying computer engineering at UCSD"

He said when suddenly his tone took a dip. The words seemed to flow out too quickly, too routinely, to only come to a sudden stop like a man running towards the edge of a cliff. The sentence ended abruptly, the silence hung, as doubt and questions ensued crashing at the wall he had suddenly thrown up by looking away in dismay. He gave a lighthearted smile and shrugged, turning his head away. I watched the pain and shame engulf his face, wishing he was invisible. I looked off in the distance for a moment, hoping it would ease the steadily rising tension and make fleeting any awkwardness that may follow. I thought about my short comings as well as my accomplishments, my achievements and my failures. It was too easy to get lost in them, to feel paralyzed with regret and hopeful mendings. And suddenly I felt as if I was drowning, in fear, in regret, in some awful pool of self loathing. I held my breath looking up for a break of light in the enshrouding failures of my past, I reached upward hoping blindly for something, someone to pull me out of these self inflicting self perpetuated senses of misery. 

Silence rung, I shook my head and glanced at him. I took a moment to trace out my recent train of thoughts and how easily I had stumbled under some seemingly innocent passive contemplation. I mustered the courage to smile, if not for myself, then at least for him. I thought on some shallow, narrow level, I understood the pain he tried so hard to hide behind the mask be wore when he spoke. I thought if in some sense I could align the events in our lives I could sympathize with him on a deeper level.  I immediately felt sad, as I felt the darkness come try to wash over me again. My heart sunk, my will weakened, as I stared off into the distance in the same direction as he, trying to align some sense of emotion with him. I felt sympathy slip away. 
`
        },
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