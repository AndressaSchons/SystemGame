<template>
    <div>
        <Header />
        <div class="text has-text-white p-6 is-align-items-center">
            <template v-if="login">
                <form method="post" action="login">
                    <h1 class="title is-2 text has-text-white">Login</h1>
                    <input type="hidden" name="_token" :value="csrf">

                    <p>
                        <label for="nome_login">NOME</label>
                        <input id="nome_login" name="nome_login" required="required" type="text" placeholder="Email"/>
                    </p>
                    <p>
                        <label for="psswd">SENHA</label>
                        <input id="psswd" name="password" required="required" type="password" placeholder="Senha"/>
                    </p>
                    <p>
                        <input type="submit" value="Login"/>
                    </p>
                    <p class="link mt-6">
                        Ainda não tem conta?
                        <button @click.prevent="loginChange()">Cadastre-se</button>
                    </p>
                </form>
            </template>


            <template>
                <form method="post" v-if="!login" action="login">
                    <input type="hidden" name="_token" :value="csrf">
                    <h1 class="title is-2">Cadastro</h1>
                    <p>
                        <label for="name">NOME</label>
                        <input id="name" name="name" required="required" type="text" placeholder="nome" />
                    </p>
                    <p>
                        <label for="email">E-MAIL</label>
                        <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/>
                    </p>
                    <p>
                        <label for="password">SENHA</label>
                        <input id="password" name="password" required="required" type="password" placeholder="ex. 1234"/>
                    </p>
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
            login: true
        }
    },
    created() {
        axios.get('http://localhost:8000/login');
    },
    methods:{
        loginChange(){
            this.login = !this.login
        }
    }
}
</script>

<style scoped>

</style>
