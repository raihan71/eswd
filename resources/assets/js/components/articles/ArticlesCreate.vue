<template>
	<div>
		<div class="panel panel-default">
			<div class="panel-body">
				<form v-on:submit="submitForm()" class="form-horizontal">
					<div class="row">
						<div class="form-group col-md-12 col-xs-12 col-sm-12">
							<label class="form-control-label">Title</label>
							<input type="text" v-model="article.title" placeholder="Title" class="form-control" required="">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12 col-xs-12 col-sm-12">
							<label class="form-control-label">Description</label>
							<textarea v-model="article.desc" placeholder="Description" class="form-control" required=""></textarea>
						</div>
					</div>
					<div class="form-group pull-right">
						<button class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
						<router-link :to="{name:'showArticles'}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</router-link>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data: function() {
			return {
				article: {
					title: '',
					desc: '', 
				}
			}
		}, 
		methods: {
			submitForm(){
				var app = this;
				var newArticle = app.article;
				axios.post('/api/article/store',newArticle)
					.then(function(data) {
						app.$router.push({path: '/', });
					})
					.catch(function(error) {
						console.log(error);
						alert("Error! Could not save to database");
					});
			}
		}, 
	}
</script>