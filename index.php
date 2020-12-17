
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ta Sabroso</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./social.css">
    <!--Lik de iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--LINK SNIPCART-->
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.24/default/snipcart.css" />

   





    <!--Link bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <!--SDK de Facebook-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=362506498418296&autoLogAppEvents=1" nonce="bzJbxsV4"></script>











    <!--Navegación-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ta Sabroso!!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <div class="form-group">
                            <a href="https://011e71c7add1.ngrok.io/ApiComparte/"><button type="button" class="btn btn-success">Recetas compartidas</button></a>
                        </div>
                    </li>


                    <li class="nav-item">
                        <div class="form-group">
                            <a href="mapa2.html"><button type="button" class="btn btn-success">Ubicación del Restaurante</button></a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php"> <i class="fas fa-home"></i> Home </a>
                    </li>

                    <li class="nav-item">
                    </li><wbr>

                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php"> <i class="fas fa-door-open"></i> SALIR </a>
                    </li><wbr>



                </ul>
            </div>
        </div>
    </nav>



    <h2>Ya abrimos!!</h2>
    <h3>Ta Sabroso</h3>

    <div id="carrusel" class="container">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/carruse5.png" class="d-block w-100 img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/pizzaCarruse.png" class="d-block w-100 img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/carruse4.png" class="d-block w-100 img"  alt="...">
                </div>
                <div class="carousel-item">
                    <img  src="./img/carruse6.png" class="d-block w-100 img" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h3 id="credi">El mejor restaurante, de San Miguel de Allende.</h3>
        <h4>Con el mejor servicio express ¡¡Ta Sabroso a tu disponibilidad!!</h4>


        <!--Codigo De boton de facebook-->
    </div>




    <!--Ubicacion de Facebook-->
    <div class="row">

        <!--Facebook-->
        <div class="col" style="text-align: center;">
            <div class="h3" id="face" name="face">Apoya nuestra pagina de Facebook!!</div>
            <div class="fb-page" data-href="https://www.facebook.com/TaSabroso-104408851471027/" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/TaSabroso-104408851471027/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TaSabroso-104408851471027/">TaSabroso</a></blockquote>
            </div>
        </div>
        <div class="col">
            <div class="h3" id="face" name="face"> Apoya nuestra pagina de Twitter!!</div>

            <a data-height="800" data-width="500" class="twitter-timeline" href="https://twitter.com/sabroso_ta?ref_src=twsrc%5Etfw">Tweets by sabroso_ta</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

    </div>
    <!--Se cierra el row aqui-->

   


    <!--link Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!---Instagram-->
    <script src="instagram.js"></script>

      <!--Link de Whassap-->
      <script src="https://kit.fontawesome.com/85631d96b2.js" crossorigin="anonymous"></script>

    <!---LINK PROPORCIONAL DE SNIPCART-->
    <script async src="https://cdn.snipcart.com/themes/v3.0.24/default/snipcart.js"></script>
    <div hidden id="snipcart" data-api-key="MjQ1NDZkZjMtNWU1OS00MjRkLWFiMjctYjEzZWU5YTM4ODM3NjM3Mzk2NTkxMjUwODAyNTQ2
    "></div>
  <!-- Footer -->
    
  <footer class="page-footer font-small mdb-color lighten-3 pt-4" id="pie">
    <style>
    
    #pie {
        background: black;
    }
    #letra {
        background: black;
        color: aquamarine;
    }
    
    
    </style>
    
    <div class="container">
            <div class="btn__container">
    
                <a href="https://www.instagram.com/_tasabrosomx/" class="btn">
                    <i class="fa fa-instagram"></i>
                    <span>instagram</span>
                </a>
    
                <a href="https://twitter.com/sabroso_ta" class="btn-f">
                    <i class="fa fa-twitter"></i>
                    <span>Twitter</span>
                </a>
                <a href="https://www.youtube.com/channel/UCBYoZ3vwl6XcuYS-kumD6EA" class="btn-y">
                    <i class="fa fa-youtube"></i>
                    <span>Youtube</span>
                </a>
                <a href="https://www.facebook.com/TaSabroso-104408851471027" class="btn-f">
                    <i class="fa fa-facebook"></i>
                    <span>Facebook</span>
                </a>
                <a title="Si tienes dudas 
Contactame"         id="app-whassap"
                        href="https://api.whatsapp.com/send?phone=+524151406739&amp;text=Hola!&nbsp;pueden&nbsp;ayudarme?">
                        <i  class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                </a>
                <style>
    
                #app-whassap i{
                    font-size: 63px;
                    color: forestgreen;
                }
    
                </style>
    
    
            </div>
        </div>
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" id="letra">© 2020 Ta Sabroso |
      <a > Desarrolladores: Alejandro Cruz y Guillermo Balderas</a>
    </div>
    <!-- Copyright -->
    
    </footer>
    <!-- Footer -->

    

</body>



</html>