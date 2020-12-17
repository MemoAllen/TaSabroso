
<!DOCTYPE html>


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TaSabroso</title>

    <link rel="stylesheet" href="./css/login.css">


    <!--Link bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body id="bodi">


    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="Registro2.php" method="POST">
                    <div class="form-group text-center pt-3">
                        <h1>TaSabroso</h1>
                        <h5 class="text-light">Registro</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" placeholder="Ingresa tu usuario" name="usuario" id="usuario" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="email" class="form-control" placeholder="Ingresa tu correo" name="email" id="email" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="passwd" id="passwd" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" placeholder="confirme su contraseña" name="passwd2" id="passwd2" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class=" olvide1" value="Listo">
                    </div>
                    
                    <div class="form-group text-center">
                        <span><a href="./index.php" class="btn btn-info">Login</a></span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--link Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>