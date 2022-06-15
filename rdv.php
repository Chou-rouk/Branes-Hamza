
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rendez-vous</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/23b032e4ba.js" crossorigin="anonymous"></script>
    
           
</head>
<body>
<div class="tete">
            <a href="page principale.php" class="logo"><span>N</span>utri <span>D</span>adou</a>
            <ul class="bar">
              <li class="abc"><a href="page principale.php">Accueil</a></li>
              <li class="abc"><a href="Notre_Service.php">Notre service</a></li>
              <li class="abc"><a href="Qui Nous.php">Qui sommes nous</a></li>
              <li class="abc"><a href="contact.php">Contact</a></li>
              <div class="btns">
                  <li><a href="connexion.php" class="btn-reserve">Se connecter</a></li>
              </div>
                 </ul>
        </div>
        <br><br><br><br>
        <div >
            <div class="debut">
                <div > 
                    <form action="rdv2.php"method="POST">
                        <br>
                        <center>
                        <a href="#" class="logo">Prennez vos rendez-vous en un seul click</a>
                        </center>
                        <div class="details-utulisateur">
                            <div class="ab">
                                <span><h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nom:</h3></span>
                                <input type="text"  name="nom" placeholder="Entrer votre Nom">
                            </div> <br>
                            <div class="ab">
                                <span><h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Prénom:</h3></span>
                                <input type="text"  name="prenom" placeholder="Entrer votre prénom">
                            </div><br>
                            <div class="ab">
                                <span><h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Selectionnez une date et heure pour votre rendez-vous</h3></span>
                                <input type="datetime-local" name="date_heure" />
                            </div>
                            <br>
                            <div class="ab">
                                <span><h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Votre Objectif:</h3></span>
                                <textarea name="message" class="contact-form-txtarea" placeholder="Entrer votre message" ></textarea>
                            </div>
                            <center>
                            <input type="submit" value="Confirmer" name="submit" class="contact-form-btn">
                            <br><br>
   <h3>Merci  de respecter vos rendez-vous et vous rendre au cabinet a l'heure, tout retard affect nos service , <br>
     on vous pris de bien vouloir respecter cela .</h3>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <div id=papa>
            <table>
            <tr>
            <td><ul >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Suivez-nous
                <div class="icon">
                    &emsp;&emsp;&emsp;&emsp;
                    <a href="facebook" style="color: #fff"><i class="fab fa-facebook"></i></a>
                    <a href="instagrame" style="color:#fff;"><i class="fab fa-instagram"></i></a>
                    <a href="google" style="color: #fff;"><i class="fab fa-youtube"></i></a>
                </div>
            </ul></td>
            <td> <ul> &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;</ul></td>
            <td> <ul> Email:nutridadou@gmail.com</ul></td>
            <td> <ul> &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;</ul></td>  
            <td> <ul> Téléphone:0665458978</ul></td>
            </tr>
            </table>
            </div>


</body>
</html>