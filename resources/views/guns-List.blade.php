<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guns List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class = "row">
            <div class ="col-md-10">
                <h2>Guns List</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif 
                <div style ="margin-right:10px; float: right;">
                    <a href="{{url('add-Guns')}}" class ="btn btn-primary"> Add </a>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Icon </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $gun)
                            <tr>
                            
                                <td>{{$gun->gunID}}</td>
                                <td>{{$gun->gunName}}</td>
                                <td>{{$gun->gunIcon}}</td>
                                <td> <a href="{{url('edit-Guns/'.$gun->gunID)}}" class ="btn btn-primary"> Edit </a> | <a href="{{url('delete-Guns/'.$gun->gunID)}}" class ="btn btn-danger"> Delete </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>