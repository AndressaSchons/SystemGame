<template>
    <div>
        <Header/>
        <h1 class="title is-3 has-text-white has-text-centered mt-6">Jogos</h1>
        <div class="columns m-4" style="display: flex; justify-content:center">
            <div class="column is-one-quarter">
                <input type="text" class="input is-medium is-warning" placeholder="Search">
            </div>
            <div class="column is-one-quarter"></div>
            <div class="column is-one-quarter">
                <a href="/newgame" class="button is-medium mb-6 is-warning">Adicionar Jogo</a>
            </div>
        </div>

        <div v-for="game in games">
            <div class="columns ml-6 mr-6">
                <div class="column">
                    <a>
                        <router-link to="/" class="subtitle is-4 has-text-white">
                            <h2>{{ game.name }}</h2>
                            <p>{{ game.summary }}</p><br />
                        </router-link>
                    </a>
                </div>

                <div class="column is-one-quarter">
                    <div class="columns">
                        <div class="column">
                            <button class="button is-link">Visualizar</button>
                        </div>
                        <div class="column">
                            <button class="button is-info">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Header from "./Header";
export default {
    name:'ListaJogos',
    components: {Header},
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
