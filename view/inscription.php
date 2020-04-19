<?php 
session_start();
?>
<!-- HEAD -->
<?php require __DIR__ . "/../header2.php"; ?>

 <?php require __DIR__ . "/../traitement_formulaire.php"; ?>
 
<div class="login">
<link rel="stylesheet" href="css/style.css">

    <form method="post" action="">
	
        <div class="titre">Adresse Mail</div>
        <div class="inscri">
            <input type="text" name="login" value="" placeholder=" Entrez votre Email" /></div>
        <div class="titre">Pseudo</div>
        <div class="inscri">
            <input type="text" name="pseudo" value="" placeholder="Entrez un Pseudo" /></div>
        <div class="titre">Mot de passe</div>
        <div class="inscri">
            <input type="password" name="password" value="" placeholder="Entrez un Mot de passe" />
        </div>
        <div class="titre">Valider le mot de passe</div>
        <div class="inscri">
            <input type="password" name="password_confirm" value="" placeholder="resaissiser votre Mot de passe" />
        </div>
 
        <div class="submit">
            <button type="submit" name="commit">Valider</button>
        </div>
    </form>
</div>

<?php require __DIR__ . "/../footer.php"; ?>    

