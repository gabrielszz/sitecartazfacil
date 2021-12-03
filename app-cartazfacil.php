<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Frontpage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="js/script.js"></script>

    </head>
    <?php $beneficios = 1;?>
    <body onload="mudarCor()">
        <!-- Responsive navbar-->
        <?php include 'inc/barra-navegacao.php'; ?>
        <!-- Header-->
        <header class="bg-dark"  style="background: url(assets/sliders/slider.jpg);">
            <!--
            <section style="background-color: rgba(0, 30, 74, 0.6);">
            <div class="container px-5 py-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-12">
                        <div class="my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2 titulo-principal">APP CARTAZ FÁCIL PRO</h1>
                            <p class="lead text-white-50 mb-4 lead-cinza">Precifique toda sua loja em questão de segundos com cartazes que representam sua identidade visual e que chamem a atenção para datas comemorativas ou oportunidades sazonais.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-left">
                                <a class="btn btn-primary btn-lg btnFaleConosco px-4 me-sm-3" href="#features">Fale Conosco</a>
                                <a class="btn btn-outline-light btn-lg btnVazadoLaranja px-4" href="#!">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>-->
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom oculto px-150" id="features" >
            <div class="container px-5 my-5">
                <!--
                <div class="text-left mb-5">
                    <h2 class="fw-bolder tituloLaranja">Soluções</h2>
                    <p class="lead mb-0">Com a demanda crescente do varejo e com a necessidade de automatizar processos e padronizar a comunicação visual, desenvolvemos o Cartaz Fácil, um sistema intuitivo e moderno de precificação eletrônica. Para atender o varejo, a Cartaz Fácil atua em quatro frentes diferentes.</p>
                </div>-->
                <div class="row py-5 my-3">
                    <div class="col-lg-8 mb-md-5 mb-lg-0 md-sm-0 px-2 align-self-center">
                        <div class="row oculto" id="rowx1">
                            <h2 class="h4 fw-bolder texto-azul">APP CARTAZ FÁCIL PRO</h2>
                            <p>Crie seus próprios cartazes de ofertas para aumentar as vendas de seu mercado com o Aplicativo Cartaz Fácil Pro <BR> Aplicativo para criação de cartazes em supermercados e varejos</p>
                            <a class="text-decoration-none" href="#!">
                            <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0 px-2">
                        <div class="row oculto" id="rowx2">
                                    <img src="assets/paginas/app-cartaz-facil.png">
                        </div>
                    </div>
                </div>
                <!---------------------------------------->
                <div class="row gx-5 py-5 my-3">
                    
                    <div class="col-lg-12 mb-md-5 mb-lg-0 mb-sm-0 px-2 align-self-center textoDiv">
                        <div class="row " id="rowx1">
                            <h2 class="h4 fw-bolder texto-azul text-center">APLICATIVO PARA CRIAÇÃO DE CARTAZES</h2>
                            <p>Com o App Cartaz Fácil Pro, é possível criar cartazes de supermercado, ajudando a padronizar o processo de criação das suas campanhas regulares e também garantindo que campanhas relâmpagos sejam executadas com sucesso.
<BR>
Sua equipe de marketing pode criar todas as ofertas e campanhas, ou utilizar alguns modelos disponíveis na plataforma Cartaz Fácil. Uma vez criado a campanha, qualquer funcionário que identificar um produto sem cartaz, ele simplesmente com o celular pode imprimir e fazer o cartazeamento do PDV.</p>
                            </a>
                        </div>
                    </div>
                    
                </div>
                <!------------------------------------->
                <!---------------------------------------->
                <div class="row gx-5 py-5 my-3">
                    <div class="col-lg-7 mb-5 mb-lg-0 mb-sm-0 px-2 align-self-center">
                        <div class="row " id="rowx1">
                            <h2 class="h4 fw-bolder texto-azul">Crie cartazes no seu celular</h2>
                            <p>Passo a passo de como criar um cartaz no celular com o aplicativo Cartaz Fácil Pro</p>

