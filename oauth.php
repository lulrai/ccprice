<?php

  $OAuthTokenURL = "https://discordapp.com/api/oauth2/token";
  $profileURL = "https://discordapp.com/api/users/@me";
  $guildURL = $profileURL . "/guilds";

  $clientID = "325805491412402176";
  $clientSecret = "clIhbXhzi2v7v4XLxYl6G2jCkJDe_X0f";



  function curlRequest($url,$pl = [],$headers = array()) {
    $request = curl_init($url);
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    if ($pl) {
      curl_setopt($request, CURLOPT_POSTFIELDS,$pl);
    }
    curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($request);
    curl_close($request);
    return $response;
  };


  if (!isset($_GET["code"])) {
    echo "No code was given. :( I blame Raiz! Do something here."; //the user probably just found this page by luck or something. Probably echo something like "WHOA. THE HECK ARE YOU DOING HERE? GEEZ."
  } else {
    $code = trim($_GET["code"]);

    $oauthTokenReq = curlRequest("$OAuthTokenURL?client_id=$clientID&client_secret=$clientSecret&grant_type=authorization_code&code=$code",[
      "Authorization" => "Bearer" //Too lazy to make a post request. So if this produces an error. You'll know why.
    ]);

    $json = json_decode($oauthTokenReq, true);
    if (isset($json["error"])) {
      echo "Invalid request. :("; //User entered fake code or your client_id or client_secret is incorrect. D: Either way. Handle this accordingly.
      die();
    }

    $token = $json["access_token"];
    $userRequest = curlRequest($profileURL,[],array(
      "Authorization: Bearer $token"
    ));

    var_dump($userRequest);
    echo "<br />";
    $guildRequest = curlRequest($guildURL,[],array(
      "Authorization: Bearer $token"
    ));
    var_dump($guildRequest);



  }

?>
