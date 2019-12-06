<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>/* 0_0 */</title>
</head>
<body>
<pre>
<?php
  

require_once("Abraham/autoload.php"); 
require_once("Abraham/src/TwitterOAuth.php"); 
use Abraham\TwitterOAuth\TwitterOAuth;
$CONSUMER_KEY         = "***********************";
$CONSUMER_SECRET      = "**********************************************";
$AT = "***************************************************";
$ATS ="*************************************";

$oauth = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET);
$accessToken = $oauth->oauth2('oauth2/token',['grant_type'=>'client_credentials']); 
$tw = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET,$AT,$ATS);
$s = $tw->get("statuses/user_timeline", ["user_id" => "*************","count" => 100]);

// var_dump($s);

for($i=10;$i<count($s);$i++){
  $del = $tw->post("statuses/destroy",["id" => $s[$i]->id]);
  echo $s[$i]->id.'<br>';
  echo $s[$i]->text.'<br><hr>';
}
?>
</pre>
</body>
</html>
