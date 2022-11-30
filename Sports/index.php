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

    

    $nom_branche=$_POST["nom_branche"];

    $ville_branche=$_POST["ville_branche"];

    $adresse_branche=$_POST["adresse_branche"];

    $email_branche=$_POST["email_branche"];

    $num_tel=$_POST["num_tel"];

    $url=$_POST["url"];

    /******connexion à la base de donnée********/

    $bdd=connexion();




    $bdd->exec("INSERT INTO branche VALUES('','$nom_branche','$ville_branche','$adresse_branche','$email_branche','$url')"); 

    echo $nom." a été inséré avec succès";

}


?>