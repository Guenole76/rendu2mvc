<?php 
session_start();
?>
<?php 
	$file = 'public/FichierCompte.json'; 
	
	$data = file_get_contents($file); 
	
	$obj = json_decode($data); 
            ?>

<div class="login">
    <link rel="stylesheet" href="css/style4.css">
   

    <div class="touslesroles">
    
        <div class="top">


            
                <img  id="imgtop" alt="W3Schools" src="css/top.PNG" width="200" height="170" >
            
        </div>

        <div class="jungle">

        
            
                <img  id="imgjungle" alt="W3Schools" src="css/jungle.PNG" width="200" height="170" >
            <?php 
	// accéder à l'élément approprié
	echo $obj[1]->PseudoLOL,"\n","Niveaux:",$obj[1]->Niveaux,"\n",$obj[1]->ChamionLePlusJouer;

            ?>
        </div>


        <div class="mid">

            
                <img  id="imgmid" alt="W3Schools" src="css/mid.PNG" width="200" height="170">
				<?php 
	// accéder à l'élément approprié
	echo $obj[0]->PseudoLOL,"\n","Niveaux:",$obj[0]->Niveaux,"\n",$obj[0]->ChamionLePlusJouer;

            ?>
        </div>

        <div class="adc">

            
                <img  id="imgadc" alt="W3Schools" src="css/adc.PNG" width="200" height="170">
            <?php 
	// accéder à l'élément approprié
	echo $obj[2]->PseudoLOL,"\n","Niveaux:",$obj[2]->Niveaux,"\n",$obj[2]->ChamionLePlusJouer;

            ?>
        </div>


        <div class="supp">

           
                <img  id="imgsupp" alt="W3Schools" src="css/supp.PNG" width="200" height="170">
            
        </div>

    </div>

</div>
  
  <?php require __DIR__ . "/../footer.php"; ?>
  