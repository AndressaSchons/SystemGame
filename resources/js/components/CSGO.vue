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
    name: 'CSGO',

    data(){
        return{
            name: 'CSGO',
            description: 'CS:GO é um joguinho merda que tem como jogar em grupo'
        }
    }
}
</script>
<style>

</style>
