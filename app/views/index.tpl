<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>{$title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../vendor/twitter/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../app/resources/css/style.css">
        <script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script type="text/javascript">
            window.adblockEnabled = true;
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">{$title}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        {section name=a loop=$menu}
                            <li class="nav-item">
                                <a class="nav-link" href="#">{$menu[a]}</a>
                            </li>
                        {/section}
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <h1 class="my-4"><br>
                </h1>
            </div>  
            <div class="row">
                <div class="container align-content-center">{$ads3}</div>
            </div>
            <div class="row">
                {section name=a loop=$sorteos}
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{$sorteos[a].img}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{$sorteos[a].title}</a>
                                </h4>
                                <p class="card-text">{$sorteos[a].desc}</p>
                            </div>
                        </div>
                    </div>
                {/section}
                
            </div>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
        <center>
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-6064776652287686"
                data-ad-slot="7725767078"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
           <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
           </script>
        </center>
        <!-- <script type="text/javascript" src="../vendor/twitter/bootstrap/dist/js/bootstrap.js"></script> -->  
        <script type="text/javascript" src="adframe.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.29/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript">
            if(window.adblockEnabled) {
                swal({
                    allowOutsideClick: false,
                    confirmButton:false,
                    title: '¡Ayuda!',
                    imageUrl: '../app/resources/img/adblock.png',
                    text: 'Esta pagina vive gracias a la publicidad, deshabilita adblock y ayudanos a segir mejorando, la pagina no funcionara mientras este activado adblock',
                    confirmButtonText: 'Entendido'
                });
            }
        </script>        
    </body>
</html>
