<?php
    include_once "session.php";
    
    if ($user) {
        echo json_encode($user);
    }
?>
