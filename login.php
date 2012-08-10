<?php
    include_once "mem.php";
    include_once "session.php";
    
    if ($user) {
        //echo "<img src=https://graph.facebook.com/" . $user . "/picture />";
        $list = $mem->get('user');
        if ( !$list ){
            $mem->set( 'user' ,array($user) );
            echo "1";
        }else{
            $userList = $mem->get('user');
            if ( in_array($user,$userList) ){
                echo "user has been login.<br/>";

                //rm repeat values
                $userList = array_flip( array_flip($userList) );
                $mem->set( 'user' ,$userList ); //test
            }else{
                array_push( $userList ,$user);
                //print_r( $userList );
                $mem->set( 'user' ,$userList );
                echo "0";
            }
        }
        echo "success!<br/>";
    }
?>

    <?php if (!$user) { ?>
        You've to login using FB Login Button to see api calling result.
        <a href="<?=$loginUrl?>">Facebook Login</a>
    <?php } else { ?>
        <a href="<?=$logoutUrl?>">Facebook Logout</a>
    <?php } ?>

