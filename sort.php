<?php

    session_start();
    session_destroy();
    $_SESSION = [];

    echo "<script type=\"text/javascript\">location.href='index2.html';</script>";

?>