<?php
session_start();

include('qc/qc.php');
if (isset($_POST['usr']) && isset($_POST['pwd'])) {
   
    $id = $_POST['usr'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM usr WHERE usr = '$id' AND pwd ='$pwd'";   
    $resultado_sql = $conn->query($sql);
    if($row_sql=mysqli_fetch_array($resultado_sql)){
   
        $_SESSION['id']=$row_sql['id'];
        $_SESSION['usr']=$row_sql['usr'];
        $_SESSION['pwd']=$row_sql['pwd'];
        $_SESSION['perfil']=$row_sql['perfil'];

if($row_sql['perfil']==1){ //admin 1
    
    echo "<script type=\"text/javascript\">location.href='home_config.php';</script>";
    }

elseif($row_sql['perfil']==2){ //admin 2

    echo "<script type=\"text/javascript\">location.href='home_config.php';</script>";
    
}

elseif($row_sql['perfil']==3){ //admin 3

    echo "<script type=\"text/javascript\">location.href='home_config.php';</script>";
    
}


}


else{

    session_destroy();
    $_SESSION = [];
    echo "<script type=\"text/javascript\">alert('Usuario no válido');location.href='../index2.html';</script>";


}
}