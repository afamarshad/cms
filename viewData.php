<?php
    include_once('includes/connection.php');
    $result = $pdo->prepare("SELECT * FROM user ORDER BY id DESC");
    $result->execute();

    for($i=0; $row = $result->fetch(); $i++)
    {  
        $rows[] = $row;
    }

    echo json_encode($rows);

?>