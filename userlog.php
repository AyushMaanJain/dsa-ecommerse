<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login or sign up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
            <nav class="navbar white-bg navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="index.php">Devi Shah Aggraval</a>
        </div>
        <div class="">
              <ul class="nav navbar-nav navbar-right">
                  <li target="searcher" class="rep-form opener"><a><button  class="navbar-btn"><span class="glyphicon glyphicon-search"></span></button></a></li> 
    </ul>
            <form class="navbar-form navbar-right" id="searcher" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
        <div class="fixed-bg"></div>
        <div class="container-static">
            <div class="row">
                <div class="col-sm-h"></div>
                <div class="col-sm-5 card">
                    <p class="h3 center-text blued">Login</p>
                    <form class="form-group alert-link blued" action="/login.php">
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="pwd" >Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-default">Login</button>
    </div>
  
</form>

                </div>
                <div class="col-sm-1 gap"></div>
                <div class="col-sm-5 card">
                <p class="h3 center-text blued">Register</p>
                    <form class="form-group blued" action="/register.php">
  <div class="form-group">
      <label for="name">User name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter user name" name="email">
    </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-default">Register</button>
    </div>
</form>
                </div>
                <div class="col-sm-h"></div>
            </div>    
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
