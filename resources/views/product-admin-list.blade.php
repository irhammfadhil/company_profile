<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Inquiry List</h1>
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                <div class="alert alert-danger">
                    {{Session::get('message')}}
                </div>
                @endif
                <a style="position: absolute; right: 0;" class="btn btn-primary" href="product_list/add" role="button">Add New Products</a>
                <br>
                <br>
                <table class="table table-hover table-borderless" id="laravel">
                   <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Technical Spec link</th>
                        <th scope="col">Action</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach($product as $p)
                    <tr>
                        <td>{{$p->product_name}}</td>
                        <td>{{$p->product_desc}}</td>
                        <td><img style="width:200px;height:200px;" src="{{$p->product_img}}"></td>
                        <td><a href="{{$p->product_technical_spec}}">{{$p->product_technical_spec}}</a></td>
                        <td><a class="btn btn-warning" href="product_list/edit/{{$p->product_id}}" role="button">Edit</a>
                        <br><br>
                        <form method="get" action="product_list/delete/{{$p->product_id}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button></li>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        <div class="row">  
            <div class="col-lg-12">
                {!! $product->links() !!}
            </div>
        </div>
    </div>
</body>  
</html>