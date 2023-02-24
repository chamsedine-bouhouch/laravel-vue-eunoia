// initial state

const state = {
    subjects: {},
};

// getters
const getters = {
    getSubjects(state) {
        return state.subjects;
    },
};

// actions
const actions = {
    // login({ commit, state }, user) {
    //     axios.post;
    // },
    logout({}) {
        axios.post("api/logout");
        localStorage.removeItem("access_token");
        localStorage.removeItem("currentUser");
    },

    getAllUserSubjects({ commit }) {
        axios
            .get("api/user/subjects")
            .then((response) => {
                // console.log(response.data);
                commit("setUserSubjects", response.data);
                // this.$router.push('dashboard')
            })
            .catch((error) => console.error(error));
    },
};

// mutations
const mutations = {
    setUserSubjects(state, data) {
        return (state.subjects = data);
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
};
