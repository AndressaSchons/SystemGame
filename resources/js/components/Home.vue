<template>
    <div class="container">
        <h1 class="has-text-centered">Olá, bem vindo ao App da Schonschii</h1>

        <ul class="ul">
            <li class="list">
                <router-link to="/lista-jogos" class="lista">Lista de Jogos</router-link>
            </li>
            <li class="list">
                <router-link to="/login" class="login">Login</router-link>
            </li>
            <li class="list">
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
    background-color: #000080;
    color: white;
}
.list{
    margin-bottom: 15px;
}
.ul{
    list-style: none;
}
.lista{
    margin-bottom: 5px;
    text-decoration: none;
    color: black;
    font-size: 16px;
}
.login{
    margin-bottom: 5px;
    text-decoration: none;
    color: black;
    font-size: 16px;

}
</style>
