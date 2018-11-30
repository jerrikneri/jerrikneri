import axios from 'axios';

export default {
    async fetchDiary({ commit, state }) {
        await axios
            .get('diary/all')
            .then(response => {
                commit('updateDiaryEntries', response.data);
            })
            .catch(error => {
                console.error('Unable to load entries.', error);
            });
    },
    async fetchBlog ({ commit, state }) {
        await axios
            .get('blog/all')
            .then(response => {
                commit('updateBlogPosts', response.data);
            })
            .catch(error => {
                console.error('Unable to load entries.', error);
            });
    },
    getProjects: ({ commit, state }) => {
        axios
            .get('project/all')
            .then(response => {
                commit('updateProjects', response.data);
            })
            .catch(error => {
                console.error('Unable to load entries.', error);
            });
    },
    newsletterSubscribe: ({ commit }, form_data) => {
        console.log('in action', form_data);
        return axios
            .post('subscribe-to-newsletter', form_data);
    }
};
