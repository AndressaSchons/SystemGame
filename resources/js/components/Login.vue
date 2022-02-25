<template>
    <div>
        <Header />
        <div class="text has-text-white p-6 is-align-items-center ">
            <template v-if="login">
                <div class="ml-4 mr-4" @submit.prevent="loginaccont">
                    <h1 class="title is-2 text has-text-white">Login</h1>
                    <input type="hidden" name="_token" :value="csrf">

                    <p>
                        <label for="nome_login">NOME</label>
                        <input id="nome_login" name="nome_login" required="required" type="text" placeholder="Email" v-model="usuario.nome_login"/>
                    </p>
                    <p>
                        <label for="password_login">SENHA</label>
                        <input id="password_login" name="password_login" required="required" type="password" placeholder="Senha" v-model="usuario.password_login"/>
                    </p>
                    <p>
                        <button type="submit" value="Login">Login</button>
                    </p>
                    <p class="link mt-6">
                        Ainda não tem conta?
                        <button @click.prevent="loginChange()">Cadastre-se</button>
                    </p>
                </div>
            </template>

            <template>
                <form method="post" v-if="!login" @submit.prevent="salvar">
                    <input type="hidden" name="_token" :value="csrf">
                    <h1 class="title is-2 text has-text-white">Cadastro</h1>
                    <p>
                        <label for="name">NOME</label>
                        <input id="name" name="name" required="required" type="text" placeholder="nome" v-model="user.name"/>
                    <p>
                        <label for="email">E-MAIL</label>
                        <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com" v-model="user.email"/>
                    </p>
                    <p>
                        <label for="password">SENHA</label>
                        <input id="password" name="password" required="required" type="password" placeholder="ex. 1234" v-model="user.password"/>
                    <p>
                        <input type="submit" value="Cadastrar"/>
                    </p>

                    <p class="link mt-6">
                        Possui conta>
                        <button @click.prevent="loginChange">Login</button>
                    </p>
                </form>
            </template>
        </div>
    </div>

</template>

<script>
import Header from "./Header";

export default {
    name: "Login",
    components: {Header},
    data(){
        return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            login: true,
            user:{
                name: '',
                email: '',
                password: '',
            },
            usuario:{
                nome_login:'',
                password_login: ''
            }
        }
    },
    created() {
        axios.get('http://localhost:8000/login');
    },
    methods:{
        loginChange(){
            this.login = !this.login
        },

        salvar(){
            axios.post('/api/login', this.user)
                .then((response) => {
                    console.log(response);
                })
                // .catch((error) => {
                //     console.log(error.response.data.errors);
                // })
        },
        loginaccont(){
            axios.post('/api/logoInAccont', this.usuario)
                .then((response) => {
                    console.log(response);
                })
        }
    }
}
</script>

<style scoped>

</style>
