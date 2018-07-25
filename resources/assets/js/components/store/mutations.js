export default {
  updateEntries: (state, entries) => {
    console.log('updateEntries', entries);
    state.entries = entries;
  },

};
