
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';
import ArticlesIndex from './components/articles/ArticlesIndex.vue';
import ArticlesCreate from './components/articles/ArticlesCreate.vue';
import ArticlesEdit from './components/articles/ArticlesEdit.vue';
import BooksIndex from './components/books/BooksIndex.vue';
// Books
import ManageBook from './components/books/ManageBook.vue';
import CreateBook from './components/books/CreateBook.vue';
import EditBook	from './components/books/EditBook.vue';
import ShowBook from './components/books/ShowBook.vue';
// Transaction
import TransaksiPeminjaman from './components/transaksi/TransaksiPeminjaman.vue';
import CreateTransaction from './components/transaksi/TambahTransaksi.vue';

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
	{
		path: '/', 
		components: {
			books: BooksIndex, 
		}, 
		name: 'welcome', 
	},
	{
		path: '/books', 
		component: ManageBook, 
		name: 'manageBook', 

	},
	{
		path: '/book/create', 
		component: CreateBook, 
		name: 'createBook', 
	},
	{
		path: '/transaction', 
		component: TransaksiPeminjaman,
		name: 'transaction', 
	},
	{
		path: '/transaction/create', 
		component: CreateTransaction,
		name: 'createTransaction', 
	},
]
Vue.component('example', require('./components/ExampleComponent.vue'));
const router = new VueRouter({routes});
const app = new Vue({router}).$mount('#app');
