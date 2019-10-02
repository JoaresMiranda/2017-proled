<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Joares Miranda" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("img.ic-menu").click(function(){
        console.log($(window).width())
        if ($(window).width() < 1024) {
            $("div.menu ul").toggle();
          }
        });
        $(window).resize(function(){
          $("div.menu ul").each(function(idx, obj){
            if ($(window).width() >= 1024) {
              $(obj).css('display','block');
              $("img.ic-menu").css('display', 'none');
            } else {
              $(obj).css('display','none');
              $("img.ic-menu").css('display', 'block');
            }
          });
        });
      });
      </script>

    <title><?php
        if (wp_title(' ', false)) {
            wp_title(' ');
            echo ' | ';
            bloginfo('name');
        } else {
            bloginfo('name');
            echo ' | ';
            is_home() ? bloginfo('description') : wp_title('');
        }
        ?></title>
</head>
<body>
    <div id="header">
        <h1><a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-proled-color.png" alt="Logo PROLED"></a></h1>
        <div class="menu">
            <div><img class="ic-menu" src="<?php bloginfo('template_url'); ?>/img/ic-menu.png"></div>
            <ul>
                <li><a href="#sobre-nos">Sobre nós</a></li>
                <li><a href="#nosso-servico">Nosso serviço</a></li>
                <li><a href="#onde-estamos">Onde estamos</a></li>
                <li><a href="#anuncie">Anuncie</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#login" class="botao login">Login</a></li>
            </ul>
        </div>
    </div>