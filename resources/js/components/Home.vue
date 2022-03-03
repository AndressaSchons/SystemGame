<template>
    <div style="min-height: 100vh">
        <Header/>
        <h1 class="title is-1 mt-6 p-4 has-text-white has-text-centered">Olá, {{ $store.state.user }}</h1>
        <div class="columns ml-6 mr-6">

            <div class="column button is-link is-medium m-4 align-content-center" @click="routeGame">
                Jogos
            </div>

            <div class="column button is-link is-medium m-4 align-content-center" v-if="login" @click="routeLog">
                Login
            </div>

            <div class="column button is-link is-medium m-4 align-content-center" @click="routeDash">
                Dashboard
            </div>
        </div>
    </div>

</template>
<script>
import Header from "./Header";
import {mapState} from "vuex";

export default {
    name: 'Home',
    components: {Header},

    computed: mapState(["user", "login"]),

    methods: {
        routeDash() {
            this.$router.push({path: 'dashboard'})
        },
        routeLog() {
            this.$router.push({path: 'login'})
        },
        routeGame() {
            this.$router.push({path: 'games'})
        }
    }
}
</script>
<style>

</style>
