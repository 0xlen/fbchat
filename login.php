<?php
    include_once "mem.php";
    include_once "session.php";
    
    if ($user) {
        echo "<img src=https://graph.facebook.com/" . $user . "/picture />";
        $list = $mem->get('online');
        if ( !$list ){
            $mem->set( 'user' ,array($user) );
            $mem->set('online',1);
            echo "1";
        }else{
            $mem->increment('online');
            $userList = $mem->get('user');
            array_push( $userList ,$user);
            //print_r( $userList );
            $mem->set( 'user' ,$userList );
            echo "0";
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

