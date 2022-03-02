import './bootstrap';
import Home from './components/Home';
import ListaJogos from './components/Lista';
import Login from './components/Login';
import NewGame from './components/NewGame';
import Dashboard from "./components/Dashboard";
import GetGame from "./components/GetGame";
import UpdateGame from "./components/UpdateGame";


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
            path: '/new-game',
            component: NewGame
        },
        {
            path: '/dashboard',
            component: Dashboard
        },
        {
            path: '/api/get-game/:id',
            component: GetGame
        },
        {
            path: '/api/update-game/:id',
            component: UpdateGame,
            props: true
        }
    ]
}
