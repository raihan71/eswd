<script>
	export default{
		render: function(createElement) {
			return createElement(
				"table",{
					ref: 'table', 
				}, []
			)
		}, 
		props: ['articles'], 
		data(){
			return{
				headers: [
					{title: 'Title', },
					{title: 'Desc', },
				],
				rows: [],
				dtHandle: null, 
			}
		},
		watch: {
			articles(val,oldVal){
				let app = this;
				app.rows = [];
				val.forEach(function(item) {
					let row = [];
					row.push(item.title);
					row.push(item.desc);
					app.rows.push(row);
				});
				app.dtHandle.clear();
				app.dtHandle.rows.add(app.rows);
				app.dtHandle.draw();
			}
		}, 
		mounted(){
			let app = this;
			app.dtHandle = $(this.$el).DataTable({
				columns: app.headers, 
				data: app.rows,
				searching: true,
				paging: true, 
				info: true,
			});
		},
	}
</script>