<?php
    include_once "mem.php";

    if ( isset($_GET['q']) && $_GET['q'] == "timestamp" ){

        try{
            $timeStamp = $mem->get('timestamp_user');
            echo json_encode( $timeStamp );
        }catch (Exception $err){
            print_r($err);
        }

    }else{

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
    }
?>
