import './bootstrap';
import Home from './components/Home';
import Terraria from './components/Terraria';
import ListaJogos from './components/Lista';
import Login from './components/Login';
import Valorant from "./components/Valorant";
import CSGO from "./components/CSGO";
import Overcooked from "./components/Overcooked";


export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/terraria',
            component: Terraria
        },
        {
            path: '/overcooked',
            component: Overcooked
        },
        {
            path: '/valorant',
            component: Valorant
        },
        {
            path: '/csgo',
            component: CSGO
        },
        {
            path: '/lista-jogos',
            component: ListaJogos,
        },
        {
            path: '/login',
            component: Login,
        },

    ]
}
