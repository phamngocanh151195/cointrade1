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
</head>

<body class="bg-primary pdt30 pdb30">
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- register-form -->
                <div class="offset-xl-3 col-xl-6 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 ">
                    <div class="register-form">
                        <h2 class="text-center mb30">Create Your Account</h2>
                        <form>
                            <div class="form-group">
                                <label class="control-label sr-only" for="name"></label>
                                <input id="name" type="text" placeholder="user name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only" for="email"></label>
                                <input id="email" type="text" name="email" placeholder="user name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only" for="password"></label>
                                <input id="password" type="password" name="password" placeholder="create password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only" for="password"></label>
                                <input id="password" type="password" name="password" placeholder="confirm password" class="form-control" required>
                            </div>
                            <span>
    <input id="box1" type="checkbox" class="with-font">
    <label for="box1"></label>

  </span>
                            <p class="register-text">I certify that I am 18 years of age or older, and I agree to the User Agreement and<a href="#" class="btn-link"> Privacy Policy.</a></p>
                            <button type="submit" name="singlebutton" class="btn btn-default btn-lg  btn-block mb10">create Account</button>
                        </form>
                    </div>
                    <p class="text-white">Already have an account?<a href="<?php echo MAIN_URL ?>/login" class="text-yellow"> Sign In</a> <span class="pull-right"><a href="<?php echo MAIN_URL ?>/home" class="text-white">Back to Home</a></span> </p>
                </div>
                <!-- /.register-form -->
            </div>
        </div>
    </div>
    <script src="<?php echo JS ?>/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
</body>

</html>