<template>
    <div>
        <h1 class="title is-3 has-text-white">Jogos</h1>

        <ul>
            <li><router-link to="/terraria" class="subtitle is-4 has-text-white"><h2>Terraria</h2></router-link></li>
            <li><router-link to="/csgo" class="subtitle is-4 has-text-white"><h2>CSGO</h2></router-link></li>
            <li><router-link to="/valorant" class="subtitle is-4 has-text-white"><h2>Valorant</h2></router-link></li>
            <li><router-link to="/overcooked" class="subtitle is-4 has-text-white"><h2>Overcooked</h2></router-link></li>
            <li><router-link to="/" class="subtitle is-4 has-text-white">Home</router-link></li>
        </ul>

    </div>
</template>
<script>
export default {
    name:'ListaJogos',

}
</script>
<style>
.gams{
    text-decoration: none;
    color: brown;
}

</style>
