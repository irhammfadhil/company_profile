<!DOCTYPE html>
<html>
<head>
	<title>Edit This Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Edit Details</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				<form action="/product_list/details/edit/proses/{{$id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					@if($query)
					<div class="form-group">
						<b>Purity</b>
						<input type="text" class="form-control" name="purity" id="purity" value="{{$query->purity}}" placeholder="Purity" />
					</div>
					@else
					<div class="form-group">
						<b>Purity</b>
						<input type="text" class="form-control" name="purity" id="purity" value="" placeholder="Purity" />
					</div>
					@endif
					@if($query)
                    <div class="form-group">
						<b>Element Purity (%)</b>
						<input type="text" class="form-control" name="element" id="element" value="{{$query->element_purity}}" placeholder="Nama Produk" />
					</div>
					@else
					<div class="form-group">
						<b>Element Purity (%)</b>
						<input type="text" class="form-control" name="element" id="element" value="" placeholder="Nama Produk" />
					</div>
					@endif
					@if($query)
                    <div class="form-group">
						<b>Packaging</b>
						<input type="text" class="form-control" name="packaging" id="packaging" value="{{$query->packaging}}" placeholder="Nama Produk" />
					</div>
					@else
					<div class="form-group">
						<b>Packaging</b>
						<input type="text" class="form-control" name="packaging" id="packaging" value="" placeholder="Nama Produk" />
					</div>
					@endif
					<input type="submit" value="Edit this product!" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>