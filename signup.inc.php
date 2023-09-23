<?php

if(isset($_POST["submit"])){


    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate SignContr class
        include "includes/class.autoload.inc.php";
        $signup = new SignUpContr($uid,$pwd,$pwdrepeat,$email);


    // Running error handlers and user signup
        $signup->signupUser();

    // Going back to the front page
    header("location: index.php?error=none");

}