export default {
  updateDiaryEntries: (state, entries) => {
    state.diary_entries = entries;
  },
  updateBlogPosts: (state, posts) => {
    state.blog_posts = posts;
  },
  updateProjects: (state, projects) => {
    state.projects = projects;
  },

};
