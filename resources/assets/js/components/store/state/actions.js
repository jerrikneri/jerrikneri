import axios from 'common/axios';

export default {
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
