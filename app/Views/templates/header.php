<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= esc($title ?: 'Segurança Digital - IFSP'); ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

<?= $this->renderSection('content'); ?>

<?= $this->render('templates\footer') ?: 'Fallback title'  ?>




<?php //var_dump($this); ?>
<?php //exit(); ?>
