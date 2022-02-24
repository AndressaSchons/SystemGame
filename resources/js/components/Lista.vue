<template>
    <div>
        <h1 class="title is-3 has-text-white">Jogos</h1>

        <button class="button is-medium mb-6">Adicionar Jogo</button>

        <ul v-for="game in games">
            <li>
                <router-link to="/" class="subtitle is-4 has-text-white">
                    <h2>{{ game.name }}</h2>
                    <p>{{ game.summary }}</p><br />
                </router-link>
            </li>
        </ul>


    </div>
</template>
<script>
export default {
    name:'ListaJogos',

    data: function (){
        return{
            games: []
        }
    },

    mounted() {
        this.loadGames();
    },
    methods: {
        loadGames: function (){
            axios.get('/api/games')
            .then((response)=> {
                console.log(response)
                this.games = response.data;
            })
            .catch(function (error) {
                console.log(error)
            })
        }
    }

}
</script>
<style>
.gams{
    text-decoration: none;
    color: brown;
}

</style>
