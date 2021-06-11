<?php
    include "connection.php";
    session_start();

    $isValid = false;
    if(empty($_SESSION['username'])){
        $isValid = false;
    }else if($_SESSION['role'] == "User"){
        $isValid = false;
    }else{
        $isValid = true;
    }
    if($isValid){
        if($_GET){
            $isbn = $_GET["isbn"];
            $query = "SELECT * FROM `book` WHERE isbn = $isbn";
            $res = mysqli_query($conn, $query);
            if($res->num_rows > 0){
                while($row = $res->fetch_array()){
                    $image = $row["image"];
                }
            }
            if(is_file($image)){
                $queryDelete1 = "DELETE FROM `book` WHERE isbn = $isbn";
                $queryDelete2 = "DELETE FROM `detail` WHERE isbn = $isbn";
                $resultDelete1 = mysqli_query($conn, $queryDelete1);
                $resultDelete2 = mysqli_query($conn, $queryDelete2);
                unlink($image);
                header("Location: admin.php");
            }
        }else{
            $isValid = false;
        }
    }
?>