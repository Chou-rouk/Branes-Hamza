<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: connexion.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin</title>
</head>
<body>
<br>
<center>
<?php echo "<h1>
    Merci d'avoir entrée a Nutri-Dadou <br> 
    " . $_SESSION['username'] . " <br>  Entrez vous informations </h1>"; ?>
</center>
    



<nav>
            <center>
                <a href="#" class="logo"><span>N</span>utri <span>D</span>adou</a>
              </center>
        <div class="menuul">
            <ul class="nav-links">
                <li><a href="page principale.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Accueil</span>
                </a></li>
               
                <li><a href="Questionnaire.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Questionnaire</span>
                </a></li>
                <li><a href="votre régime.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Votre régime</span>
                </a></li>


                <li><a href="contact.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Contactez-nous</span>
                </a></li> 
            </ul>
            <ul class="logout-mode">
                <li><a href="deconnecté.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Déconnexion</span>
                </a></li>
                <br><br>
            </ul>
        </div>
    </nav>
    <center>
    <br>
            <br>
            <div class="margin">
                <span class="naissance">Quel est votre Objectif?</span>
                        &emsp;&emsp;&emsp;
                        <select>
                            <option value=""></option>
                            <option value="">Pedre du poids</option>
                            <option value="">Prendre du poids</option>
                            <option value="">Maintenir le poids</option>
                        </select>
                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <span class="naissance">Quel est votre sexe?</span>&emsp;&emsp;&emsp;&emsp;
                        <div class="radio">
                            <input type="radio" name="select" id="option-1" checked> 
                            <input type="radio" name="select" id="option-2"> 
                            <label for="option-1" class="option option-1"> 
                              <div class="dot"></div>
                              <span>Homme</span>
                            </label>
                            <label for="option-2" class="option option-2">
                              <div class="dot"></div>
                              <span>Femme</span>
                            </label>
                          </div>
                          <br>
                          <div class="container">
                            <form class="abbb">
                                &emsp;&emsp;&emsp;&emsp;Taille:
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                   &emsp;&emsp;&emsp;<input type="text" name="Inscription" id="height" placeholder="(Cm)"> <br>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;Poids Actuelle:
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="text" name="Inscription" id="weight" placeholder="(KG)"> <br>
                                <br> &emsp;&emsp;&emsp;&emsp;Poids Objectif:
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                 <input type="text" name="Inscription" id="weight2" placeholder="(KG)"> <br>
                                <br> &emsp;&emsp;&emsp;&emsp;Age:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="text" id="age" placeholder="(ans)">
                                <br>&emsp;&emsp;&emsp;  
                            </form>
                        <span class="naissance">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Niveau d'activité</span>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <select>
                            <option value=""></option>
                            <option value="">Sédentaire (Aucun exercice)</option>
                            <option value="">Légérement actif (1 à 3 fois par semaine)</option>
                            <option value="">Modérément actif actif (3 à 5 fois par semaine)</option>
                            <option value="">Trés actif</option>
                            <option value="">Extrerement actif (Grand sportif)</option>
                        </select>
                    <span class="naissance"><br> &emsp;&emsp;&emsp;&emsp;
                        Vous avez des maladies?</span>
                    <div class="radio2">&emsp;
                        <input type="radio" name="select" id="option-3" checked> 
                        <input type="radio" name="select" id="option-4"> 
                        <label for="option-3" class="option option-3"> 
                          <div class="dot"></div>
                          <span>Oui</span>
                        </label>
                        <label for="option-4" class="option option-4">
                          <div class="dot"></div>
                          <span>Non</span>
                        </label>
                      </div>
                      <br>
        si oui Choisir Votre maladies
        <form>
            &emsp;<input type="checkbox">
            <label for="maladie"> Diébete</label><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox">
            <label for="maladie">Insuffisance rénale</label><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox">
            <label for="maladie"> Maladie d'estomac</label>
            <br> <input type="checkbox">
            <label for="maladie"> Colon</label>
            <br> <input type="checkbox">
            <label for="maladie">Autre</label>
          </form>
