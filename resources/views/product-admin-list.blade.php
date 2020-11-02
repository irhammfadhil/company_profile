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
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/dashboards">PT. IRHAMINDO LAKSONO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Product List <span class="sr-only">(current)</span></a></li>
            <li><a href="/contact_us_list">Inquiry List</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Sign out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <h1 style="text-align: center;">Product List</h1>
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                  @if(Session::get('message') == 'Product exists!')
                  <div class="alert alert-danger">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      {{Session::get('message')}}
                  </div>
                  @elseif(Session::get('message') == 'Data successfully updated!')
                  <div class="alert alert-success" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      {{Session::get('message')}}
                  </div>
                  @endif
                  
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
                        <th scope="col">Price</th>
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
                        <td>{{$p->product_price}}</td>
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