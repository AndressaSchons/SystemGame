<template>

    <div>
<!--        <input type="text" class="input is-medium is-warning" placeholder="Search" v-model="search">-->
<!--        <button type="submit" class="button is-danger is-small" @click="getSearch">Procurar</button>-->

        <input type="text" class="input is-medium is-warning is-disabled"  placeholder="Busca">
        <ul v-if="game.length > 0">
            <li v-for="game in game" :key="game.id" v-text="game.name"></li>
        </ul>

    </div>
</template>

<script>
export default {
    name: "Search",
    data() {
        return {
            game: [],
            keywords: null,
            results: []

        }
    },
    watch: {
        keyword(after, before) {
            this.fetch();
        }
    },
    methods:{

    }
}
</script>

<style scoped>

</style>
