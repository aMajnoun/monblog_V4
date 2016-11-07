<?php
require './Modele/modele.php';

function listerBillets()
{
    $modele = Modele::getBdd();
    $billets = $modele->getBillets();
    $lienBillet = "index.php?action=afficherBillet&id=";
    // Affichage
    require 'vue/listeBillets.php';
 }
   
 function afficherBillets($id)
{
    $modele = Modele::getBdd();
    $billet = $modele->getBillet($id);
    $commentaires = getCommentaires($id);
    require 'vue/detailsBillet.php';
 }
 
function afficherErreur($msgErreur) 
{
    require 'vue/erreur.php';
}
