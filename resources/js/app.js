import Vue from 'vue';
import VueRouter from 'vue-router'; 
import routes from './routes';
import './bootstrap';
import VueSweetalert2 from 'vue-sweetalert2';
import utils from './helpers/utilities';

Vue.use(VueRouter);

window.Swal = require('sweetalert2');
Vue.use(VueSweetalert2);

Vue.prototype.$utils = utils;

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
