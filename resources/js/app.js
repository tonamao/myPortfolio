/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('portfolio-header', require('./components/PortfolioHeader.vue').default);
Vue.component('portfolio-content', require('./components/PortfolioContent.vue').default);
Vue.component('test-header', require('./components/TestHeader.vue').default);
Vue.component('editor-content', require('./components/PortfolioEditorContent.vue').default);

// Font Awesomeのcore
import { library } from "@fortawesome/fontawesome-svg-core";
// solid: 内塗り
import { fas } from "@fortawesome/free-solid-svg-icons";
// regular: 線
import { far } from "@fortawesome/free-regular-svg-icons";
// brands: ロゴ
import { fab } from "@fortawesome/free-brands-svg-icons";
// vueで使うためのもの
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

library.add(fas, far, fab);
Vue.component('font-awesome-icon', FontAwesomeIcon);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
