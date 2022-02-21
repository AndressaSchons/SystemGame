<template>
    <div class="">
        <h1 class="title is-1 mt-6 p-4 has-text-white">Olá, bem vindo ao App da Schonschii</h1>

        <ul class="is-align-items-center">
            <li class="mb-4">
                <router-link to="/lista-jogos" class="subtitle is-4 has-text-white">Lista de Jogos</router-link>
            </li>
            <li class="mb-4">
                <router-link to="/login"  class="subtitle is-4 has-text-white">Login</router-link>
            </li>
            <li class="subtitle is-4 has-text-white">
                <p>Dashboard</p>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: 'Home',
}
</script>
<style>
    .container{
        color: white;
        text-decoration: none;
        text-align: center;
    }
</style>
