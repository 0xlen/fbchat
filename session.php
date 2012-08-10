<?php
    include_once dirname(__FILE__) . "/api/facebook.php";

$fbconfig['appid' ]     = "269457013167096";
$fbconfig['secret']     = "7270e6df451d6d8852ab6ea53ede41a0";
$fbconfig['baseurl']    = "http://localhost/fbchat/";

$facebook = new Facebook(
    array(
        'appId'  => $fbconfig['appid'],
        'secret' => $fbconfig['secret'],
        'cookie' => true,
    )
);

    $user = $facebook->getUser();

    $loginUrl   = $facebook->getLoginUrl(
            array(
                'scope'         => 'email,offline_access,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown',
                'redirect_uri'  => $fbconfig['baseurl']
            )
    );
    
    $logoutUrl  = $facebook->getLogoutUrl();

?>
