<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rarity</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class ="col-md-12">
                <h2>Add Rarity</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif 

                
                <form method="post" action="{{url('save-rarity')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">ID</label>
                        <input type="text" class="form-control" name="rarityid"
                        placeholder="Enter ID" value ="{{old('rarityid')}}">
                        @error('rarityid')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="rarityname"
                        placeholder="Enter Name" value ="{{old('rarityname')}}">
                        @error('rarityname')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Icon</label>
                        <input type="file" class="form-control" name="rarityicon"
                        placeholder="Input Icon"value ="{{old('rarityicon')}}">
                        @error('rarityicon')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> <br/>
                    <button type ="submit"class="btn btn-primary">Submit</button>
                    <a href="{{url('rarity-List')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>