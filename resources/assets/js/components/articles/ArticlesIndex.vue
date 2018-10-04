<template>
	<div>
	<router-link :to="{name:'createArticle'}" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Create new Article</router-link>
		<div class="clearfix"></div>
	   	<div class="panel panel-default">
	   		<div class="panel-heading">Articles List</div>
	   		<div class="panel-body">
	   			<table class="table table-bordered table-hover">
	   				<thead>
	   					<tr>
	   						<th>#</th>
	   						<th>Title</th>
	   						<th>Description</th>
	   						<th>Created At</th>
	   						<th><i class="fa fa-cog fa-lg"></i></th>
	   					</tr>
	   				</thead>
	   				<tbody>
	   					<tr v-for="(article, index) in articles">
	   						<td>{{index+1}}</td>
	   						<td>{{article.title}}</td>
	   						<td>{{article.desc}}</td>
	   						<td>{{article.created_at}}</td>
	   						<td>
	   							<router-link :to="{name:'editArticle', params:{id: article.id}}" class="btn btn-xs btn-primary">Edit</router-link>
	   							<button class="btn btn-xs btn-danger" type="button" v-on:click="deleteArticle(article.id,index)">Delete</button>
	   						</td>
	   					</tr>
	   				</tbody>
	   			</table>
	   		</div>
	   	</div>
	</div>
</template>

<script>
	export default {
		data: function() {
			return {
				articles: []
			}
		}, 
		mounted(){
			var app = this;
			axios.get('/api/articles')
				 .then(function(data) {
				 	app.articles = data.data;
				 }).catch(function(error) {
				 	console.log(error);
				 	alert("Error! Could not fetch data");
				 });
		},
		methods: {
			deleteArticle(id,index){
				if(confirm("Do you really want to delete this article?")){
					var app = this;
					axios.delete('/api/articles/'+id).then(function(data){
							 app.articles.splice(index,1);
						 }).catch(function(error){
							 alert("Error! Could not delete article");
						 });
				}
			}
		}
	}
</script>