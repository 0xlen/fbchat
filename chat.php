<?php
    include_once "mem.php";
    include_once "session.php";

    $return = "";
    $log = $mem->get('chat');

    if ( $user ){
        if ( isset($_POST['msg']) ){
            if ( strlen($_POST['msg']) <= 255 && trim($_POST['msg']) != "" ){
                $msg = array(
                            'user' => $user,
                            'msg'  => $_POST['msg'],
                            );
                if ( !$log ){
                    $mem->set( 'chat' ,array( $msg ) );
                }else{
                    array_push( $log ,$msg );
                    $mem->set( 'chat' ,$log );
                }
                $mem->set( 'timestamp_chat' ,array( time() ) );
                $return = $_POST['msg'];
            }else{
                $return = "Hi hacker ,it is overflow.";
            }
        }
    }else{
        $return = "Please login !";
    }
    echo $return;

?>
