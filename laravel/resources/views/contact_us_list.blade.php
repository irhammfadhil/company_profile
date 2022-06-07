<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inquiry List</title>
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
            <li><a href="/product_list">Product List</a></li>
            <li class="active"><a href="#">Inquiry List <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li role="separator" class="divider"></li>
                <li>
                  <form method="POST" action="/logout">
                    @csrf
                    <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="/logout" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <h1 style="text-align: center;">Inquiry List</h1>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered" id="laravel">
                   <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach($inquiry as $i)
                    <tr>
                        <td>{{$i->contact_us_name}}</td>
                        <td>{{$i->contact_us_email}}</td>
                        <td>{{$i->contact_us_phone}}</td>
                        <td>{{$i->contact_us_msg}}</td>
                        @if ($i->contact_us_status == 0)
                        <td>Not Answered</td>
                        @else
                        <td>Answered</td>
                        @endif
                        @if ($i->contact_us_status == 0)
                        <td>
                        <form method="POST" action="contact_us_list/done/{{$i->contact_us_id}}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Mark as answered</button></li>
                        </form>
                        </td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        <div class="row">  
            <div class="col-lg-12">
                {!! $inquiry->links() !!}
            </div>
        </div>
    </div>
</body>  
</html>