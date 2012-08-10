<?php
    include_once "mem.php";
    

    try{
        $userList = $mem->get('user');
        /*
        print_r( $userList );
        
        foreach( $userList as $onUser){
            echo "<img src=https://graph.facebook.com/"
                 . $onUser . "/picture />";
            echo "<br/>";            
        }
        */

        echo json_encode($userList);

    }catch (Exception $err){
        print_r($err);
    }

?>
