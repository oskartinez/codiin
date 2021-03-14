require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

import SelectNuevoExistenteComponent from './components/SelectNuevoExistenteComponent.vue';
Vue.component('select-nuevo-existente-component', SelectNuevoExistenteComponent);

const app = new Vue({
    el: '#app',
    methods: {
    }
});
