<?php
require_once("../includes/config.php");

	define('APP_ID', '696311040504752');
	define('APP_SECRET', 'e08e5317560ad30e84ec447037e1c39a');
	define('REDIRECT_URL', 'http://localhost/foodpost/public/fblogin.php');

require_once( 'php-sdk-v4/FacebookSession.php' );
require_once( 'php-sdk-v4/FacebookRedirectLoginHelper.php' );
require_once( 'php-sdk-v4/FacebookRequest.php' );
require_once( 'php-sdk-v4/FacebookResponse.php' );

require_once( 'php-sdk-v4/FacebookSDKException.php' );
require_once( 'php-sdk-v4/FacebookRequestException.php' );
require_once( 'php-sdk-v4/FacebookAuthorizationException.php' );
require_once( 'php-sdk-v4/GraphObject.php' );
require_once( 'php-sdk-v4/Entities/AccessToken.php' );
require_once( 'php-sdk-v4/HttpClients/FacebookHttpable.php' );
require_once( 'php-sdk-v4/HttpClients/FacebookCurlHttpClient.php' );
require_once( 'php-sdk-v4/HttpClients/FacebookCurl.php' ); 

	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\Entities\AccessToken;
	use Facebook\HttpClients\FacebookHttpable;
	use Facebook\HttpClients\FacebookCurlHttpClient;
	use Facebook\HttpClients\FacebookCurl; 

FacebookSession::setDefaultApplication( APP_ID, APP_SECRET );

$helper = new FacebookRedirectLoginHelper( REDIRECT_URL );




try {

  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}


if ( isset( $session ) ) {

  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();

  $graphObject = $response->getGraphObject();


echo "name =" . $graphObject->getProperty('name') . "<br>";
echo "email =" . $graphObject->getProperty('email') . "<br>";
echo "first_name =" . $graphObject->getProperty('first_name') . "<br>";
echo "last_name =" . $graphObject->getProperty('last_name') . "<br>";
echo "link =" . $graphObject->getProperty('link') . "<br>";
echo "image =" . $graphObject->getProperty('image') . "<br>";

echo '<img src="https://graph.facebook.com/'. $graphObject->getProperty('id') .'/picture?type=square" />';

echo '<a href = '.$helper->getLogoutUrl($session,'http://localhost/foodpost/public/index.php') . '> Logout </a>'   ;


} else {

  echo ' 
  <a href="' . $helper->getLoginUrl( array('scope' => ' email,
                                                              user_birthday,
                                                              user_location,
                                                              user_work_history,
                                                              user_about_me,
                                                              user_hometown
                                                              ')) . '">Login</a>';
}