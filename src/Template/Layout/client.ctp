<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- CSS-->
    <?php
    echo $this->Html->css(['all.min','sb-admin','bootstrap.min']);
   ?>

    
  </head>

  <body class="bg-dark">

 <div class="container">
 <?= $this->Flash->render() ?>
 <?= $this->fetch('content') ?>

<?
 echo $this->Html->script(['jquery.min','bootstrap.bundle.min','jquery.easing.min','sb-admin.min']);
    ?>
    </div>
  </body>

</html>
