import './bootstrap';
import Home from './components/Home';
import Terraria from './components/Terraria';
import ListaJogos from './components/Lista';
import Login from './components/Login';

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
            path: '/lista-jogos',
            component: ListaJogos,
        },
        {
            path: '/login',
            component: Login,
        },

    ]
}
