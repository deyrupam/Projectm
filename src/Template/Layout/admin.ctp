<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <!-- CSS-->
    <?php
    echo $this->Html->css(['bootstrap.min','all.min','style_01','sb-admin']);
   ?>
    

    <!-- Page level plugin CSS-->
    <!--<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->

    <!-- Custom styles for this template-->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

  </head>

  <body id="page-top">

    
    <!-- Bootstrap core JavaScript-->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    
    

 

<?php
    echo $this->Html->script(['jquery.min','bootstrap.bundle.min','jquery.easing.min','sb-admin.min']);
?>

  </body>

</html>
