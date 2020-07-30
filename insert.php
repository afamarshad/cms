<?php

    include_once("includes/connection.php"); 
        
    $re = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/"; 
    if(isset($_POST['submit']) && preg_match($re, $_POST['datecreated']) && preg_match($re, $_POST['dateupdated']) && preg_match($re, $_POST['datedeleted']) && !empty($_POST['uname']) && !empty($_POST['password']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['datecreated']) && !empty($_POST['dateupdated']) && !empty($_POST['datedeleted']))
    {
        
        $uname = $_POST['uname'];
        $Password =$_POST['password'];
        $Fname =$_POST['fname'];
        $Lname =$_POST['lname'];
        $DTCreated =$_POST['datecreated'];
        $DTUpdated =$_POST['dateupdated'];
        $DTDeleted =$_POST['datedeleted'];
        $Status =$_POST['status'];
        // $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 11));
        // print_r($hash);

        $statement = $pdo->prepare("INSERT INTO user (`username`,`password`,`fname`,`lname`,`dtcreated`,`dtupdated`,`dtdeleted`,`status`) VALUES(:uname, :pass, :fnam, :lnam, :dtcr, :dtup, :dtdel, :stat)");
        $statement->execute([
            'uname' => strval($uname),
            'pass' => strval($Password),
            'fnam' => strval($Fname),
            'lnam' => strval($Lname),
            'dtcr' => strval($DTCreated),
            'dtup' => strval($DTUpdated),
            'dtdel' => strval($DTDeleted),
            'stat' => intval($Status)
            ]);
        // $statement->rowCount();
        // // print_r($statement);

        if ($pdo->lastInsertId()) {
            // print_r("Data Inserted!");
            // echo "<script>alert('New record inserted successfully!');</script>";
            header("location:displayData.php");
            
            
        } else {
            // print_r("Data not Inserted!");
            // echo "<script>alert('Unable to insert Data!');</script>";
            header("location:displayData.php");
            

        }
    }
    else{
        // print_r("Data not Inserted!");
        // echo "<script>alert('Unable to insert Data!');</script>";
        header("location:displayData.php");
    }

?>