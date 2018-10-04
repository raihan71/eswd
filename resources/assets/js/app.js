
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';
import ArticlesIndex from './components/articles/ArticlesIndex.vue';
import ArticlesCreate from './components/articles/ArticlesCreate.vue';
import ArticlesEdit from './components/articles/ArticlesEdit.vue';

require('./bootstrap');
window.introJs = require('./intro.js');
window.Vue 	   = require('vue');
window.Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const routes = [
	// {
	// 	path: '/', 
	// 	components: {
	// 		articlesAll: ArticlesIndex, 
	// 	}, 
	// 	name: 'showArticles', 
	// },
	// {
	// 	path: '/user/articles/create', 
	// 	component: ArticlesCreate, 
	// 	name: 'createArticle', 
	// },
	// {
	// 	path: '/user/articles/edit/:id',
	// 	component: ArticlesEdit, 
	// 	name: 'editArticle', 
	// },
	// {
	// 	path: '/', 
	// }
]
Vue.component('example', require('./components/ExampleComponent.vue'));
const router = new VueRouter({routes});
const app = new Vue({router}).$mount('#app');
