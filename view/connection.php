 <?php 
session_start();
?>

<!-- HEAD -->
<?php require __DIR__ . "/../header.php"; ?>
 


<div class="login">
    <link rel="stylesheet" href="css/style2.css">
   
    <form method="post" action="">

    <p class="titre">Pseudo</p>
    <p class="inscri"><input type="text" name="login" value="" placeholder=" Entrez un Pseudo"></p>


      <p class="titre">Mot de passe</p>
      <p class="inscri" ><input type="password" name="password" value="" placeholder="Entrez un Mot de passe"></p>

      <div class="valide">
        <p class="inscription"> <input type="submit" name="commit" value="Insciption"></p>
        <a href="index2.php"></a>
      
      <p class="submit"><input type="submit" name="commit" value="Validé"></p>
      <a href="index3.php"></a>
      </div>
    </form>
  </div>
  

<?php require __DIR__ . "/../footer.php"; ?>
