<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 18.12.18
 * Time: 20:58
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
<table border="1px">

    <thead>
    <tr>
        <td><?php echo "Id"; ?></td>
        <td><?php echo "First Name"; ?></td>
        <td><?php echo "Last Name"; ?></td>
        <td><?php echo "Email"; ?></td>
        <td><?php echo "Password"; ?></td>
    </tr>
    </thead>

    <tbody>

    <?php foreach($users as $user){?>
    <tr>
        <td><a href="<?php echo $link . $user->getId(); ?>"><?php echo "".$user->getId();        ?></a></td>
        <td><a href="<?php echo $link . $user->getId(); ?>"><?php echo "".$user->getFirstName(); ?></a></td>
        <td><a href="<?php echo $link . $user->getId(); ?>"><?php echo "".$user->getLastName();  ?></a></td>
        <td><a href="<?php echo $link . $user->getId(); ?>"><?php echo "".$user->getEmail();     ?></a></td>
        <td><a href="<?php echo $link . $user->getId(); ?>"><?php echo "".$user->getPassword();  ?></a></td>
    </tr>
    <?php } ?>
    </tbody>

</table>
</body>
</html>
