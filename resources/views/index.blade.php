<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Campionat Pàdel</title>
</head>
<body class="page-home">
    <header class="header">
        <div class="header-content">
            <div class="header-content-top">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a href="#" class="navbar-brand"><h2>Campionat <span>Pàdel</span></h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <nav class="navbar-nav">
                            <a class="nav-link" href="#inici">Inici</a>
                            <a class="nav-link" href="#classificacions">Classificacions</a>
                            <a class="nav-link" href="{{url('inscripcio')}}">Inscripcions</a>
                            <a class="nav-link exp" href="#noticies">Noticies</a>
                            <a class="nav-link" href="#galeria">Galeria</a>
                        </nav>
                    </div>
                    <div class="idioma estado-1">
                        <form action="">
                            <select name="language" id="language">
                                <option value="%">idioma</option>
                            </select>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </nav>
                <div class="idioma estado-2">
                    <form action="">
                        <select name="language" id="language">
                            <option value="%">idioma</option>
                        </select>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
            <div class="header-content-middle" id="inscripcions">
                <h1>15 COMPETICIÓ DE PÀDEL A REUS 2021</h1>
                <div>
                    <a href="inscripcion.php">INSCRIU-TE</a>
                </div>
            </div>
            <div class="header-content-bottom">
                <!-- Ajuntament de Reus LOGO -->
                <figure class="ajuntament">
                    <a href="#"><img src="img/logo-ajuntament-de-reus-blanco.png" alt="Ajuntament de Reus"></a>
                </figure>
                <!-- LOGOS XARXES SOCIALS -->
                <figure class="social-media">
                    <a href="#"><img src="img/twitter.svg" alt="logo twitter"></a>
                    <a href="#"><img src="img/facebook.svg" alt="logo facebook"></a>
                    <a href="#"><img src="img/instagram.svg" alt="logo instagram"></a>
                </figure>
            </div>
        </div>

    </header>
    
    <div class="contador">
        <h3>COMPTE ENRERE PER A LA PÀDELREUS</h3>
        <div class="contador-tiempo">
            <div class="day">
                <p>217</p>
                <p>DIES</p>
            </div>
            <div class="hours">
                <p>04</p>
                <p>HORES</p>
            </div>
            <div class="minutes">
                <p>44</p>
                <p>MINUTS</p>
            </div>
        </div>
    </div>

    <main class="main" id="inici">
        <div class="main-content">
            <div class="main-content-image">
                <figure>
                    <img src="img/imatge-benviguda.jpg" alt="imatge copmetició pàdel">
                </figure>
            </div>
            <div class="main-content-text">
                <h2>Inici</h2>
                <p>Benvinguts</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit inventore, laboriosam quia, veniam libero provident tempore deserunt consectetur perferendis, unde dolor repellat dolorum molestiae! Cupiditate dolorum voluptatibus quos culpa exercitationem?</p>
            </div>
        </div>
    </main>

    <div class="clasificacions" id="classificacions">
        <div class="clasificacions-content">
            <!-- Però serà un backgroun image -->
            <h2>CLASSIFICACIONS</h2>
            <a href="#">ENTRA</a>
        </div>
    </div>

    <div class="noticies" id="noticies">
        <h2>Noticies</h2>
        <div class="noticies-content">
            <a href="#">
                <div class="noticies-1">
                    <div>
                        <p>2021-05-02</p>
                    </div>
                    <div>
                        <p class="destacado">Destacado</p>
                        <p>La Competició d'èxit</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="noticies-2">
                    <div>
                        <p>2021-05-02</p>
                    </div>
                    <div>
                        <p class="destacado">Destacado</p>
                        <p>La Competició d'èxit</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="noticies-3">
                    <div>
                        <p>2021-05-02</p>
                    </div>
                    <div>
                        <p class="destacado">Destacado</p>
                        <p>La Competició d'èxit</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="informacio">
        <div class="informacio-content">
            <div class="informacio-content-text">
                <h2>Informació</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptatibus esse omnis perspiciatis illo, perferendis dolor! Sint voluptate quis quisquam, totam molestias sapiente, voluptatem quos illo cumque ratione officia fuga.</p>
            </div>
            <div class="informacio-content-image">
                <figure>
                    <img src="img/padel6.jpg" alt="Imatge pala de pàdel">
                </figure>
            </div>
        </div>
    </div>

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
                        <a href="#">Inici</a>
                        <a href="#">Classifiacions</a>
                        <a href="{{url('inscripcio')}}">Inscripcions</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>