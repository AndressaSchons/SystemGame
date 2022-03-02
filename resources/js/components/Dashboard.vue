<template>
    <div>
        <Header />
        <h1 class="title is-3 has-text-white has-text-centered mt-6">Dashboard</h1>

        <p>Usuários: {{ user.total }}</p>
        <p>Games: {{ games.total }}</p>
    </div>
</template>

<script>
import Header from "./Header";
export default {
    name: "Dashboard",
    components: {Header},

    data() {
        return {
            games: [],
            user: [],
        }
    }
}
</script>

<style scoped>

</style>
