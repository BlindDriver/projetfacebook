<?php
include("header.php");
?>

<div id="info_page" style ='height:40px; width:492px; overflow-x: auto; overflow-y: auto; border : solid 2px; border-color : rgb(255,0,0); margin-left: 2px; margin-top: 5px;'>
<h3 style='text-align:center'> Bienvenu ! </h3>
</div>

<div id="intitule_question" style ='height:280px; width:492px; overflow-x: auto; overflow-y: auto; border : solid 2px; border-color : rgb(0,255,0); margin-left: 2px; margin-top: 10px;'>

<?php

$redirectUrl = 'http://localhost/projetfacebook/index.php';

$permissions = array('email, user_birthday');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

FacebookSession::setDefaultApplication($appId, $appSecret);

$helper = new FacebookRedirectLoginHelper($redirectUrl);

try{
	$session = $helper->getSessionFromRedirect();
}	catch(FacebookRequestException $ex){
		//When facebook return an error
		echo 'Facebook error';
		}
	catch(\Exception $ex){
		//When validation fails or other local issues
		echo 'Autre erreur';
	}


if ($session) {
	$user_profile = (new FacebookRequest(
	$session, 'GET', '/me'
	))->execute()->getGraphObject(GraphUser::className());
	
	//var_dump($user_profile); // affichage données utilisateur
	
	echo "Name: " . $user_profile->getName();	
	
}

else {
?>

<h2 style='text-align:center'> Vous n'êtes pas connecté. </h2>
<h2 style='text-align:center'> Vous pouvez vous connecter maintenant avec votre compte facebook et faire le quizz ou vous connecter à la fin du quizz pour publier vous résultats sur facebook. </h2>

<?php
$loginUrl = $helper->getLoginUrl($permissions);
	echo '<a href="' . $loginUrl . '"><h3 style="text-align:center">Me connecter avec facebook</h3></a>';
}

?>
</div>

<div id="reponse" style ='height:80px; width:492px; overflow-x: auto; overflow-y: auto; border : solid 2px; border-color : rgb(0,0,255); margin-left: 2px; margin-top: 10px;'>
<button type="button" value="validation"> Démarrer le quizz </button>
</div>

<?php
include("footer.php");
?>
