<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-sm-4  login-left">
                <h2 class="text-center mt-5 text-lg">Inicio de sesión</h2>
                <div class="cont">
                    <img src="/img/Real-Estate-PNG-HD.png" alt="" class="img-fluid">
                </div>
            </div>
           
            <div class="col-sm-8  login-r">
                <h2 class="text-light mt-5 text-center">Ingrese sus credenciales: </h2>
                <form action="{{route('inicia-sesion')}}" method="post" class="mt-5 ">
                    @csrf
                    <div class="mb-3 row d-flex justify-content-center">
                        <label  class="col-sm-2 col-form-label text-light">Usuario</label>
                        <div class="col-sm-6">
                            <input type="text"  class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="mb-3 row d-flex justify-content-center">
                        <label for="inputPassword" class="col-sm-2 col-form-label text-light">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row d-flex justify-content-center">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>