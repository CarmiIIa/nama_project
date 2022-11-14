<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        
        body {
          background: #DDFFBC;
        }
        .container {
            margin-top: 130px;
            background: #91C788;
            width: 350px;
            height: 550px;
            border-radius: 30px;
        }
        h1 {
          text-align: center;
        }
        


    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
    </div>
      <form method="POST" action="{{route('register.post')}}">
      <h3 class="text-center">Halaman register</h3>
      @csrf
      <br>
      <div>
        
        <input type="email" name="email" class="form-control" placeholder="email" >
      </div><br>
      <div>
        <input type="text" name="name" class="form-control"  placeholder="Nama">
      </div><br>
      <div>
        <input type="text" name="username" class="form-control" placeholder="Username">
      </div><br>
      <div>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div><br>
      <button type="submit" value="login" class="btn btn-success">Submit</button>
      <br>
      Sudah punya account?
      <a href="/">Login disini! </a>
      </form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>