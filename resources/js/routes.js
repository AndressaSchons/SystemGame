import './bootstrap';
import Home from './components/Home';
import ListaJogos from './components/Lista';
import Login from './components/Login';
import NewGame from './components/NewGame';
import Dashboard from "./components/Dashboard";


export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },

        {
            path: '/games',
            component: ListaJogos,
        },
        {
            path: '/login',
            component: Login,
        },
        {
            path: '/newgame',
            component: NewGame
        },
        {
            path: '/dashboard',
            component: Dashboard
        },


    ]
}
