<template>
	<div class="col-md-9 col-sm-9 col-xs-9">
		<div class="card card-default">
			<div class="card-header"><router-link :to="{name:'manageBook'}" class="btn btn-default pull-right"><i class="fa fa-arrow-circle-left"></i> Kembali</router-link></div>
			<div class="card-body">
				<div class="container">
					<form>
						<div class="row">
							<div class="col-7">
								<div class="form-group">
									<label>Judul</label>
									<input type="text" name="judul" class="form-control" placeholder="Judul Buku..">
								</div>
								<div class="form-group">
									<label>Subjudul</label>
									<input type="text" name="penulis" class="form-control" placeholder="Subjudul Buku..">
								</div>
								<div class="form-group">
									<label>Penulis</label>
									<input type="text" name="penulis" class="form-control" placeholder="Penulis Buku..">
								</div>
								<div class="form-group">
									<label>Penerbit</label>
									<input type="text" name="penulis" class="form-control" placeholder="Penerbit Buku..">
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea placeholder="Deskripsi" rows="3"  class="form-control"></textarea>
								</div>
							</div>
							<div class="col-5">
								<div class="form-group">
									<img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
									<button class="mt-2 btn btn-lg btn-block btn-primary">Upload</button>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="0">Non-aktif</option>
										<option value="1" selected="">Aktif</option>
									</select>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group pull-right">
									<button type="submit" class="btn btn-primary">Simpan</button>
									<button type="submit" class="btn btn-danger">Batal</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>