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
            <h3 class="text-center my-5">For {{$query[0]->product_name}}</h3>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/product_list/details/edit/proses/{{$query[0]->product_id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<b>Purity</b>
						<input type="text" class="form-control" name="purity" id="purity" value="{{$query[0]->purity}}" placeholder="Purity" />
					</div>

                    <div class="form-group">
						<b>Element Purity</b>
						<input type="text" class="form-control" name="element" id="element" value="{{$query[0]->element_purity}}" placeholder="Nama Produk" />
					</div>

                    <div class="form-group">
						<b>Packaging</b>
						<input type="text" class="form-control" name="packaging" id="packaging" value="{{$query[0]->packaging}}" placeholder="Nama Produk" />
					</div>
					<input type="submit" value="Edit this product!" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>