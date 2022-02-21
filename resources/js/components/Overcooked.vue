<template>
    <div>
        <article>
            <h2>{{name}}</h2>
            <p>{{description}}</p>

        </article>
        <router-link to="/">Home</router-link>

    </div>

</template>
<script>
export default {
    name: 'Overcooked',

    data(){
        return{
            name: 'Overcooked',
            description: 'Overcooked é um joguinho adoravel que é melhor quando se joga em grupo'
        }
    }
}
</script>
<style>

</style>
