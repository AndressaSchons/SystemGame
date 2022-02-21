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
    name: 'About',

    data(){
        return{
            name: 'Valorant',
            description: 'Valorant é um joguinho beta que deveria ser jogado em grupo mas geral se acha bom o sufiente pra jogar solo'
        }
    }
}
</script>
<style>

</style>
