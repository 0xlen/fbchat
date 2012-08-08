<?php
    include_once "mem.php";
    

    try{
        $user = $mem->get('user');
        print_r( $user );
        
        foreach( $user as $onUser){
            echo "<img src=https://graph.facebook.com/"
                 . $onUser . "/picture />";
        }
        

    }catch (Exception $err){
        print_r($err);
    }

?>
