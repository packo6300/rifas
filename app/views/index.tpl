<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>{$title}</title>
        <link rel="stylesheet" href="../vendor/twitter/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../app/resources/css/style.css">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({
                  google_ad_client: "ca-pub-6064776652287686",
                  enable_page_level_ads: true
             });
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
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Project One</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                        </div>
                    </div>
                </div>
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
        <footer class="py-5 bg-blue-ligth">
            <div class="container">
                {$ads1}
            </div>
        </footer>
        <script type="text/javascript" src="../vendor/twitter/bootstrap/dist/js/bootstrap.min.js"> </script>        
    </body>
</html>
