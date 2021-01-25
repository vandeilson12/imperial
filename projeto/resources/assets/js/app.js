
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import store from './vuex/store'

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// Notification componente

Vue.component('notifications', require('./components/notifications/Notifications.vue'));
Vue.component('notification', require('./components/notifications/Notification.vue'));

const app = new Vue({
    store,
    el: '#app'
});
