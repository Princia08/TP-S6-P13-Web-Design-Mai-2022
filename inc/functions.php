<?php
    
    function bdd_connection() {
        include "acces_base.php";
        return $bdd;
      }
    
    function allRechauffement() {
    $bdd= bdd_connection();
    $stmt= $bdd -> query('select * from rechauffement');
    $retour[0]=null;
    $i=0;
    while ($donnee = $stmt -> fetch()) {
      $retour[$i]=$donnee;
      $i++;
    }
        return $retour;
    }
    
    function rechauffementById($id) {
        $bdd= bdd_connection();
        $stmt= $bdd -> query('select * from rechauffement where id='.$id);
        $retour[0]=null;
        $i=0;
        while ($donnee = $stmt -> fetch()) {
          $retour[$i]=$donnee;
          $i++;
        }
            return $retour[0];
    }

    function stringToSlug($string){
      $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
      return $slug;
    }

?>