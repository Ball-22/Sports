<?php




function connexion()

{   

    try

                    {

                         $bdd = new PDO('mysql:host=localhost;dbname=psp', 'root', '');

                    }

                catch (Exception $e)

                    {

                          echo 'il y a une Erreur : ' . $e->getMessage() ;

                    }

                    return $bdd;

}






if(isset($_POST['Enregistrer']))

{

    

    $nom_prenom=$_POST["nom_prenom"];

    $sujet=$_POST["sujet"];

    $email=$_POST["email"];

   
    /******connexion à la base de donnée********/

    $bdd=connexion();




    $bdd->exec("INSERT INTO branche VALUES('','$nom_prenom','$sujet','$email')"); 

    echo $nom." a été inséré avec succès";

}


?>