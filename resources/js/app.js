require("./bootstrap.js");

<<<<<<< HEAD
import Vue from "vue";
import VueRouter from "vue-router";
=======
import Vue from 'vue'
import VueRouter from 'vue-router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import '../css/app.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
>>>>>>> develop

//Main pages
import App from "./views/App.vue";
import Home from "./views/Home.vue";
import About from "./views/About.vue";
import Register from "./views/Register.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
        {
            path: "/register",
            name: "register",
            component: Register,
        },
    ],
});

const app = new Vue({
    el: "#app",
    components: { App },
    router,
});
