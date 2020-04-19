<?php
 
require "db_connexion.php";
 
if (isset($_POST['commit'])) {
    if (isset($_POST['pseudo']) and !empty($_POST['pseudo'])) {
        if (strlen($_POST['pseudo']) > 10) {
            $sErrorPseudo = 'Pseudo trop grand, 10 caractères max.';
        } else {
            if (isset($_POST['login']) and !empty($_POST['login'])) {
                if (strlen($_POST['login']) > 255) {
                    $sErrorLogin = 'Mail trop grand, 255 caractères max.';
                } else {
                    if (isset($_POST['password']) and !empty($_POST['password'])) {
                        if (strlen($_POST['password']) > 12) {
                            $sErrorPassword = 'password trop grand, 12 caractères max.';
                        } else {
                            if (isset($_POST['password_confirm']) and !empty($_POST['password_confirm'])) {
                                echo "password confirm \n";
                                echo $_POST['password_confirm'];
                                echo "<br>";
                                
                                
                                

                                if ($_POST['password'] == $_POST['password_confirm']) {
                                    $_SESSION['pseudo'] = $_POST['pseudo'];
                                    echo "<script>alert('ça marche')</script>";
                                    header('Location: view/connection.php');
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