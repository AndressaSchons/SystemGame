<template>
    <div>
        <Header />
        <h1 class="title is-2 has-text-white" style="text-align: center">Novo Jogo</h1>
        <div @submit.prevent="adicionar" class="p-6">
            <input type="hidden" name="_token" :value="csrf">
            <p>
                <label for="title" class="subtitle is-5 has-text-white">Título</label>
                <input id="title" class="input is-link is-rounded mb-4" name="name" required="required" type="text" placeholder="Título" v-model="game.name"/>
            </p>
            <p>
                <label for="summary" class="subtitle is-5 has-text-white">Resumo</label>
                <input id="summary" class="input is-link is-rounded mb-4" name="summary" required="required" type="text" placeholder="Resumo" v-model="game.summary"/>
            </p>
            <p>
                <label for="id_extension" class="subtitle is-5 has-text-white">Extensão</label>
                <input id="id_extension" class="input is-link is-rounded mb-4" name="id_extension" required="required" type="text" placeholder="Extensão" v-model="game.id_extension"/>
            </p>
            <p>
                <label for="explanation" class="subtitle is-5 has-text-white">Explicação</label>
                <input id="explanation" class="input is-link is-rounded mb-4" name="explanation" required="required" type="text" placeholder="Explicação" v-model="game.explanation"/>
            </p>
            <div style="display: flex">
                <input type="submit" class="button is-medium mb-6 is-rounded is-danger" style="justify-items: end" value="Adicionar">
            </div>
        </div>

    </div>
</template>

<script>
import Header from "./Header";

export default {
    name: "NewGame",
    components: {Header},
    data(){
        return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            game:{
                name: '',
                summary: '',
                explanation: '',
                id_extension: ''
            }
        }
    },
    methods:{
        adicionar(){
            axios.post('/api/newgame', this.game)
                .then((response) => {
                    console.log(response);
                })
            // .catch((error) => {
            //     console.log(error.response.data.errors);
            // })
        }
    }
}
</script>

<style scoped>

</style>
