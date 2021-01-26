require('./bootstrap.js');

import Vue from 'vue'
import VueRouter from 'vue-router'

//Main pages
import App from './views/App.vue';
import Home from './views/Home.vue';
import About from './views/About.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/',
            name: 'about',
            component: About
        }
    ]
})

const app = new Vue({
    el: '#app',
    components: { App },
    router
});
