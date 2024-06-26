<?php

    session_start();

    if(isset($_SESSION['logar'])){
        session_destroy();
        //unset($_SESSION[logar])
        unset($_SESSION['logar']);
    } else {
        session_destroy();
        header("location: ../index.php");
    }

    ?>