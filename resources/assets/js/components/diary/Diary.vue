<template>
  <div>
    
    <section>
      <div class="content">
        <h3>Latest Entry</h3>
        <div class="flex">
          <h2>{{ entries[0].date }}</h2>
          <h2>{{ entries[0].tag }}</h2>
        </div>
        <div class="writing m-b-md">
          
          <h3>{{ entries[0].title }}</h3>
          <p>{{ entries[0].content }}</p>
        </div>
      </div>
      <hr>
    </section>
    

  </div>  

</template>
<script>
import Entry from './Entry';

  export default {
  name: 'Diary',
  components: { Entry },
  data () {
    return {
      entries: [
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
  }
}
</script>

<style>
</style>