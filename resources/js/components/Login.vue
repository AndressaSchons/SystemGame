<template>
  <div>
<!--      <div id="login">-->
<!--          <form method="post" action="/login">-->
<!--              <h1>Login</h1>-->
<!--              <p>-->
<!--                  <label for="nome_login">Seu nome</label>-->
<!--                  <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>-->
<!--              </p>-->

<!--              <p>-->
<!--                  <label for="email_login">Seu e-mail</label>-->
<!--                  <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" />-->
<!--              </p>-->

<!--              <p>-->
<!--                  <input type="checkbox" name="manterlogado" id="manterlogado" value="" />-->
<!--                  <label for="manterlogado">Manter-me logado</label>-->
<!--              </p>-->

<!--              <p>-->
<!--                  <input type="submit" value="Logar" />-->
<!--              </p>-->

<!--              <p class="link">-->
<!--                  Ainda não tem conta?-->
<!--                  <a href="#paracadastro">Cadastre-se</a>-->
<!--              </p>-->
<!--          </form>-->
<!--      </div>-->
      <div id="cadastro">
          <form method="get" action="/login">
              <h1>Cadastro</h1>

              <p>
                  <label for="name">Seu nome</label>
                  <input id="name" name="name" required="required" type="text" placeholder="nome" />
              </p>

              <p>
                  <label for="email">Seu e-mail</label>
                  <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/>
              </p>

              <p>
                  <label for="password">Sua senha</label>
                  <input id="password" name="password" required="required" type="password" placeholder="ex. 1234"/>
              </p>

              <p>
                  <input type="submit" value="Cadastrar"/>
              </p>

          </form>
      </div>
  </div>
</template>

<script>
export default {
    name: "Login",

    created() {
        axios.get('http://localhost:8000/login');
    }
}
</script>

<style scoped>

</style>
