
<?php
$curpage = basename($_SERVER['PHP_SELF']);




    ?>
     
       
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">CR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- her er min navigation. For at få dem vist som aktive har jeg brugt php som vist nedenfor. -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="uge1.php" <?php if ($curpage =='uge1.php') { echo 'class="active"';} ?>>Assignment 1</a>
                    </li>
                    <li>
                        <a href="uge2.php" <?php if ($curpage =='uge2.php') { echo 'class="active"';} ?>>Assignment 2</a>
                    </li>
                    <li>
                        <a href="uge3.php" <?php if ($curpage =='uge3.php') { echo 'class="active"';} ?>>Assignment 3</a>
                    </li>
                   
                    <li>
                        <a href="#" <?php if ($curpage =='#') { echo 'class="active"';} ?>><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>