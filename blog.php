<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema para criação de Cartazes de Ofertas Impressos - Cartaz Fácil</title>
        <!---------seção para SEO---------------->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

        <link rel="pingback" href="http://www.cartazfacil.com/xmlrpc.php" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

        <meta name="description" content="Sistema para criação de Cartazes de Ofertas Impressos! Com o ideal de uma solução simples e robusta, tenha uma ótima experiência na criação de cartazes." />
        <link rel="canonical" href="http://www.cartazfacil.com/quem-somos/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Sistema para criação de Cartazes de Ofertas Impressos - Cartaz Fácil" />
        <meta property="og:description" content="Sistema para criação de Cartazes de Ofertas Impressos! Com o ideal de uma solução simples e robusta, tenha uma ótima experiência na criação de cartazes." />
        <meta property="og:url" content="http://www.cartazfacil.com/quem-somos/" />
        <meta property="article:publisher" content="https://www.facebook.com/CartazFacil/" />
        <meta property="article:modified_time" content="2018-03-27T11:33:43+00:00" />
        <meta property="og:image" content="http://www.cartazfacil.com/wp-content/uploads/2017/10/scandocsbanner.jpg" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. tempo de leitura" />
        <meta name="twitter:data1" content="1 minuto" />


        <!------------------------------------------------------->

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="js/script.js"></script>

    </head>
    <?php $blog = 1;?>
    <body onload="mudarCor()">
        <!-- Responsive navbar-->
        <?php include 'inc/barra-navegacao.php'; ?>
        <!-- Header-->
        <header class="bg-dark" style="background: url(assets/banners/blog.jpg); background-size: cover; filter: contrast(140%); background-position: center; background-size: cover;">
            <section style="background-color: rgba(0, 60, 104, 0.5);" class="section-inteira">
            <div class="container px-5 py-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-12">
                        <div class="my-5">
                            <h1 class="display-5 fw-bolder mb-2 titulo-blog text-center" >Blog</h1>
                            <p class="lead text-white-50 mb-4"></p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom px-150">
            <div class="container px-5 my-5">
                <div class="text-left mb-5">
                    <!--<h2 class="fw-bolder tituloLaranja">Somos um grupo</h2>-->
                    <p class="lead mb-0">Fique por dentro das nossas novidades com artigos sobre os temas ligados a varejo e consumo que acompanham as transformações do mercado em todas as suas particularidades.</p>
                    <div class="text-center">
                </div>
            </div>
        </section>
<!-- -->
         
        <?php include 'inc/section-newsletter.php';?>
        <!------------------------------------------>
<?php include 'inc/array-artigos.php';?>

        <!------------------->
         <section class="py-0 border-bottom">
            <div class="container px-5 my-0">
                <div class="row gx-5 py-5 my-0">
                    <div class="col-lg-4 mb-5 mb-lg-0 px-2 direita imagemDiv">
                        <div class="row " id="rowx2">
                            <img src="<?=$imagem[$qtd-1];?>">
                        </div>
                    </div>
                    <div class="col-lg-8 mb-md-5 mb-lg-0 mb-sm-0 px-2 align-self-center textoDiv">
                        <div class="row " id="rowx1">
                            <h2 class="h4 fw-bolder tituloLaranja">Conteudo Recente</h2>
                            <p class="lead"><?=$post[$qtd-1];?><BR>
                                <a href="<?=$link[$qtd-1];?>" class="btn btn-primary btnCorSecundaria">Ler</a></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------>
         <section class="py-5 border-bottom px-150">
            <div class="container px-5 my-5">
                <div class="text-left mb-5">
                    <h2 class="fw-bolder tituloLaranja">Conteúdos</h2>
                    <p class="lead mb-0"></p>
                </div>

                <div class="row gx-5 py-4 my-3">

                <?php for($a= $qtd-2 ; $a >= 0; $a--){ ?>
                                            <!--
                    <div class="col-lg-4 mb-5 mb-lg-0 mb-sm-0 px-3 align-self-center">
                        <div class="row hoverAzul" id="rowx1" style="background-image: url('assets/sliders/slider.jpg');">
                            <div style=" height: 210px; position:relative;" class="divHoverAzul">dedede</div>
                        </div>
                        <div class="row">
                            <BR>
                            <h2 class="h4 fw-bolder" style="margin-top:20px;">Midia indoor uma nova maneira de atrair seus clientes</h2>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0 mb-sm-0 px-3 align-self-center">
                        <div class="row " id="rowx1">
                            <img src="assets/blog/blog1.jpg" style="width: 150px; width: auto;" class="divBlog">
                        </div>
                        <div class="row">
                            <BR>
                            <h2 class="h4 fw-bolder" style="margin-top:20px;">Midia indoor uma nova maneira de atrair seus clientes</h2>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0 mb-sm-0 px-3 align-self-center">
                        <div class="row " id="rowx1">
                            <img src="assets/sliders/slider.jpg" style="width: 150px; width: auto; height: 210px;" class="divBlog">
                        </div>
                        <div class="row">
                            <BR>
                            <h2 class="h4 fw-bolder" style="margin-top:20px;">Midia indoor uma nova maneira de atrair seus clientes</h2>
                            <br>
                        </div>
                    </div>-->
                    <div class="col-lg-4 mb-5 mb-lg-0 mb-sm-0 px-3 align-self-center">
                        <a href="<?=$link[$a];?>">
                        <div class="row divBlog" id="rowx1" style="background-image: url('<?=$imagem[$a];?>'); background-size: cover;">
                            <div style=" height: 210px; position:relative;" class="divBlogHover"></div>
                        </div>
                        <div class="row">
                            <BR>
                            <h2 class="h4 fw-bolder h4-blog" style="margin-top:20px;"><?=$post[$a];?></h2>
                            <br>
                        </div>
                        </a>
                    </div>
                   

                    <?php } ?>
                    </div>
        </section>
        <!---------------------------------->

        <?php include 'inc/section-newsletter.php';?>
        


           
             

            <!--------------------------------------->

        
        <!---------------------------->
        
        <!----------------->
     


        
        <!----------------------------------->
        <!------------------------>
      
        <!---------------------------->
                         
        <!---------------------------------------->

       
        
        <!-- Footer-->
        <?php include 'inc/footer.php';?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
