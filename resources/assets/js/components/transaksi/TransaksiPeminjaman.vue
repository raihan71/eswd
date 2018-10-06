<template>
	<div class="col-md-9 col-xs-9 col-sm-9">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Beranda</a></li>
				<li class="breadcrumb-item active" arica-current="page"><a href="#">Transaksi Peminjaman</a></li>
			</ol>
		</nav>
		<div class="card card-default">
			<div class="card-header">
				Daftar Transaksi Peminjaman
			</div>
			<div class="card-body">
				<data-table :articles="filter"></data-table>
			</div>
		</div>
	</div>
</template>

<script>
	import DataTable from '../DataTable.vue';
	export default {
		components: {
			DataTable
		}, 
		data(){
			return {
				articles: [], 
				search: '', 
			}
		},
		computed: {
			filter: function() {
				let self = this;
				let search = self.search.toLowerCase();
				return self.articles.filter(function(comments) {
					return comments.title.toLowerCase().indexOf(search) !== -1 ||
						comments.desc.toLowerCase().indexOf(search) !== -1
				})
			}, 
		}, 
		mounted(){
			let app = this;
			$.ajax({
				url: '/api/articles',
				success(response){
					app.articles = response;
				}
			});
		}
	}
</script>