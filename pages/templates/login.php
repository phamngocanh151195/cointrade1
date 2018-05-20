<!DOCTYPE html>
<html lang="en">
<head>
        <title>Login V1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>/login.css">
</head>
<body>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <div class="logo"></div>
        <div class="login-block">
            <h1>Login</h1>
            <form id="login" method="POST" onsubmit="return submitLoginForm()">
                <input type="text" value="" name="username" placeholder="Username" id="username" />
                <input type="password" value="" name="password" placeholder="Password" id="password" />

                <button type="submit" form="login">Submit</button>
            </form>
        </div>

        <script src="<?php echo JS ?>/jquery.min.js"></script>

        <script>
                function submitLoginForm() {
                console.log('hello');
                alert($('#login').serialize());
                $.ajax({
                    url: 'http://45.119.82.176:8000/login/user/',
                    type: "post",
                    data: $('#login').serialize(),
                    contentType: 'application/json',
                    success: function (response) {
                        console.log(response);
                        if (("token" in response) == false) {
                        } else {
                            __token = response.token;
                            localStorage.setItem("token" , __token);
                            localStorage.setItem("login_time" , Math.floor(Date.now() / 1000));
                            console.log(__token);
                            window.location.href = 'https://google.com/';
                        }
                    },
                    error: function (a, b, c) {
                       alert(JSON.stringify(a));
                    }
                 });
            }
        </script>
</body>
</html>
