<?php
    include_once('includes/connection.php');
    $user_id = $_REQUEST['id']; 
    print_r("ID:".$user_id);
    // $re = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/"; 
    
    // if(isset($_POST['submit']) && preg_match($re, $_POST['datecreated']) && preg_match($re, $_POST['dateupdated']) && preg_match($re, $_POST['datedeleted']) && !empty($_POST['uname']) && !empty($_POST['password']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['datecreated']) && !empty($_POST['dateupdated']) && !empty($_POST['datedeleted']))
    // {
    //     // print_r($_POST);
        
    //     $uname = $_POST['uname'];
    //     $Password =$_POST['password'];
    //     $Fname =$_POST['fname'];
    //     $Lname =$_POST['lname'];
    //     $DTCreated =$_POST['datecreated'];
    //     $DTUpdated =$_POST['dateupdated'];
    //     $DTDeleted =$_POST['datedeleted'];
    //     $Status =$_POST['status'];

    //     $statement = $pdo->prepare("UPDATE user (`username`,`password`,`fname`,`lname`,`dtcreated`,`dtupdated`,`dtdeleted`,`status`) VALUES(:uname, :pass, :fnam, :lnam, :dtcr, :dtup, :dtdel, :stat) WHERE id= :id)");
    //     $statement->execute([
    //         'uname' => strval($uname),
    //         'pass' => strval($Password),
    //         'fnam' => strval($Fname),
    //         'lnam' => strval($Lname),
    //         'dtcr' => strval($DTCreated),
    //         'dtup' => strval($DTUpdated),
    //         'dtdel' => strval($DTDeleted),
    //         'stat' => intval($Status),
    //         'id' => intval($user_id)
    //         ]);
    //     $statement->rowCount();
    //     print_r($statement);
    // }

?>