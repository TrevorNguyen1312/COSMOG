<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skins List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class = "row">
            <div class ="col-md-10">
                <h2>Skins List</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif 
                <div style ="margin-right:10px; float: right;">
                    <a href="{{url('admin-Page')}}" class ="btn btn-danger"> Back</a>
                </div>
                <div style ="margin-right:10px; float: right;">
                    <a href="{{url('add-Skins')}}" class ="btn btn-primary">Add</a> |
                </div>
                <form action="{{ route('web.search')}}" class="search-bar" method="get">
            <input type="search" name="search" pattern=".*\S.*" required placeholder="Search..." autocomplete="off">
            <button class="search-btn" type="submit">
                <span>Search</span>
            </button>
        </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Rarity </th>
                            <th> Price </th>
                            <th> Set </th>
                            <th> Image </th>
                            <th> Gun Type </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $skin)
                            <tr>
                            
                                <td>{{$skin->skinID}}</td>
                                <td>{{$skin->skinName}}</td>
                                <td>{{$skin->skinRarity}}</td>
                                <td>{{$skin->skinPrice}}</td>
                                <td>{{$skin->skinSet}}</td>
                                <td><img src="img/Skins/{{$skin->skinImage}}" height="55px" width="160px"></td>
                                <td>{{$skin->gunType}}</td>
                                <td> <a href="{{url('edit-Skins/'.$skin->skinID)}}" class ="btn btn-primary"> Edit </a> | <a href="{{url('delete-Skins/'.$skin->skinID)}}" class ="btn btn-danger"> Delete </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>