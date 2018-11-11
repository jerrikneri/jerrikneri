import axios from "axios";

export default {
    getDiaryEntries: ({ commit, state }) => {
        axios
            .get("diary/all")
            .then(response => {
                commit("updateDiaryEntries", response.data);
            })
            .catch(error => {
                console.error("Unable to load entries.", error);
            });
    },
    getBlogPosts: ({ commit, state }) => {
        axios
            .get("blog/all")
            .then(response => {
                commit("updateBlogPosts", response.data);
            })
            .catch(error => {
                console.error("Unable to load entries.", error);
            });
    },
    getProjects: ({ commit, state }) => {
        axios
            .get("project/all")
            .then(response => {
                commit("updateProjects", response.data);
            })
            .catch(error => {
                console.error("Unable to load entries.", error);
            });
    },
};
