<?php

function getCompte()
{
	//On récupère le contenu du json
	$fileData = file_get_contents('public/FichierCompte.json');
	//On décode le json
	$FichierCompte = json_decode($fileData,true);
	//On passe la partie quiz qui ne nous sert pas dans le json
	$FichierCompte = $FichierCompte['PseudoApp'];

	
	$quizData = private_formatQuizData($quizData);

	return $FichierCompte;
}
