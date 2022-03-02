<template>
    <div style="height: 100%;">
        <Header />
        <div class="m-3 p-4 ">
            <h1 class="title has-text-white has-text-centered">{{game.name}}</h1>

            <p class="has-text-white mt-4">Title: </p>
            <p class="myText">{{game.name}}</p>

            <p class="has-text-white mt-4">Summary: </p>
            <p class="myText">{{game.summary}}</p>

            <p class="has-text-white mt-4">Explanation: </p>
            <p class="myText">{{game.explanation}}</p>

            <div class="mt-6 m-3">
                <button class="button is-small is-danger is-rounded" @click="editGame(game.id)">Edit</button>
                <button class="button is-small is-danger is-rounded" @click="deleteItem(game.id)">Delete</button>
                <router-link to="/games" class="button is-link is-small is-rounded">Back</router-link>
            </div>
        </div>
        <Rodape />
    </div>

</template>
<script>
import Header from "./Header";
import Rodape from "./Rodape";
export default {
    name: 'Games',
    components: {Rodape, Header},
    data: function (){
        return{
            game: [],
            gameId: this.$route.params.id
        }
    },
    created(){
      this.getGame()
    },
    methods: {

        getGame: function (){
            axios.get(`/api/get-game/${this.gameId}`)
                .then((response)=> {
                    this.game = response.data;
                })
                .catch(function (error) {
                    console.log(error)
                })
        },
        deleteItem(id){
            axios.delete(`/api/get-game/${id}`)
            this.$router.push({path: '/games'});
        },
        editGame(id){
            this.$router.push(`/api/update-game/${id}`)
        }
    }
}
</script>
<style>
.myText{
    font-size: 23px;
    color: white;
}
</style>
