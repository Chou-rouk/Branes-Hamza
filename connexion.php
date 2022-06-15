<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: Questionnaire.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: Questionnaire.php");
	} else {
		echo "<script>alert('L'email ou le mot de passe est incorrect.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Connexion</title>
</head>
<body>
	<div class="photo">
		<div class="debut">
			<div class="partie">
			<form action="" method="POST" class="login-email">
				<br>
				<center>
					<a href="#" class="logo"><span>N</span>utri <span>D</span>adou</a>
				</center>
			<div class="details-utulisateur">
			<div class="ab">
			<span class="details"> &emsp;&emsp;&emsp;Email:</span>
				<input type="email" placeholder="Entrer votre Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<br>
			<div class="ab">
			<span class="details"> &emsp;&emsp;&emsp;Mot de passe:</span>
				<input type="password" placeholder="Entrer votre Mot de passe" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<center>
				<div class="button">
				<button name="submit" class="button">Se connecter</button>
			</div>
			</center>
			
			<div class="ab">
              <div class="formm">
                <p class="link">Vous n'avez pas compte<br>
                <a href="register.php">Créer Votre Compte </a>ici</p>
            </div>

			</div>
		</form>

			</div>
		</div>
		
	</div>


	
</body>
</html>









