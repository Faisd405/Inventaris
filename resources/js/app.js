require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

// Component User (Data Pengguna)
import IndexUsers from './components/Users/Index.vue';
import DetailUsers from './components/Users/Detail.vue';

// Routes Untuk Component User
const routesuser = [
    {
        name: 'index-users',
        path: '/users',
        component: IndexUsers
    },
    {
        name: 'detail-users',
        path: '/users/:id',
        component: DetailUsers
    }
]

const router = new VueRouter({
    mode: 'history',
    routes: routesuser
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
