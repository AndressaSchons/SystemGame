<template>
    <div style="min-height: 100vh">
        <Header/>
        <div class="text has-text-white p-6 is-align-items-center ">
            <template v-if="login">
                <div class="ml-4 mr-4" @submit.prevent="loginaccont">
                    <h1 class="title is-2 text has-text-white has-text-centered">Login</h1>
                    <input type="hidden" name="_token" :value="csrf">

                    <p>
                        <label for="user_name" class="subtitle is-5 has-text-white">Username</label>
                        <input class="input is-link is-rounded mb-4" name="user_name" required="required" type="text"
                               placeholder="Email" v-model="usuario.user_name"/>
                    </p>
                    <p>
                        <label for="password_login" class="subtitle is-5 has-text-white">Senha</label>
                        <input id="password_login" class="input is-link is-rounded mb-4" name="password_login"
                               required="required" type="password" placeholder="Senha" v-model="usuario.password"/>
                    </p>
                    <span v-if="error" class="has-text-centered has-text-danger">{{ error }}</span>
                    <p>
                        <button type="submit" class="button is-medium is-rounded is-danger" value="Login"
                                @click="loginaccont()">Login
                        </button>
                    </p>
                    <p class="link mt-6">
                        Ainda não tem conta?
                        <button @click.prevent="loginChange()" class="button is-small is-rounded is-warning">
                            Cadastre-se
                        </button>
                    </p>
                </div>
            </template>

            <template v-if="!login">
                <div>
                    <input type="hidden" name="_token" :value="csrf">
                    <h1 class="title is-2 text has-text-white has-text-centered">Cadastro</h1>
                    <p>
                        <label for="name" class="subtitle is-5 has-text-white">Nome</label>
                        <input id="name" name="name" class="input is-link is-rounded mb-4" required="required"
                               type="text" placeholder="Nome" v-model="user.name"/>
                    <p>
                    <p>
                        <label for="user_name" class="subtitle is-5 has-text-white">Username</label>
                        <input id="user_name" name="user_name" class="input is-link is-rounded mb-4" required="required"
                               type="text" placeholder="Username" v-model="user.user_name"/>
                    <p>
                        <label for="email" class="subtitle is-5 has-text-white">E-mail</label>
                        <input id="email" name="email" class="input is-link is-rounded mb-4" required="required"
                               type="email" placeholder="email@email.com" v-model="user.email"/>
                    </p>
                    <p>
                        <label for="password" class="subtitle is-5 has-text-white">Senha</label>
                        <input id="password" name="password" class="input is-link is-rounded mb-4" required="required"
                               type="password" v-model="user.password"/>
                    </p>
                    <span v-if="error" class="has-text-centered has-text-danger">{{ error }}</span>
                    <p>
                        <button type="submit" class="button is-medium is-rounded is-danger" @click.prevent="salvar()">
                            Cadastrar
                        </button>
                    </p>

                    <p class="link mt-6">
                        Possui conta?
                        <button @click.prevent="loginChange" class="button is-small is-rounded is-warning">Login
                        </button>
                    </p>
                </div>
            </template>
        </div>
    </div>

</template>

<script>
import Header from "./Header";

export default {
    name: "Login",
    components: {Header},
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            login: true,
            error: null,
            user: {
                name: '',
                user_name: '',
                email: '',
                password: '',
            },
            usuario: {
                user_name: '',
                password: ''
            }
        }
    },
    created() {
        axios.get('http://localhost:8000/login');
    },
    methods: {
        loginChange() {
            this.login = !this.login
        },

        salvar() {
            axios.post('/api/login', this.user)
                .then((response) => {
                    this.$store.commit("changeUser", this.user.user_name);
                    this.$store.commit("changeLogin");

                    this.$router.push({path: '/'});
                })
                .catch((error) => {
                    console.log(error.response);
                    this.error = {...error.response.data.erro}

                })
        },
        loginaccont() {
            axios.post('/api/logInAccount', this.usuario)
                .then((response) => {
                    this.$store.commit("changeUser", response.data[0].user_name);
                    this.$store.commit("changeLogin");

                    this.$router.push({path: '/'});
                })
                .catch((error) => {
                    this.error = "E-mail e/ou senha invalidos";
                    x
                })
        }
    }
}
</script>

<style scoped>

</style>
