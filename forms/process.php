<?php

    if(isset($_POST['btn-send'])) {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Mesage = $_POST['msg'];

        if(empty($UserName) || empty($Email) || empty($Subject) || empty($Mesage) ){

        }else {
            $to = "rbparfait2121@gmail.com";
            if(mail($to , $Subject , $Mesage , $Email )) {
                echo("lasa");
                header("location:index.php");
            }
        }
    }

?>