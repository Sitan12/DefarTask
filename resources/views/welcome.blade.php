<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#143959; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:#FFEE52; font-size:27px; margin: 0px 50px;">DEFAR TASK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto"  >
                    <li class="nav-item ">
                        <a class="nav-link active me-5" aria-current="page" href="#" style="color:white">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#" style="color:white">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#" style="color:white">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn" type="submit" style="background-color: #FFEE52; border-radius:25px; margin: 0px 50px; color: #143959; width:200px; font-size:24px">Try For Free</button>
                </form>
            </div>
        </div>
    </nav>
  <!-- section! -->
        <section>
            <div class="container">
                <div class="row gap100">
                    <div class="col-md-6" style="margin: 90px 0px;">
                        <h2 style="font-size:20px; margin:0px 5px">By DEFAR SCI</h2><!--
                        --><p class="text">DEFAR TASK</p>
                        <p class="text1">Votre gestion de tâches<br/> au quotidien!<br/></p>
                        <br/><br/>
                        <div class="boutton">
                            <a class="btn  me-4 w-20  mt-1 p-2" href="{{ route('login') }}" style="background-color: #143959; border-radius:25px; color: #FFF; width:150px; font-size:24px">Se connecter</a>
                            <a class="btn  me-3 mt-2 p-2" href="{{ route('register') }}" style="background-color:  #067EED; border-radius:25px; color: #FFF; width:150px; font-size:24px">S'inscrire</a>
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/illustration.svg') }}" class="img-fluid" alt="personnage" />
                    </div>
                </div>
            </div>
        </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>