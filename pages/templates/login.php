<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo $pageTitle ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo CSS ?>/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo CSS ?>/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo CSS ?>/font-awesome.min.css" rel="stylesheet">
    <!-- Fontello CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>/fontello.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
</head>

<body class="bg-primary pdt100">
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- login-form -->
                <div class="offset-xl-3 col-xl-6 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 ">
                    <div class="login-form">
                        <h2 class="text-center mb30">Sign in to CoinTrade</h2>
                        <form onsubmit = "return submitLoginForm()" method = "POST">
                            <div class="form-group">
                                <label class="control-label sr-only" for="email"></label>
                                <input id="email1" type="text"  placeholder="Email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only" for="password"></label>
                                <input id="password1" type="password" placeholder="create password" class="form-control" required>
                            </div>
                            <span>
                                <input id="box1" type="checkbox" class="with-font">
                                <label for="box1">Keep me signed in on this computer</label>
                          </span>
                            <button id = "signin" type="text"  class="btn btn-default btn-lg  btn-block mt20">Sign in</button>
                        </form>
                    </div>
                    <p class="text-white">Not a member? <a href="<?php echo MAIN_URL ?>/signup" class="text-yellow">Sign up</a><span class="pull-right"><a href="<?php echo MAIN_URL ?>/home" class="text-white">Back to Home</a> </span></p>
                </div>
                <!-- /.login-form -->
            </div>
        </div>
    </div>
    <script src="<?php echo JS ?>/jquery.min.js"></script>
    
    <script src="<?php echo JS ?>/login.js"></script>
</body>

</html>
