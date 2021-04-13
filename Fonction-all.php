<?php 

function inscription_user($pseudo_inscription, $email_inscription, $password_inscription, $Cpassword_inscription){
		
		if($Cpassword_inscription == $password_inscription){
			if(!empty($email_inscription) && !empty($password_inscription) && !empty($pseudo_inscription)){				
				$options = ['cost' => 12,];
				$hash_pass_I = password_hash($password_inscription, PASSWORD_BCRYPT, $options);
				include("./database.php");
				$inscription_good = "yes";
				$q = $db->query("SELECT * FROM user");
				while($userI = $q->fetch()){
					if(($userI['email'] == $email_inscription) || ($userI['pseudo'] == $pseudo_inscription)){	
						$inscription_good = "no";
					}	
				}
				if($inscription_good == "yes"){
					$q = $db->prepare("INSERT INTO user(pseudo,email,password) VALUES(:pseudo,:email,:password)");
					$q->execute([
					'pseudo' => $pseudo_inscription,
					'email' => $email_inscription,
					'password' => $hash_pass_I
					]); 
					return true;
				}else{
					return false;
				}
			}
		}else{
			return false;
		}	
}

function connexion_user($pseudo_connection, $password_connection){
		
		if(!empty($pseudo_connection) && !empty($password_connection)){	
			$options = ['cost' => 12,];
			$hash_pass_C = password_hash($password_connection, PASSWORD_BCRYPT, $options);
			include("./database.php");
			$connection_good = "no";
			$q = $db->query("SELECT * FROM user");
			while($userC = $q->fetch()){
				if(($userC['pseudo'] == $pseudo_connection) && (password_verify($password_connection,$userC['password']))){
				
					//vous etes connecté
					$connection_good = "yes";
					$pseudo_connecte = $userC['pseudo'];
					$email_connecte = $userC['email'];
					
				}			
			}
			if($connection_good == "yes"){
				$_SESSION['connected'] = true;
				$_SESSION['pseudo'] = $pseudo_connecte;
				$_SESSION['email'] = $email_connecte;
				if($_POST['connexion_auto'] == "yes"){
					setcookie('pseudo',$pseudo_connecte, time() + (3600*24*35));
					setcookie('email',$email_connecte, time() + (3600*24*35));
					setcookie('password',$password_connection, time() + (3600*24*35));
				}
				return true;
				
			}else{
				return false;
			}
		}else{
			return false;
		}
		
}



?>