/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var Lang = require('lang.js');

import translations from './vue-translations.js';

var lang = new Lang();
lang.setMessages(translations);

Vue.component('companies-list', require('./components/CompaniesList.vue').default);
Vue.component('employees-list', require('./components/EmployeesList.vue').default);
Vue.component('weather-module', require('./components/WeatherModule.vue').default);
Vue.component('time-module', require('./components/TimeModule.vue').default);

Vue.filter('trans', (...args) => {
    return lang.get(...args);
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#wrapper',
});
