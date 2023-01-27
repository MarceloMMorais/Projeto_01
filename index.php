<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/css/brands.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/css/solid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chaves,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <title>Projeto_01</title>
</head>
<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'sobre' :
            echo '<target target="sobre" />'; 
            break;

            case 'sobre' :
            echo '<target target="servicos" />';
            break;
        }
    ?>

    <header>
        <div class="center">
        <div class="logo left"><a href="/">MMM DevSystem</a></div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <?php

    if(file_exists('pages/'.$url.'.php')) {
        include('pages/'.$url.'.php');
    }else{
        //podemos fazer o que quiser, pois a página não existe.
        if($url != 'sobre' && $url != 'servicos'){
            $paginaerro = true;
            include('pages/erro.php');
        }else{
            include('pages/home.php');
        }
    }

    ?>

    <footer <?php if (isset($paginaerro) && $paginaerro == true) echo 'class= "fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer><!--rodape-->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js" ></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php 
        if($url == 'contato') {
    ?>        
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBOUTdidy6ubk0qOH-9S_dzvmv5l18kvoM'"></script>
            <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>
</html>