import Vue from 'vue'

// Axios
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

// Vue-Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import routes from './router'

// Vue Pagination
Vue.component('pagination', require('laravel-vue-pagination'));

// Vue Analytics
import VueAnalytics from 'vue-analytics'
Vue.use(VueAnalytics, {
    id: 'UA-166303075-1',
    routes
})

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});