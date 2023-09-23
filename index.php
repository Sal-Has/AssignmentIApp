<?php
include 'includes/class.autoload.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>Sign Up</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="email" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>

            </form>
            
        </section>
        <p>All users in a database</p>
        <?php
            
            $show= new Signup();
            $show->showUsers();

        ?>
                
    
</body>
</html>