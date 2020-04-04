window.$ = window.jQuery = require('jquery');
import 'popper.js';
import 'bootstrap';

import axios from 'axios';

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

import Vue from 'vue';
import VModal from 'vue-js-modal';

Vue.use(VModal);

import HomePage from "./views/home/HomePage";

window.bus = new Vue();

const app = new Vue({
    el: '#app',
    components: {
        HomePage
    },
});


