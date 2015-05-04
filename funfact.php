<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fun facts</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    
    <nav class="navbar navbar-inverse manavbar">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <form class="navbar-form navbar-right" role="search">
            <button class="btn btn-info navbar-right"><a href="super.php">J'ai tout lu</a></button>        
          </form>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"> 
                        
                        <?php
                            $input = array("Tout un petit texte sur les glaires parce que c'est marrant", "Collibri", "Beyoncé");
                            $rand_keys = array_rand($input);
                            echo $input[$rand_keys];
                        ?>
                        
                        </h1>
                        
                            <div class="row text-center">
                                <button class="btn btn-info"><a href="funfact.php">Gimme more</a></button>
                            </div>   
                        
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- jQuery and javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/grayscale.js"></script>

</body>

</html>
