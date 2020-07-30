<?php
        include_once('includes/connection.php');

        $user_id = $_POST['id']; 

        $stmt = $pdo->prepare('DELETE FROM user WHERE id = :userid');
        $stmt->bindValue(':userid', $user_id,PDO::PARAM_INT);

        $stmt->execute();
        $stmt->rowCount();

        // echo json_encode($stmt);

        print_r($stmt);

?>