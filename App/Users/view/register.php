<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 11.12.18
 * Time: 20:31
 */
 session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <form action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/?module=users&action=save'; ?>" method="POST">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="" autofocus="" />
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="" autofocus="" />
        <input type="text" class="form-control" name="email" placeholder="Email Address" required="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <!--<input type="password" class="form-control" name="password_repeat" placeholder="Repeat password" required=""/>-->
        <h5>
            Already registered? Login
            <a href="../login">here</a>!
        </h5>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
    <style>
        body {
            background: #eee !important;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-signin {
            width: 25%;
            padding: 15px 35px 45px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 30px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }

    </style>
</div>
</body>
</html>

