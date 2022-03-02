<template>
    <div style="min-height: 100vh;">
        <Header />
        <h1 class="title is-2 has-text-white mt-6" style="text-align: center">Novo Jogo</h1>

        <div  class="p-6">
            <input type="hidden" name="_token" :value="csrf">
            <span v-if="errors" v-for="(error, index) in errors" :key="index" class="has-text-centered has-text-danger">{{error[0]}}</span>

            <p>
                <label for="title" class="subtitle is-5 has-text-white">Título</label>
                <input id="title" class="input is-link is-rounded mb-4" name="name" required="required" type="text" placeholder="Título" v-model="game.name"/>
            </p>

            <p>
                <label for="summary" class="subtitle is-5 has-text-white">Resumo</label>
                <input id="summary" class="input is-link is-rounded mb-4" name="summary" required="required" type="text" placeholder="Resumo" v-model="game.summary"/>
            </p>

            <p>
                <label for="explanation" class="subtitle is-5 has-text-white">Explicação</label>
                <textarea id="explanation" class="textarea has-fixed-size is-link is-rounded mb-4" placeholder="Explicação" v-model="game.explanation"></textarea>
            </p>
            <div style="display: flex">
                <input type="submit" class="button is-medium mb-6 is-rounded is-danger" @click="adicionar()"  style="justify-items: end" value="Adicionar">
            </div>
        </div>
    <Rodape />
    </div>
</template>

<script>
import Header from "./Header";
import Rodape from "./Rodape";

export default {
    name: "NewGame",
    components: {Rodape, Header},
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            game: {
                name: '',
                summary: '',
                explanation: '',
            },
            errors: null
        }
    },
    methods: {
        adicionar() {
            axios.post('/api/new-game', this.game)
                .then((response) => {
                    alert("Jogo criado");
                    this.$router.push({path: '/'});
                    console.log(response);

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
