import axios from 'axios';

export default {
    async fetchDiary({ commit, state }) {
        await axios
            .get('diary')
            .then(response => {
                commit('updateDiaryEntries', response.data);
            })
            .catch(error => {
                console.error('Unable to load entries.', error);
            });
    },
    async fetchBlog({ commit, state }) {
        await axios
            .get('blog')
            .then(response => {
                commit('updateBlogPosts', response.data);
            })
            .catch(error => {
                console.error('Unable to load entries.', error);
            });
    },
    getTags({ commit, state }) {
        axios
            .get('/tags')
            .then(response => {
                console.log('getTags', response);
                commit('updateTags', response.data);
            })
            .catch(error => console.error('Unable to fetch tags.', error));
    },
    getProjects: ({ commit, state }) => {
        axios
            .get('project')
            .then(response => {
                commit('updateProjects', response.data);
            })
            .catch(error => {
                console.error('Unable to load entries.', error);
            });
    },
    newsletterSubscribe: ({ commit }, form_data) => {
        return axios.post('subscribe-to-newsletter', form_data);
    }
};
