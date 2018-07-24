import axios from 'axios';

export default {

  getEntries: ({commit, state}) => {
    axios
      .get('diary')
      .then(response => console.log(response))
      .catch(error => {
        console.error('Unable to load entries.', error);
      })
  },

  submitEntry: ({ commit, state }, entry) => {
    return axios
      .post('diary/post', {
        'title': entry.title,
        'date': entry.date,
        'tag': entry.tag,
        'content': entry.content
      })
      .then(response => {
        console.log(response);
      })
      .catch(error => {
        console.error('Post submission unsuccessful.', error);
      })
  },

  
};
