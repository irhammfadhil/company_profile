<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8 Pagination Example Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
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