<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: connexion.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$numero = $_POST['numero'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username,prenom, email, numero, password)
					VALUES ('$username','$prenom', '$email','$numero', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert(Enregistrement de l'utilisateur terminé.')</script>";
				$username = "";
				$prenom = "";
				$email = "";
				$numero = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('L'email ou mot de passe est incorrect')</script>";
			}
		} else {
			echo "<script>alert('L'email existe déjà.')</script>";
		}
		
	} else {
		echo "<script>alert('Le mot de passe ne correspond pas.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Inscription</title>
</head>
<body>
	<div class="photo">
		<div class="aa">
		<center>
        <a href="#" class="logo"><span>N</span>utri <span>D</span>adou</a>
      </center>
	  <div class="content">
		<form action="" method="POST" class="login-email">
			<div class="details-utulisateur">
			<div class="input-box">
              <span class="details">Nom</span>
              <input type="text" placeholder="Entrer votre Nom" name="username" value="<?php echo $username; ?>" required>
            </div>
			<div class="input-box">
              <span class="details">Prénom</span>
              <input type="text" placeholder="Entrer votre prénom" name="prenom" value="<?php echo $prenom; ?>" required>
            </div>
			<div class="input-box">
              <span class="details">Email</span>
              <div class="boxx">
                <input class="input" type="text" placeholder="Enter your email" name="email" value="<?php echo $email; ?>" required>
              </div>
            </div>
            <div class="input-box">
              <span class="details">Numéro de téléphonne</span>
              <input type="text" placeholder="Entrer votre numéro de téléphone" name="numero" value="<?php echo $numero; ?>" required>
            </div>
            <div class="input-box">
              <span class="details">Mot de passe</span>
              <input type="password" placeholder="Entrer votre Mot de passe" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-box">
              <span class="details">Confirmer votre Mot de passe</span>
              <input type="password" placeholder="Confirmer votre mot de passe" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
			<center>
				<div class="input-box">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<button name="submit" class="btn">S'inscrire</button>
			</div>
			</center>
			
          </div>
			</div>
		</form>
	  </div>
</body>

</html>