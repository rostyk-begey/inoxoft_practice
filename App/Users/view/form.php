<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 11.12.18
 * Time: 20:31
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/?module=users&action=save'; ?>" method="POST">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="text" name="email">
        <input type="file" name="avatar">
        <input type="submit" value="submit">
    </form>
</body>
</html>
