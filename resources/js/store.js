import Vue from "vue"
import Vuex from "vuex"

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        user: "Visitante",
        login: true
    },
    mutations: {
        changeUser(state, payload) {
            state.user = payload
        },
        changeLogin(state) {
            state.login = !state.login;
        }
    }
})
