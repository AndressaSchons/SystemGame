<template>
    <div style="min-height: 100vh">
        <Header/>
        <h1 class="title is-2 has-text-white mt-6" style="text-align: center">{{ game.name }}</h1>
        <div class="p-6">
            <input type="hidden" name="_token" :value="csrf">
            <span v-if="errors" v-for="(error, index) in errors" :key="index" class="has-text-centered has-text-danger">{{ error[0] }}</span>
            <p>
                <label for="title" class="subtitle is-5 has-text-white">Título</label>
                <input id="title" class="input is-link is-rounded mb-4" name="name" required="required" type="text"
                       placeholder="Título" v-model="game.name"/>
            </p>
            <p>
                <label for="summary" class="subtitle is-5 has-text-white">Resumo</label>
                <input id="summary" class="input is-link is-rounded mb-4" name="summary" required="required" type="text"
                       placeholder="Resumo" v-model="game.summary"/>
            </p>
            <p>
                <label for="explanation" class="subtitle is-5 has-text-white">Explicação</label>
                <textarea id="explanation" class="textarea has-fixed-size is-link is-rounded mb-4"
                          placeholder="Explicação" v-model="game.explanation"></textarea>
            </p>
            <div style="display: flex">
                <input type="submit" class="button is-medium mb-6 is-rounded is-danger" @click="update()"
                       style="justify-items: end" value="Salvar">
            </div>
        </div>
    </div>

</template>

<script>
import Header from "./Header";

export default {
    name: "UpdateGame",
    components: {Header},

    data: function () {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            errors: null,
            game: [],
            gameId: this.$route.params.id
        }
    },
    created() {
        this.getGame()
    },
    methods: {

        getGame: function () {
            axios.get(`/api/get-game/${this.gameId}`)
                .then((response) => {
                    this.game = response.data;
                })
                .catch(function (error) {
                    this.errors = error.response.data.erro;
                })
        },
        update: function () {
            axios.put(`/api/update-game/${this.gameId}`, this.game)
                .then((response) => {
                    alert("Jogo alterado");
                    this.$router.push({path: 'games'});
                })
                .catch((error) => {
                    this.errors = error.response.data.erro;
                })
        }
    }
}
</script>

<style scoped>

</style>
