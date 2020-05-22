<?php
 
try
{
	
	$bdd = new PDO('mysql:host=localhost;dbname=league_of_friend;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	
        die('Erreur : '.$e->getMessage());
} 
if (isset($_POST['commit'])) {
    if (isset($_POST['pseudo_app']) and !empty($_POST['pseudo_app'])) {
        if (strlen($_POST['pseudo_app']) > 10) {
            $sErrorPseudo = 'Pseudo trop grand, 10 caractères max.';
        } else {
            if (isset($_POST['email']) and !empty($_POST['email'])) {
                if (strlen($_POST['email']) > 255) {
                    $sErrorLogin = 'Mail trop grand, 255 caractères max.';
                } else {
                    if (isset($_POST['mdp_app']) and !empty($_POST['mdp_app'])) {
                        if (strlen($_POST['mdp_app']) > 12) {
                            $sErrorPassword = 'password trop grand, 12 caractères max.';
                        } else {
                            if (isset($_POST['password_confirm']) and !empty($_POST['password_confirm'])) {
                                echo "password confirm \n";
                                echo $_POST['password_confirm'];
                                echo "<br>";
                                
                                
                                

                                if ($_POST['mdp_app'] == $_POST['password_confirm']) {
                                    $_SESSION['pseudo_app'] = $_POST['pseudo_app'];
									$pass_hache = password_hash($_POST['mdp_app'], PASSWORD_DEFAULT);
                                    $req = $bdd->prepare('INSERT INTO joueur(pseudo_app, mdp_app, email) VALUES(?, ?, ?)');
									$req->execute(array($_POST['pseudo_app'], $pass_hache, $_POST['email']));
									header('Location: index.php');
                                } else {
                                    $sErrorPasswordComfirm = 'Les mots de passe ne correspondent pas';
                                }
                            } else {
                                $sErrorPasswordComfirm = 'Password confirm vide.';
                            }
                        }
                    } else {
                        $sErrorPassword = 'Password vide.';
                    }
                }
            } else {
                $sErrorLogin = 'Mail vide.';
            }
        }
    } else {
        $sErrorPseudo = 'Pseudo vide.';
    }
}
