

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up in Mi3ad</title>
    <link rel="stylesheet" href="css/style.css">
	<script src="authentification.js"></script>

</head>

<body>
    <div class="container">
        <img class="user-icon" src="img/default-user.png" alt="avatar">
        <h1>Sign up</h1>
		<?php
		
		if(isset( $_POST['user'])) {
			if($identique==false) {
				echo "mot de passe non identique";
			}
			
			if($error != '') {
				echo $error;
			}
		}
		
		?>
        <form action="user/profile.php" method="POST">
<div>
            
			
            <label for="user">Numero de telephone</label><label for="user">Numero de telephone</label>
            <input type="text" name="user" id="" placeholder="Numero de telephone" id="tel" onBlur="testerTel();">
			
			

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="" placeholder="Entrer votre mot de passe" id="password" onBlur="testerpass();">

            <label for="password">Confirmer le mot de passe</label>
            <input type="password" name="re-password" id="" placeholder="Confirmer le mot de passe"  id="re-password" onBlur="retesterpass();">

      
            <input type="submit" value="S'inscrire" onclick="valider();">
 </div> 
 <div>  
            <a href="../login_connection.php">Vous avez déjà un compte?</a>
 </div> 
        </form>

    </div>
    <script src="js/app.js"></script>
</body>

</html>