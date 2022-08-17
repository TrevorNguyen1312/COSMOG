<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests List</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin: top 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Guests List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Userame</th>
                            <th>Password</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $guests)
                        <tr>
                            <td>{{$guests->guestName}}</td>
                            <td>{{$guests->guestUsername}}</td>
                            <td>{{$guests->guestPassword}}</td>
                            <td>{{$guests->guestContact}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>