import { createWebHistory, createRouter } from "vue-router";
import Login from "../components/Login.vue";
import Dashboard from "../components/Dashboard.vue";
const routes = [
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
        beforeEnter(to, from, next) {
            if (localStorage.getItem("access_token")) {
                next();
            } else {
                next("/login");
            }
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
export default router;
