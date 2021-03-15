require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

// Introducir editor de texto enriquecido
import VueQuillEditor from 'vue-quill-editor'
 // requiere estilos
import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'
Vue.use(VueQuillEditor)


import SelectNuevoExistenteComponent from './components/SelectNuevoExistenteComponent.vue';
Vue.component('select-nuevo-existente-component', SelectNuevoExistenteComponent);
import EditorHtmlComponent from './components/EditorHtmlComponent.vue';
Vue.component('editor-html-component', EditorHtmlComponent);



const app = new Vue({
    el: '#app',
    methods: {
    }
});
