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

import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'
// Global registration
Vue.component('vue-bootstrap-typeahead', VueBootstrapTypeahead);


import SelectNuevoExistenteComponent from './components/SelectNuevoExistenteComponent.vue';
Vue.component('select-nuevo-existente-component', SelectNuevoExistenteComponent);
import EditorHtmlComponent from './components/EditorHtmlComponent.vue';
Vue.component('editor-html-component', EditorHtmlComponent);
import TableListadoComponent from './components/TableListadoComponent.vue';
Vue.component('table-listado-component', TableListadoComponent);
import BuscadorComponent from './components/BuscadorComponent.vue';
Vue.component('buscador-component', BuscadorComponent);
import BuscadorEnviadasComponent from './components/BuscadorEnviadasComponent.vue';
Vue.component('buscador-enviadas-component', BuscadorEnviadasComponent);
import PagerComponent from './components/PagerComponent.vue';
Vue.component('pager-component', PagerComponent);
import MenuComponent from './components/MenuComponent.vue';
Vue.component('menu-component', MenuComponent);
import TableListadoEnviadasComponent from './components/TableListadoEnviadasComponent.vue';
Vue.component('table-listado-enviadas-component', TableListadoEnviadasComponent);
import TablePersonalComponent from './components/TablePersonalComponent.vue';
Vue.component('table-personal-component', TablePersonalComponent);

import ItemIngresosOfJudicialComponent from './components/ItemIngresosOfJudicialComponent.vue';
Vue.component('item-ingresos-of-judicial-component', ItemIngresosOfJudicialComponent);
import ItemPresSinEnviarComponent from './components/ItemPresSinEnviarComponent.vue';
Vue.component('item-pres-sin-enviar-component', ItemPresSinEnviarComponent);

import AcDependenciasComponent from './components/AcDependenciasComponent.vue';
Vue.component('ac-dependencias-component', AcDependenciasComponent); 

// pruebas 
import AutocomWikiComponent from './components/AutocomWikiComponent.vue';
Vue.component('autocom-wiki-component', AutocomWikiComponent);


const app = new Vue({
    el: '#app',
    methods: {
    }
});
