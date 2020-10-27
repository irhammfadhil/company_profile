<!DOCTYPE html>
<html>
<head>
	<title>Edit This Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Edit This Product</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				@foreach($product as $p)
 
				<form action="/product_list/edit/proses/{{$p->product_id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<b>Nama Produk</b>
						<input type="text" class="form-control" name="name" id="name" value="{{$p->product_name}}" placeholder="Nama Produk" />
					</div>

					<div class="form-group">
						<b>Deskripsi Produk</b>
						<textarea class="form-control" name="keterangan">{{$p->product_desc}}</textarea>
					</div>

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="image" value="{{$p->product_img}}">
					</div>

					<div class="form-group">
						<b>Link Technical Spec</b>
						<input type="text" class="form-control" name="link" id="link" value="{{$p->product_technical_spec}}" placeholder="Link Technical Spec" />
					</div>
					<input type="submit" value="Edit this product!" class="btn btn-primary">
				@endforeach
				</form>
			</div>
		</div>
	</div>
</body>
</html>