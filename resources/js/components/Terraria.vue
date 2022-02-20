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
            name: 'Terraria',
            description: 'Terraria é um joguinho legal que não se tem como jogar em grupo'
        }
    }
}
</script>
<style>

</style>
