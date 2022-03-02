<template>
    <div style="min-height: 100vh">
        <Header/>
        <h1 class="title is-3 has-text-white has-text-centered mt-6">Jogos</h1>
        <div class="columns m-4" style="display: flex; justify-content:center">
            <div class="column is-one-quarter">
                <Search />
            </div>
            <div class="column is-one-quarter"></div>
            <div class="column is-one-quarter">
                <p href="/new-game" class="button is-medium mb-6 is-warning">Adicionar Jogo</p>
            </div>
        </div>

        <div v-for="game in games">
            <div class="columns ml-6 mr-6">
                <div class="column">
                    <a class="subtitle is-4 has-text-white mb-6">
                        <h2>{{ game.name }}</h2>
                        <p class="subtitle is-5 has-text-white">{{ game.summary }}</p>
                    </a>
                </div>

                <div class="column is-one-quarter">
                    <div class="columns">
                        <div class="column">
                            <button class="button is-link" @click="getGame(game.id)">Visualizar</button>
                        </div>
                        <div class="column">
                            <button class="button is-info" @click="editGame(game.id)">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Rodape />
    </div>
</template>
<script>
import Header from "./Header";
import Search from "./Search";
import Rodape from "./Rodape";
export default {
    name:'ListaJogos',
    components: {Rodape, Search, Header},
    data: function (){
        return{
            games: [],
            search: null,
        }
    },

    mounted() {
        this.loadGames();
    },

    methods: {
        loadGames: function (){
            axios.get('/api/games')
            .then((response)=> {
                this.games = response.data;
            })
            .catch(function (error) {
                console.log(error)
            })
        },
        getGame(id){
            this.$router.push({path:`api/get-game/${id}`})
        },

        editGame(id){
            this.$router.push({path: `api/update-game/${id}`})
        },

        // getSearch(word){
        //   axios.post(\`/api/search/${word}\`)
        //     .then((response)=>{
        //         console.log(response);
        //     })
        // },
    },
}
</script>
<style>
.gams{
    text-decoration: none;
    color: brown;
}

</style>
