<?php
    include_once('includes/connection.php');

    session_start();
    
    // function phpAlert($msg) {
    //     echo '<script type="text/javascript">alert("' . $msg . '");</script>';
    // }

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $Email = $_POST['email'];
        $password = $_POST['password'];

        foreach($pdo->query('SELECT * from admin') as $row) {
            if($Email == $row['EMAIL'] && password_verify($password, $row['PASSWORD']))
            {
                 $_SESSION['name'] = $row['NAME'];  
                header('Location: /afsah/CMS/index.php');             
                
            }
            else {
                header('Location: /afsah/CMS/login.php');
            }
            // print_r("Name:".$row['name']);
        }

        
    }
    else{
        header('Location: /afsah/CMS/login.php');
    }

?>