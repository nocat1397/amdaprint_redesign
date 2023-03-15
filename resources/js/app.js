/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';
import vueScrollto from 'vue-scrollto';
import ElementUI from 'element-ui';
import locale from 'element-ui/lib/locale/lang/en'
import 'element-ui/lib/theme-chalk/index.css';
import carousel from 'vue-owl-carousel';
import VueSimpleAlert from "vue-simple-alert";
import VuePageTransition from 'vue-page-transition'
import Autocomplete from '@trevoreyre/autocomplete-vue'
import '@trevoreyre/autocomplete-vue/dist/style.css'
import Vue from 'vue';
import StarRating from 'vue-star-rating'

Vue.use(Autocomplete)
Vue.use(VuePageTransition)
Vue.use(carousel);
Vue.use(vueScrollto);
Vue.use(ElementUI, {locale});
Vue.use(VueRouter);
Vue.use(VueSimpleAlert);
Vue.use(VueAxios, axios);
Vue.component('star-rating', StarRating);
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});