<br>
          <span class="naissance">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Combien de fois par jour voulez vous manger?</span>
        &emsp;&emsp;&emsp;
        <select>
            <option value=""></option>
            <option value="">Deux fois (petit déjeuner, diner et 2 collations)</option>
            <option value="">Trois fois (Petit déjeuner, déjeuner et diner)</option>
            <option value="">Quatre fois (Petit déjeuner,collation, déjeuner et diner)</option>
            <option value="">Cinq fois(Petit déjeuner, déjeuner, diner et 2 collations</option>
        </select>
        <br>
        <span class="naissance">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Combient dors-tu?</span>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <select>
            <option value=""></option>
            <option value="">Moins de 5 heures</option>
            <option value="">5 à 6 heures</option>
            <option value="">7 à 8 heures</option>
            <option value="">Plus de 8 heures</option>
        </select>
        <br>
        <span class="naissance">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Combient d'eau buvez-vous?</span>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        
        <select>
            <option value=""></option>
            <option value="">Seulement du café ou du thé</option>
            <option value="">Moins de 2 verres</option>
            <option value="">2 - 6 verres</option>
            <option value="">7 - 10 verres</option>
            <option value="">Plus de 10 verres</option>
        </select>
        <br>
        <br>
        <br>
        <center>
            <button id="btn">Analyse</button>
            <div id="result"> </div>
        <br><br>
        </center>
      
            <div id="result"> </div>
        </div>
    
   
    </center>




        <script>
    window.onload = () => {
    let button = document.querySelector("#btn");
    button.addEventListener("click", calculateBMI);
};
  
function calculateBMI() {
    let height = parseInt(document
            .querySelector("#height").value);

    let weight = parseInt(document
            .querySelector("#weight").value);
    
  
    let result = document.querySelector("#result");
  

    if (height === "" || isNaN(height)) 
        result.innerHTML = "Indiquez une hauteur valide";
  
    else if (weight === "" || isNaN(weight)) 
        result.innerHTML = "Indiquez un poids valide !";

  
    else {
  
        // Fixing upto 2 decimal places
        let bmi = (weight / ((height * height) 
                            / 10000)).toFixed(2);
  
        // Dividing as per the bmi conditions
        if (bmi < 18.6) result.innerHTML =
            `Under Weight : <span>${bmi}</span>`;
  
        else if (bmi >= 18.6 && bmi < 24.9) 
            result.innerHTML = 
                `Normal : <span>${bmi}</span>`;
  
        else result.innerHTML =
            `Over Weight : <span>${bmi}</span>`;
    }
}window.onload = () => {
    let button = document.querySelector("#btn");
  

    button.addEventListener("click", calculateBMI);
};
  
function calculateBMI() {

    let height = parseInt(document
            .querySelector("#height").value);

    let weight = parseInt(document
            .querySelector("#weight").value);
  
    let result = document.querySelector("#result");
  
    if (height === "" || isNaN(height)) 
        result.innerHTML = "Indiquez une hauteur valide";
  
    else if (weight === "" || isNaN(weight)) 
        result.innerHTML = "Indiquez une hauteur valide";
  
    else {
  
        let bmi = (weight / ((height * height) 
                            / 10000)).toFixed(2);
 
        if (bmi < 18.6) result.innerHTML =
            `Votre Poids est insuffisant il faut faire un régime: 
            <span>${bmi}</span>`;
  
        else if (bmi >= 18.6 && bmi < 24.9) 
            result.innerHTML = 
                `Votr Poids est Normale : <span>${bmi}</span>`;
  
        else result.innerHTML =
            `Vous etes en surpoids il faut faire un régime : <span>${bmi}</span>`;
    }
}
</script>
</body>
</html>