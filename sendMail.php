<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['emailMsg'])){
    $nome = htmlspecialchars($_POST['nome']);
    
		if(isset($_POST['emailFrom'])){
			$subject = $nome . " - " . htmlspecialchars($_POST['emailFrom']);
		}
		else{
			$subject = $nome;
		}
		
    $sender = "lord@lordofdragons.zz.vc";
    
		$to = "lordofdragons2015@gmail.com";
		$message = htmlspecialchars($_POST['emailMsg']);
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.1n";
		$headers .= "Content-type:text/html;charset=UTF-8\n";
		
		// More headers
		$headers .= "From: " .  $sender . "\n";
    $headers .= "Return-Path: ". $sender ."\n"; // return-path

   // Endereço (devidamente validado) que o seu usuário informou no contato
		mail($to,$subject,$message,$headers);
	}
	else{
		$checker = false;
	}
  header("Location: contato.php"); //Redirect the user
}
?>