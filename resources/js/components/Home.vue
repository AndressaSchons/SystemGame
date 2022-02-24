<template>
    <div>
        <Header />
        <h1 class="title is-1 mt-6 p-4 has-text-white">Olá, bem vindo ao App da Schonschii</h1>


        <div class="columns"> <!-- v-for='games in game' (mostrar jogo por jogo) [falta linkar a API] -->
            <div class="column button is-link is-medium m-4 align-content-center">
                <router-link to="/lista-jogos" class="subtitle is-4 has-text-white">Lista de Jogos</router-link>
            </div>

            <div class="column button is-link is-medium m-4 align-content-center">
                <router-link to="/login" class="subtitle is-4 has-text-white">Login</router-link>
            </div>

            <div class="column subtitle is-4 has-text-white button is-link is-medium m-4 align-content-center">
                <p>Dashboard</p>
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
    .container{
        color: white;
        text-decoration: none;
        text-align: center;
    }
</style>
