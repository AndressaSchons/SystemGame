<template>
    <div style="min-height: 100vh">
        <Header/>
        <h1 class="title is-3 has-text-white has-text-centered mt-6">Dashboard</h1>
        <div class="container has-text-centered">
            <div class='columns is-centered'>
                <div class='column is-6 dashboard'>
                    <div>
                        <h1 class="title has-text-white">Users Information</h1>
                        <hr>
                    </div>
                    <table class='table'>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>User Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="user in users">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.user_name }}</td>
                            <td>{{ user.email }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "./Header";

export default {
    name: "Dashboard",
    components: {Header},

    data: function () {
        return {
            users: [],
        }
    },

    mounted() {
        this.getUsers();
        this.loadGames();
    },

    methods: {
        getUsers: function () {
            axios.get('/api/users')
                .then((response) => {
                    this.users = response.data;
                })
                .catch(function (error) {
                    console.log(error)
                })
        },
    }
}
</script>

<style scoped>
.dashboard {
    max-height: 700px;
    overflow-y: auto;
    width: auto;
}
</style>
