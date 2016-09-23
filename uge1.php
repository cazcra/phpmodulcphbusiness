<?php

session_start();
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP">
    <meta name="author" content="Anders Cramer Nielsen">
    <title>Casper Ragn - PHP - CPHBUSINESS</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- MY CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Font awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
  <?php
    //inkludere nav på siden
        include 'menu.php';
    
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>PHP Menu</h1>
            <p>Vores første opgave gik ud på, at vi skulle lave en menu/navigation ved hjælp af php. Den skulle også kunne se hvilken side man er på. Dette kan man se ved at navigationen viser navnet med rødt. Det smarte ved php er at man kan lave forskellige dokumenter og inkludere dem på sine sider. På den måde fylder en kode ikke så meget.</p>
            <p><!--<a class="btn btn-primary btn-large">Call to action!</a>-->
            </p>
        </header>


        
        <!-- inkludere semere -->
        
        <?php
        include 'semere.php';
        ?>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Casper Ragn 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
