<?php

//check si tous les champs sont remplis
//vérifier que les mots de passe sont identiques
//vérifier que la checkbox est cochée
//vérifier que l'email contient @
//verifier la longueur du nom.prénom >3 caractères

// echo $_POST["nom"];
// echo "</br>";
// echo $_POST["prenom"];
// echo "</br>";
// echo $_POST["mail"];
// echo "</br>";
// echo $_POST["mdp"];
// echo "</br>";
// echo $_POST["confirm_mdp"];
// echo "</br>";
// echo $_POST["cocher"];

// if(empty($_POST["nom"])){
//      echo "Tous les champs ne sont pas remplis";
//  }


//check si tous les champs sont remplis ou non
        if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['mdp2'])){
        echo "Tous les champs ne sont pas remplis";
     } 


// vérifier que les mdp sont identiques

     if($_POST['mdp'] != $_POST['mdp2']){
         echo "Les mots de passe ne sont pas identiques </br>";
     }

     // vérifier que la checkbox est cochée

     if(empty($_POST['cocher'])){
          echo "Vous devez accepter les termes CGU </br>";
     }

     // //vérifier que l'email contient @

     if($_POST['mail'] != "@"){
          echo "Il n'y a pas d'email </br>";
     }
     // Ca apparaît même quand il y a le @

     //verifier la longueur du nom.prénom >3 caractères
         
          if($_POST['nom'] < 3|| $_POST['prenom'] < 3){
               echo "Votre nom et prenom doivent comporter plus de 3 caractères";
              }

     //idem qu'au-dessus, ça apparaît même quand il y a + de trois caracS
        
?>

</body>
</html>