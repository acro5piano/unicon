import Vue from 'vue'
import VueRouter from 'vue-router'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter)

Vue.component('articles', require('./components/Articles.vue'))
Vue.component('navbar', require('./components/layouts/Navbar.vue'))
Vue.component('navbar-footer', require('./components/layouts/Footer.vue'))

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: require('./components/Articles.vue') }
    ]
})

const app = new Vue({
    el: '#app',
});

