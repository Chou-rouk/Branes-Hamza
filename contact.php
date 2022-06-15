<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>contact</title>
   <script src="https://kit.fontawesome.com/23b032e4ba.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="tete">
            <a href="#" class="logo"><span>N</span>utri <span>D</span>adou</a>
            <ul class="bar">
              <li class="abc"><a href="page principale.php">Accueil</a></li>
              <li class="abc"><a href="Notre_Service.php">Notre service</a></li>
              <li class="abc"><a href="Qui Nous.php">Qui sommes nous</a></li>
              <li class="abc"><a href="contact.php">Contact</a></li>
              <div class="btns">
                  <li><a href="connexion.php" class="btn-reserve">
                 
                  Se connecter</a></li>
              </div>
                 </ul>
        </div>

        <br><br><br><br><br>


<table>        
            <tr>
                <td>
                    <div class="contact-in">
                        <div class="contact-map"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.503709668073!2d7.729923014782722!3d36.90221926965089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007cd72bec911%3A0x73335afde8188f73!2sNutridadou!5e0!3m2!1sfr!2sdz!4v1645561284641!5m2!1sfr!2sdz" width="600px" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </td>
                    <td> 
                        <h1 class="Contact"><Span>N</Span>ous Contacter</h1>
                        

                            
                        <form action="" method="post">
      <input type="text" name="name" placeholder="Entrer votre Nom et prénom" required maxlength="20" class="contact-form-txt">
      <input type="email" name="email" placeholder="Entrer votre Email" required maxlength="50" class="contact-form-txt">
      <input type="number" name="number" min="0" max="9999999999" placeholder="Entrer votre numéro de téléphone" required onkeypress="if(this.value.length == 10) return false;" class="contact-form-txt">
      <textarea name="msg" class="contact-form-txtarea" placeholder="Entrer votre message" cols="30" rows="10"></textarea>
      <input type="submit" value="Envoyer" name="send" class="contact-form-btn">
   </form>
                   </td>
            </tr>
        </div>
    </div>
        </table>
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









<script src="js/script.js"></script>

</body>
</html>