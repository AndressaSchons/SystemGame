<template>
    <div class="gams">
        <h1>Jogos</h1>

        <article>
            <router-link to="/terraria"><h2>Terraria</h2></router-link>
        </article>

        <article>
            <h2>CS:GO</h2>
            <p>CS:GO é um joguinho merda que tem como jogar em grupo</p>
        </article>

        <article>
            <h2>Valorant</h2>
            <p>Valorant é um joguinho beta que deveria ser jogado em grupo mas geral se acha bom o sufiente pra jogar solo</p>
        </article>

        <article>
            <h2>Overcooked</h2>
            <p>Overcooked é um joguinho adoravel que é melhor quando se joga em grupo</p>
        </article>

        <router-link to="/">Home</router-link>
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