<p>1. Abra o aplicativo Cartaz Fácil Pro, o cartazista que cabe no seu bolso.</p>

<p>2. Escaneie o código de barras do produto desejado.</p>

<p>3. Escolha a campanhas e modelo do cartaz.</p>

<p>4. Aperte em adicionar.</p>
                            <a class="text-decoration-none" href="#!">
                            <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-5 mb-lg-0 px-2">
                        <div class="row " id="rowx2">
                                    <img src="assets/paginas/app-cartaz-facil-2.png">
                        </div>
                    </div>
                </div>
                <!------------------------------------->
                <!---------------------------------------->
                <div class="row gx-5 py-5 my-3">
                    <div class="col-lg-5 mb-5 mb-lg-0 px-2 imagemDiv">
                        <div class="row " id="rowx2">
                                    <img src="assets/paginas/app-cartaz-facil-3.png">
                        </div>
                    </div>
                    <div class="col-lg-7 mb-5 mb-lg-0 px-2 textoDiv align-self-center">
                        <div class="row " id="rowx1">
                            <h2 class="h4 fw-bolder texto-azul">CUMPRA SEUS OBJETIVOS DE MARKETING</h2>
                            <p>Com o aplicativo Cartaz Fácil Pro você conseguira cumprir seus objetivos de criar campanhas promocionais e vender ainda mais. Fazendo a superexposição das ofertas, que geram mais compras por impulso.</p>
                            <a class="text-decoration-none" href="#!">
                            <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!------------------------------------->
                <!---------------------------------------->
                <div class="row gx-5 py-5 my-3">
                    <div class="col-lg-7 mb-md-5 mb-lg-0 md-sm-0 px-2 align-self-center">
                        <div class="row " id="rowx1">
                            <h2 class="h4 fw-bolder texto-azul">APP CARTAZ FÁCIL + CARTAZ FÁCIL PROFESSIONAL</h2>
                            <p><B>O Aplicativo Cartaz Fácil Pro complementa a versão Cartaz Fácil Professional.</b></p>

<p>Uma série de serviços, relacionados a comunicação e marketing prontos para atender as mais diversas necessidades dos varejistas, atacadistas e comércios em geral.
Cartaz Fácil é a solução que sua empresa precisa!</p>
                            <a class="text-decoration-none" href="#!">
                            <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-5 mb-lg-0 px-2">
                        <div class="row " id="rowx2">
                            <img src="assets/paginas/app-cartaz-facil-4.png">
                        </div>
                    </div>
                </div>
                <!------------------------------------->
                <!---------------------------------------->
                <div class="row gx-5 py-md-150 my-3">
                    <div class="col-lg-5 mb-5 mb-lg-0 px-5 imagemDiv">
                        <div class="row " id="rowx2">
                            <img src="assets/paginas/app-cartaz-facil-5.png" class="px-5">
                        </div>
                    </div>
                    <div class="col-lg-7 mb-md-5 mb-lg-0 md-sm-0 px-2 align-self-center textoDiv">
                        <div class="row " id="rowx1">
                            <h2 class="h4 fw-bolder texto-azul">GERE CARTAZ COM MAIS AGILIDADE</h2>
                            <p>Com o App Cartaz Fácil Pro, a geração de cartazes fica muito mais ágil e fácil, podendo ser feita por qualquer funcionário.</p>
                            <p>

Agilize o processo de criação de seus cartazes, solicite acesso ao aplicativo Cartaz Fácil.</p>
                            <a class="text-decoration-none" href="#!">
                            <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
               <div role="main" id="app-cartaz-facil-pro-83c47e9e1d41d2571576"></div>
<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
  new RDStationForms('app-cartaz-facil-pro-83c47e9e1d41d2571576-html', 'UA-116284046-1').createForm();
</script>
                <!------------------------------------->
                <!------------------------------------->
                <!---------------------------------------->
                
                <!---------------------------------------->
                
                <!------------------------------------->
               
            </div>

        </section>
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
