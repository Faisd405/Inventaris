require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import VueBarcode from 'vue-barcode';

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import App from './App.vue';

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueAxios, axios,VueBarcode);

// Home
import Home from './components/Home.vue';
// Component User (Data Pengguna)
import IndexUsers from './components/Users/Index.vue';
import DetailUsers from './components/Users/Detail.vue';
import CreateUsers from './components/Users/Create.vue';
import RelasiUsersKeBarang from './components/Users/relasi-barang.vue';

//Component Barang (Data Barang)
import IndexBarang from './components/Barang/Index.vue';
import CreateBarang from './components/Barang/Create.vue';
import EditBarang from './components/Barang/Edit.vue';

// Routes Untuk Component User
const routes = [
    // Home
    {
        name: 'index',
        path: '/',
        component: Home
    },

    // Route Untuk Users
    {
        name: 'index-users',
        path: '/users',
        component: IndexUsers
    },
    {
        name: 'create-users',
        path: '/users/create',
        component: CreateUsers
    },
    {
        name: 'relasiuserbarang',
        path: '/users/relasi',
        component: RelasiUsersKeBarang
    },
    {
        name: 'detail-users',
        path: '/users/:id',
        component: DetailUsers
    },
    // Route Untuk Barang
    {
        name: 'index-barang',
        path: '/barang',
        component: IndexBarang
    },
    {
        name: 'create-barang',
        path: '/barang/create',
        component: CreateBarang
    },
    {
        name: 'edit-barang',
        path: '/barang/:id',
        component: EditBarang
    },

]

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
