        <nav class="navbar navbar-expand-lg navbar-dark bg-cinza" id="nav">
            <div class="container px-0" style="max-width: 100%;">
                <a class="navbar-brand" href="index.php"><img src="assets/logo.png" class="logo" alt="cartaz-facil"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!--<li class="nav-item"><a class="nav-link <?if($home==1){?>active<?}?>" aria-current="page" href="#!">Soluções</a></li>-->
                        <?php if(!isset($url)){ $url =""; } ?>
                        <li class="nav-item"><a class="nav-link <?php if($beneficios==1){?>active<?php }?>" href="<?=$url;?>beneficios.php">Benefícios</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($solucoes==1){?>active<?php }?>" href="<?=$url;?>solucoes.php" >Soluções</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($segmentos==1){?>active<?php }?>" href="<?=$url;?>segmentos.php" >Segmentos</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($quemsomos==1){?>active<?php }?>" href="<?=$url;?>quem-somos.php">Quem somos</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($quemsomos2==1){?>active<?php }?>" href="<?=$url;?>quem-somos.php#parceiros">Parceiros</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($blog==1){?>active<?php }?>" href="<?=$url;?>blog.php" >Blog</a></li>
                        <li class="nav-item"><a class="btn btn-primary btn-lg btnFaleConosco px-4 me-sm-3 btnMenuEsquerda" href="<?=$url;?>contato.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
        </nav>