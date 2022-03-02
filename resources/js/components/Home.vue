<template>
    <div style="height: 100vh">
        <Header />
        <h1 class="title is-1 mt-6 p-4 has-text-white has-text-centered">Olá</h1>

        <div class="columns ml-6 mr-6">
            <div class="column button is-link is-medium m-4 align-content-center">
                <router-link to="/games" class="subtitle is-4 has-text-white">Lista de Jogos</router-link>
            </div>

            <div class="column button is-link is-medium m-4 align-content-center">
                <router-link to="/login" class="subtitle is-4 has-text-white">Login</router-link>
            </div>

            <div class="column button is-link is-medium m-4 align-content-center">
                <router-link to="/dashboard" class="subtitle is-4 has-text-white">Dashboard</router-link>
            </div>
        </div>
    </div>

</template>
<script>
import Header from "./Header";
export default {
    name: 'Home',
    components: {Header},
}
</script>
<style>

</style>
