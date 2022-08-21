<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Skin</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class ="col-md-12">
                <h2>Add Skin</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif 

                
                <form method="post" action="{{url('save-skins')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">ID</label>
                        <input type="text" class="form-control" name="skinid"
                        placeholder="Enter ID" value ="{{old('skinid')}}">
                        @error('skinid')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="skinname"
                        placeholder="Enter Name" value ="{{old('skinname')}}">
                        @error('skinname')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Rarity</label>
                        <select name="skinrarity" class="form-control">
                            @foreach ($raritydata as $row)                                
                                <option value="{{$row->rarityID}}">
                                {{$row->rarityID}} - {{$row->rarityName}}
                                </option>
                            @endforeach
                        </select>
                        @error('skinrarity')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> <br>
                    <div class="md-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="skinprice"
                        placeholder="Enter Price" value ="{{old('skinprice')}}">
                        @error('skinprice')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Skins set</label>
                        <select name="skinset" class="form-control">
                            @foreach ($skinsetdata as $row)                                
                                <option value="{{$row->skinsetName}}">{{$row->skinSetName}}</option>
                            @endforeach
                        </select>
                        @error('skinrarity')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="skinimage"
                        placeholder="Enter Image" value ="{{old('skinimage')}}">
                        @error('skinimage')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Gun Type</label>
                        <select name="guntype" class="form-control">
                            @foreach ($gundata as $row)                                
                                <option value="{{$row->gunID}}">{{$row->gunID}} - {{$row->gunName}}</option>
                            @endforeach
                        </select>
                        @error('guntype')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> 
                    <br/>
                    <button type ="submit"class="btn btn-primary">Submit</button>
                    <a href="{{url('skins-List')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>