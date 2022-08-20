<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gun</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class ="col-md-12">
                <h2>Add Guns</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif 

                
                <form method="post" action="{{url('save-gun')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">User ID</label>
                        <input type="text" class="form-control" name="id"
                        placeholder="Enter ID" value ="{{$data->guestID}}" readonly>
                        @error('id')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"
                        placeholder="Enter Name" value ="{{$data->guestName}}">
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username"
                        placeholder="Input Icon" value ="{{$data->guestUsername}}">
                        @error('username')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> 
                    <div class="md-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="password"
                        placeholder="Enter Name" value ="{{$data->guestPassword}}">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" name="contact"
                        placeholder="Input Icon" value ="{{$data->guestContact}}">
                        @error('contact')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> <br/>
                    <button type ="submit"class="btn btn-primary">Submit</button>
                    <a href="{{url('guns-List')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>