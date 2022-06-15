<! DOCTYPE html>
<html>
<head>
    <meata charest="utf-8"/>
    <title>Nutri Dadou </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
    <section class="bout" id="bout">
    <div class="cont">
        <div class="changer">Changer Votre Vie</div>
        <a href="rdv.php" class="btn1">Prennez Rendez-Vous </a>
        <a href="connexion.php" class="btn1">Consultation en ligne</a>
    </div>
    </div>
    </section>
    <br><br><br><br><br>
    
    
    
    
    
    
    
    <center>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
        <table>
            <caption class="titre-texte"><span>Q</span>ui Sommes Nous</caption>  
        </caption>
                <tr>
                    <td><a href="#"><img src="Consulta-al-Nutricionista.jpg" width="300"></a></td>
                        <td>
                            &emsp;&emsp;&emsp;Le Dr warda fait ses Études en spécialité Biologie À La Faculté des sciences Badji Mokhtar de Annaba
                            <br>&emsp;&emsp;&emsp; Puis Un Diplôme Universitaire De Diététique Et Nutrition
                             Humaine. Sa Thése De fin d'étude était Intitulé 
                             <br>&emsp;&emsp;&emsp;" La Nutrion Dans Tout Le Monde".
                             <br>&emsp;&emsp;&emsp;Elle est un spécialiste de l’alimentation et de la nutrition et déteint de ce fait une excellente connaissance 
                             <br>&emsp;&emsp;&emsp; des bienfaits et méfaits des aliments et de leur effet sur l’organisme. Donc elle aide ses patients pour traiter <br>&emsp;&emsp;&emsp;
                              les maladies de nutrition comme les diabétes, troubles digestifs ou encore hypercholestérolémie….. 
                   </td> 
                </tr>
            </table>
            <br><br>
    
            <h1 class="titre-texte"><Span>N</Span>otre Service</h1>
        </center>
    
    
    
    
    
    
    
        <div class="abb">
            <div class="box-abb">
                <div class="box">
                    <span class="nember">01</span>
                    <h3>Réequilibrage <br> Alimentaire</h3>
                    <p>est une révision complète de votre mode de vie. Il consiste notamment à prendre de nouvelles habitudes quotidiennes. 
                        comme pour le régime, mais s’inscrit sur le long terme. 
                        Il s’agit de regarder et comprendre ce que l’on mange.</p>
                </div>
                <div class="box">
                    <span class="nember">02</span><br>
                    <h3>perdre du poid</h3>
                    <p>On fait régime alimentaire pour maigrir propose des recommandations pour perdre du poids et maintenir un poids santé.
                         Il a pour objectif d'apporter à l'organisme ce dont il a besoin, quand il en a besoin. En privilégiant les bons aliments pour maigrir, 
                        vous augmentez vos chances de perdre du poids sans frustration, ni privation.</p>
                </div>
                <div class="box">
                    <span class="nember">03</span>
                    <h3>Prise du poid</h3>
                    <p>On peut trouver des solutions naturelle pour le perte de poids  avec un régime hypercalorique permet de prendre du poids pour retrouver un poids santé. 
                        Il a pour objectif de stimuler l'appétit,
                         d'intégrer des aliments riches en calories et d'éviter les aliments à densité énergétique faible.</p>
                </div>
            </div>
        </div>
    
    
    
    
        <table>        
            <tr>
                <td>
                    <div class="contact-in">
                        <div class="contact-map"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.503709668073!2d7.729923014782722!3d36.90221926965089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007cd72bec911%3A0x73335afde8188f73!2sNutridadou!5e0!3m2!1sfr!2sdz!4v1645561284641!5m2!1sfr!2sdz" width="600px" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </td>
                    <td> 
                        <h1 class="Contact"><Span>N</Span>ous Contacter</h1>
                        

                            <div>
                            <?php 
if(isset($_POST['submit'])){
    $to = "braneschourouk@gmail.com.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Email envoyé. Merci " . $first_name . ", we will contact you shortly.";
    }
?>
                            </div>
                            <form action="" method="post">
                            <input type="text" placeholder="Nom" name="first_name" class="contact-form-txt">
                            <input type="text" placeholder="Prénom" name="last_name" class="contact-form-txt">
                            <input type="text" placeholder="Email" name="email" class="contact-form-txt">
                            <textarea placeholder="Message" class="contact-form-txtarea"></textarea>
                            <input type="submit" name="Submit" value="Envoyer" class="contact-form-btn"> 
                        </form>
                   </td>
            </tr>
        </div>
    </div>
        </table>
    
        <br><br><br><br>
    
    
    
    
    
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