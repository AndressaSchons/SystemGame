<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Video-Game-Controller-Icon-IDV-green.svg/2048px-Video-Game-Controller-Icon-IDV-green.svg.png"
                    width="30" height="30">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <router-link class="navbar-item" to="/">
                    Home
                </router-link>

                <router-link class="navbar-item" to="/games">
                    Jogos
                </router-link>
            </div>

            <div class="navbar-end">
                <div class="navbar-item" v-if="login">
                    <div class="buttons">
                        <a class="button is-light">
                            <router-link to="/login">
                                Log in
                            </router-link>
                        </a>
                    </div>
                </div>
                <div class="navbar-item" v-else>
                    <div class="buttons">
                        <a class="button is-light">
                            <router-link to="/logout">
                                Log Out
                            </router-link>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import {mapState} from "vuex";

export default {
    name: "Header",

    computed: mapState(["login"]),


}
</script>

<style scoped>

</style>
