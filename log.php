<?php
    include_once "mem.php";

    if ( isset($_GET['q']) && $_GET['q'] == "timestamp" ){
        try{
            $timestamp = $mem->get('timestamp_chat');
            echo json_encode($timestamp);
        }catch (Exception $err){
            print_r($err);
        }
    }else{
        try{
            $log = $mem->get('chat');

            /*
            print_r( $userList );
            
            foreach( $userList as $onUser){
                echo "<img src=https://graph.facebook.com/"
                     . $onUser . "/picture />";
                echo "<br/>";            
            }
            */

            echo json_encode($log);

        }catch (Exception $err){
            print_r($err);
        }
    }

?>
