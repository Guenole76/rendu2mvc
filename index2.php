<?php
try {

		require('router/router2.php');
}

catch(Exception $e) {
    // Si une erreur se produit, on arrive ici
    echo "Une erreur est survenue.<br>Détails : $e";
}


$sErrorPseudo = '';
$sErrorLogin = '';
$sErrorPassword = '';
$sErrorPasswordComfirm = '';

if(isset($_POST['commit']))
{
    if (isset($_POST['pseudo']))
    {
        if (strlen($_POST['pseudo']) > 10)
        {
            $sErrorPseudo = 'Pseudo trop grand, 10 caractères max.';
        }
        elseif (empty($_POST['pseudo']))
        {
            $sErrorPseudo = 'Pseudo vide.';
        }
    }

    if (isset($_POST['login']))
    {
        if (strlen($_POST['login']) > 255)
        {
            $sErrorLogin = 'Mail trop grand, 255 caractères max.';
        }
        elseif (empty($_POST['login']))
        {
            $sErrorLogin = 'Mail vide.';
        }
    }
    if (isset($_POST['password']))
    {
        if (strlen($_POST['password']) > 12)
        {
            $sErrorPassword = 'password trop grand, 12 caractères max.';
        }
        elseif (empty($_POST['password']))
        {
            $sErrorPassword = 'Password vide.';
        }
    }
    if (isset($_POST['password_confirm']))
    {
        if (strlen($_POST['password_confirm']) > 12)
        {
            $sErrorPasswordComfirm = 'Password trop grand, 12 caractères max.';
        }
        elseif (empty($_POST['password_confirm  ']))
        {
            $sErrorPasswordComfirm = 'Password Comfirm vide.';
        }
    }
}

if (!empty($sErrorPseudo))
{
    echo '<div class="errorpseudo">'.$sErrorPseudo.'</div>';
}

if (!empty($sErrorLogin))
{
    echo '<div class="errorlogin">'.$sErrorLogin.'</div>';
}

if (!empty($sErrorPassword))
{
    echo '<div class="errorpassword">'.$sErrorPassword.'</div>';
}

if (!empty($sErrorPasswordComfirm))
{
    echo '<div class="errorpasswordcomfirm">'.$sErrorPasswordComfirm.'</div>';
}

?>