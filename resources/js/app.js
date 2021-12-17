require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

import App from './App.vue';

library.add(faUserSecret)

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


Vue.use(VueAxios, axios,IconsPlugin,BootstrapVue, FontAwesomeIcon);

// Home
import Home from './components/Home.vue';
import BarChart from './components/Chart/BarChart.vue';
// Component User (Data Pengguna)
import IndexUsers from './components/Users/Index.vue';
import DetailUsers from './components/Users/Detail.vue';
import CreateUsers from './components/Users/Create.vue';
import RelasiUsersKeBarang from './components/Users/relasi-barang.vue';

//Component Barang (Data Barang)
import IndexBarang from './components/Barang/Index.vue';
import CreateBarang from './components/Barang/Create.vue';
import EditBarang from './components/Barang/Edit.vue';
import DetailBarang from './components/Barang/Detail.vue';

//Component Buku (Data Buku)
import IndexBuku from './components/Buku/Index.vue';
import CreateBuku from './components/Buku/Create.vue';
import EditBuku from './components/Buku/Edit.vue';

//Component Kategori (Data Kategori)
import IndexKategori from './components/Kategori/Index.vue';
import CreateKategori from './components/Kategori/Create.vue';
import EditKategori from './components/Kategori/Edit.vue';
import DetailKategori from './components/Kategori/Detail.vue';

//Component Jenis Sifat (Data Jenis Sifat)
import IndexSifat from './components/jenis/Index.vue';

//Component Login dan Register
import Login from './components/Auth/Login.vue';
import Register from './components/Auth/Register.vue';
import Vue from 'vue';

// Routes Untuk Component User
const routes = [
    // Home
    {
        name: 'index',
        path: '/',
        component: Home
    },
    {
        name: 'barchart',
        path: '/barchart',
        component: BarChart
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
        path: '/barang/:id/edit',
        component: EditBarang
    },
    {
        name: 'detail-barang',
        path: '/barang/:id',
        component: DetailBarang
    },
    // Route Untuk Buku
    {
        name: 'index-buku',
        path: '/buku',
        component: IndexBuku
    },
    {
        name: 'create-buku',
        path: '/buku/create',
        component: CreateBuku
    },
    {
        name: 'edit-buku',
        path: '/buku/:id/edit',
        component: EditBuku
    },
    // Route Untuk Kategori
    {
        name: 'index-kategori',
        path: '/kategori',
        component: IndexKategori
    },
    {
        name: 'create-kategori',
        path: '/kategori/create',
        component: CreateKategori
    },
    {
        name: 'edit-kategori',
        path: '/kategori/:id/edit',
        component: EditKategori
    },
    {
        name: 'detail-kategori',
        path: '/kategori/:id',
        component: DetailKategori
    },
    // Route Untuk Jenis Sifat
    {
        name: 'index-sifat',
        path: '/sifat',
        component: IndexSifat
    },
    //Route Untuk Login dan Register
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
