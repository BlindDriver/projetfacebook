<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Quizz news wefound404</title>
<link rel="stylesheet" href="alice.css" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
</head>

<body style =' background-color: rgb(19,22,34);'> <!-- Un css est prévu sur ce body -->


<div style='background-image:url("images/arriereplan2.png"); background-repeat: no-repeat; border:2px; height:600px; width:700px; margin-left: auto; margin-right: auto;'>




<?php
$appId = '844645988925334';
$appSecret = 'd39b09f2f145b6b79f6413619ddde1b1';

require_once 'facebook-php-sdk-v4-4.0-dev/autoload.php';

session_start();

use Facebook\FacebookSession;

//Initialiser le SDK
FacebookSession::setDefaultApplication($appId, $appSecret);
?>

<!-- Cadre du quizz -->
<div id="cadre_quizz" style=' height:440px; width:500px; overflow-x: auto; overflow-y: auto; border : solid 4px; border-color : rgb(35,189,216); margin-left: 100px; ' >