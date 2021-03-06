require("./bootstrap.js");

import Vue from "vue";
import VueRouter from "vue-router";

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
