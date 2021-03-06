<!DOCTYPE html>
<html lang="es">
    <head>

        <!-- LINKS META -->

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- LINKS ICONO -->

        <link rel="icon" type="image/x-icon" href="assets/icon.png"/>
        
        <!-- LINKS Y SCRIPTS DE FUENTES -->

        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css"/>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        
        <!-- LINKS BOOTSTRAP -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!-- LINKS CSS -->

        <link href="css/styles.css" rel="stylesheet"/>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0" nonce="dqIsRKbt"></script>

        <!-- TITULO -->

        <title>CIIE La Costa</title>

    </head>
    <body>

        <!-- LINK HEADER -->

        <?php include("modulos/header.php") ?>

        <!-- ENCABEZADO -->

        <header class="masthead" style="background-image: url('assets/img/fondonoticias.png')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1>Noticias y Ofertas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- CIERRE ENCABEZADO -->

        <!-- CONTENIDO -->

        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Oferta de Formaci??n Nivel Secundario </h2>
                            <h3 class="post-subtitle">Junio - Julio 2022</h3>
                        </a>
                        <p class="post-meta">
                        CIIE's - Regi??n 18 - Inscripci??n: PARA NIVEL SECUNDARIO - Inicio de la cursada: A confirmar por el formador
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Oferta de formaci??n Nivel Primario</h2>
                            <h3 class="post-subtitle">Junio - Julio 2022</h3>
                        </a>
                        <p class="post-meta">
                        CIIE's - Regi??n 18 - Inscripci??n: PARA NIVEL PRIMARIO - Inicio de la cursada: Comienzan entre la primer y segunda semana de Junio. 
                        <br> 
                        Destinado a equipos de conducci??n, MG, Docentes de grado Educaci??n Especial y Educaci??n de J??venes, Adultos y Adultos Mayores. 
                        Profesores segun modalidad, Estudiantes avanzados del 4?? a??o del profesorado de educaci??n primaria o modalidad seg??n corresponda.
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Oferta de formaci??n Nivel Inicial </h2>
                            <h3 class="post-subtitle">Junio - Julio 2022</h3>
                        </a>
                        <p class="post-meta">
                        CIIE's - Regi??n 18 - Inscripci??n: PARA NIVEL INICIAL - Inicio de la cursada: A confirmar por el formador.
                        </p>
                    </div>
                    <hr />
                </div>      
            </div>
        </div>

        <!--
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Oferta de Formaci??n Nivel Secundario </h2>
                            <h3 class="post-subtitle">Junio - Julio 2022</h3>
                        </a>
                        <p class="post-meta">
                        CIIE's - Regi??n 18 - Inscripci??n: PARA NIVEL SECUNDARIO - Inicio de la cursada: A confirmar por el formador
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Oferta de formaci??n Nivel Primario</h2>
                            <h3 class="post-subtitle">Junio - Julio 2022</h3>
                        </a>
                        <p class="post-meta">
                        CIIE's - Regi??n 18 - Inscripci??n: PARA NIVEL PRIMARIO - Inicio de la cursada: Comienzan entre la primer y segunda semana de Junio. 
                        <br> 
                        Destinado a equipos de conducci??n, MG, Docentes de grado Educaci??n Especial y Educaci??n de J??venes, Adultos y Adultos Mayores. 
                        Profesores segun modalidad, Estudiantes avanzados del 4?? a??o del profesorado de educaci??n primaria o modalidad seg??n corresponda.
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Oferta de formaci??n Nivel Inicial </h2>
                            <h3 class="post-subtitle">Junio - Julio 2022</h3>
                        </a>
                        <p class="post-meta">
                        CIIE's - Regi??n 18 - Inscripci??n: PARA NIVEL INICIAL - Inicio de la cursada: A confirmar por el formador.
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Prueba</h2>
                            <h3 class="post-subtitle">prueba</h3>
                        </a>
                        <p class="post-meta">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, iure temporibus sapiente quasi voluptates, dolores numquam natus tempore obcaecati, reiciendis odit aspernatur laborum hic provident rerum tempora nesciunt ducimus dolorem.
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title">Prueba</h2>
                            <h3 class="post-subtitle">prueba</h3>
                        </a>
                        <p class="post-meta">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, iure temporibus sapiente quasi voluptates, dolores numquam natus tempore obcaecati, reiciendis odit aspernatur laborum hic provident rerum tempora nesciunt ducimus dolorem.
                        </p>
                    </div>
                    <hr />
                    <div class="clearfix"><a class="btn btn-primary float-right" href="#!">Siguiente Pagina ???</a></div>
                </div>
            </div>
        </div>
-->
        <hr/>

        <!-- CIERRE CONTENIDO -->

        <!-- LINK FOOTER -->

        <?php include("modulos/footer.php") ?>

        <!-- SCRIPTS DE BOOTSTRAP Y JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
        <!-- SCRIPTS -->

        <script src="js/scripts.js"></script>
        
    </body>
</html>
