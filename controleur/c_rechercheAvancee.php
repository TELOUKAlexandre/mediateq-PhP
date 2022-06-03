<?php

$titre = "Recherche Avancée - Catalogue - Mediateq";

if(isset($_POST['rechercheAvance'])){
    //echo "ok";
    $titre1 = $_POST['titre1'];
    echo 'titre 1 : ' . $titre1 . "</br>";
    $titre2 = $_POST['titre2'];
    $titre3 = $_POST['titre3'];
    $et1 = $_POST['et1'];
    $et21 = $_POST['et2'];
    $search1 = $_POST['search1'];
    $search2 = $_POST['search2'];
    $search3 = $_POST['search3'];

    

    $db = new PDO('mysql:host=localhost;dbname=mediateq', 'root', '');
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM abonnee where email = '$pseudoconnect' and password = '$passconnect'";
   //"SELECT document.titre, livre.auteur, livre.collection FROM document JOIN livre ON document.id = livre.idDocument WHERE 
    //document.titre LIKE "%%";"
    //"SELECT document.titre, livre.auteur, livre.collection FROM document JOIN livre ON document.id = livre.idDocument WHERE 
    //document.titre LIKE "%%";"
    //SELECT document.titre, livre.auteur, livre.collection, descripteur.libelle,  FROM document JOIN livre ON document.id = livre.idDocument WHERE $titre1 LIKE "%$search1%" 
    //$et1 $titre2 LIKE "%$search2%" $et2 $titre3 LIKE "%$search3%";
   // echo $sql;
    $result = $db->prepare($sql);
    $result->execute();
    $row = $result->rowCount();
    $fetch= $result->fetch();
    if ($row > 0){

                  echo"<center><h5 class='text-success'>Voici le resultat de votre recherche</h5></center>";
                  
            } else{
                echo"<center><h5 class='text-danger'>La recherche a échouée</h5></center>";
            }
    
    
    
}
 


// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/header.php";
include "$racine/vue/v_rechercheAvancee.php";
include "$racine/vue/footer.php";
?>

