<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inscripció</title>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
</head>

<body class="pg-inscripcio">
    <header class="header">
        <nav>
            <figure class="ajuntament">
                <a href="{{url('/')}}"><img src="img/logo-ajuntament-de-reus-blanco.png" alt="Ajuntament de Reus"></a>
            </figure>
            <a href="{{url('/')}}">Inici</a>
            <a href="#">Classificacions</a>
            <a href="{{url('inscripcio')}}">Inscripcions</a>
            <a href="#">Noticies</a>
            <a href="#">Galeria</a>
            <form action="">
                <select name="language" id="language">
                    <option value="%">idioma</option>
                </select>
                <input type="submit" value="Enviar">
            </form>
        </nav>
    </header>
    <main>
        <h2>Omple les teves dades!</h2>
        <div class="main-content">
            <form action="{{url('inscription')}}" method="POST" id="registrar">
            {{csrf_field()}}
                <!-- DNI -->
                <input type="text" id="dni" name="dni" placeholder="DNI" value=""><br>
                <!-- NOM -->
                <input type="text" id="nom" name="nom" placeholder="Nom..."><br>
                <!-- PRIMER COGNOM -->
                <input type="text" id="primer_cognom" name="primer_cognom" placeholder="Primer cognom..." ><br>
                <!-- SEGON COGNOM -->
                <input type="text" id="segon_cognom" name="segon_cognom" placeholder="Segon cognom..." ><br>
                <!-- NAIXEMENT -->
                <!-- https://developer.mozilla.org/es/docs/Web/HTML/Elemento/input/date -->
                <input type="date" id="data_naixement" name="data_naixement" ><br>
                <p id="categoria" class="info"></p>
                <!-- EMAIL -->
                <input type="email" id="email" name="email" placeholder="Mail..." ><br>
                <!-- SEXE -->
                <select name="sexe" id="sexe" >
                    <option value="Dona">Dona</option>
                    <option value="Home">Home</option>
                </select>
                <!-- REGISTRAR -->
                <input type="submit" value="Registrar" id="registrar" class="registre">
                <p class="warning">* No es poden registrar menors a 3 anys.</p>
                <p id="camps_buits" class="error"></p>
                <p id="dni_error" class="error"></p>
                <p id="data_error" class="error"></p>
            </form>
            @if ($errors->any())
            <div class="errores">
                <ul class="error">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <!--REVIEW -->
        @if (session('inscrip'))
        <div class="v-modal">
            <p>L'inscripció s'ha realitzar correctament</p>
            <div class="button">
                <a href="{{url('/')}}">Tornar</a>
            </div>
        </div>
        @endif
        @if (session('errorInscrip'))
        <div class="v-modal">
            <p>S'ha produït un error. Probi més tard...</p>
            <div class="button">
                <a href="{{url('/')}}">Tornar</a>
            </div>
        </div>
        @endif
        <!-- END REVIEW -->
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="columnas">
                <div class="left">
                    <h2>Campionat <span>Pàdel</span></h2>
                    <!-- LOGOS XARXES SOCIALS -->
                    <figure class="social-media">
                        <a href="#"><img src="img/twitter.svg" alt="logo twitter"></a>
                        <a href="#"><img src="img/facebook.svg" alt="logo facebook"></a>
                        <a href="#"><img src="img/instagram.svg" alt="logo instagram"></a>
                    </figure>
                </div>
                <div class="center">
                    <h4>QUICK LINKS</h4>
                    <div class="center-nav">
                        <a href="{{url('/')}}">Inici</a>
                        <a href="#">Classifiacions</a>
                        <a href="#">Inscripcions</a>
                        <a href="#">Noticies</a>
                        <a href="#">Login - Admin</a>
                        <a href="#">FeedBack</a>
                    </div>
                </div>
                <div class="right">
                    <h4>CONTACTE</h4>
                    <div class="right-text">
                        <p>20 de març de 2021</p>
                        <p>Plaça Prim</p>
                        <p>Reus</p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; Competició Pàdel. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/validar.js')}}"></script>
</body>

</html>