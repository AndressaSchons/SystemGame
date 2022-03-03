require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import store from './store.js'
import routes from './routes';
import Header from "./components/Header.vue"

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    store,
    components: {
        Header,
    },
    router: new VueRouter(routes)
});
