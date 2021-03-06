<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sense Cosméticos</title>
        <link rel="stylesheet" href="<?php echo asset('css/navbar.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/header.css');?>" />
        <link rel="stylesheet" href="<?php echo asset('css/vitrine.css');?>" />
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>

        @include('header')

        @include('navbar')

        @include('banner')

        @include('vitrine')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo asset ('bootstrap/js/bootstrap.min.js'); ?>" > </script>

    </body>

</html>

