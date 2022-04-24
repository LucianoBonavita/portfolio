<?php
    $pg = "index";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="inicio">
    <?php include_once "header.php";?>
    <main class="container">

        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="imagenes/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 mt-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn-blanco btn shadow">Conoce mis proyectos</a>
            </div>

        </div>
    </main>

    <footer class="container mt-5 footer">
        <div class="row">

            <div class="col-3">
                <a href="https://github.com/lucianobonavita/portfolio" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/luciano-bonavita-327111237/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <div class="col-12 col-sm-3">Sponsor <a href="https://depcsuite.com" target="_blank" title="DePCSuite">DePcSuite</a></div>
            <div class="col-12 col-sm-3"><a href="mailto:bonavitaluciano@gmail.com">bonavitaluciano@gmail.com</a></div>

        </div>
    </footer>

    <div class="warap pt-3 pb-3 px-3 bt-2">

        <a href="https://api.whatsapp.com/send?phone=541151010901" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

    </div>
</body>


</html>