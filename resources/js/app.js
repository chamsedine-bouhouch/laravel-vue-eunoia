import './bootstrap';
window.Vue = require('vue').default;

import {createApp} from "vue";
import router from "./router/router";
import App from "./components/App.vue";
//import axios from 'axios'
//import VueAxios from 'vue-axios'  
//Vue.use(VueAxios, axios)
//,VueAxios, axios
// import 'bootstrap/dist/css/bootstrap.css'
const app = createApp(App);
app.use(router).mount("#app");