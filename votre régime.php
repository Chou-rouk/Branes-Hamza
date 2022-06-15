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
                 <input type="text" name="Inscription" id="username" placeholder="(KG)"> <br>
                <br> &emsp;&emsp;&emsp;&emsp;Age:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <input type="text" class="" placeholder="">
                <br>&emsp;&emsp;&emsp;  
            </form>
            <button id="btn">suivant</button>
    <br><br>
      
            <div id="result"> </div>
        </div>
        <br><br>

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
  
        let bmi = (weight / ((height * height)  / 10000)).toFixed(2);
  
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
        result.innerHTML = "Indiquez une taille valide";
  
    else if (weight === "" || isNaN(weight)) 
        result.innerHTML = "Indiquez une poids valide";
  
    else {
  
        let bmi = (weight / ((height * height) / 10000)).toFixed(2);
  
        if (bmi < 18.6) result.innerHTML =
            `
            Votre programme pour prendre le poid est: <br>
            Un réquilibrage alimentaire pendand 21 jours <br><br>
            1/ Petit déjeuner:(Avant 9h) <br>
            Avant 15 min: 1verre d'eau. <br>
            - Laitage + 80g pain+ Fruit (1 portion). <br><br>
            
            2/ A 10h:
            - 7 dattes ou 1 poigné d'oléagineux <br>
            Ou 1 poignée de raisin secs<br>
            Ou 6 Carré de chocolat.<br><br>

            3/ Déjeuner: <br>
            - Légumes Ou une salade(à volonté). <br>
            - 150g Pain <br>
            ou  10cuilléres Pate ou riz.<br>
            Ou Pomme de terre.<br>
            -Fruit Ou yaourt.<br>
            - Proteine (Viande, poulet, poissons, oeufs).<br><br>

            4/ A 14h:
            - 7 dattes ou 1 poigné d'oléagineux <br>
            Ou 1 poignée de raisin secs<br>
            Ou 6 Carré de chocolat.<br><br>

            5/ A 16 h:<br>
             - La collation habituelle.<br><br>

             6/ A 18 h:<br>
             - Un yaourt + 3 c a coupe de grain de sésal.<br><br>


            7/ Diner:(20h)<br>
            - Légumes Ou une salade(à volonté). <br>
            - 150g Pain <br>
            ou  10cuilléres Pate ou riz.<br>
            Ou Pomme de terre.<br>
            -Fruit Ou yaourt.<br>
            - Proteine (Viande, poulet, poissons, oeufs).<br><br>

            8/ A 22h:<br>
            - Un lait de poul Ou des Oléagineux au miel. <br><br>`;
        else if (bmi >= 18.6 && bmi < 24.9) 
            result.innerHTML = 
                `Votre Poids est Normale Vous devez maintenir les habitudes alimentaires suivies maintenant `;
  
        else result.innerHTML =
            `Votre programme pour perdre le poid est: <br>
            Un réquilibrage alimentaire pendand 21 jours <br>
            1/ Petit déjeuner:(Avant 9h)   <br>
            Avant 15 min: 1verre d'eau. <br>
            - Lait ou dérivés de lait + 30g pain (complet ou toast ou galette) + Fruit (1 portion). <br>
            
            2/ Déjeuner: <br>
            - Légumes (tous les légumes)----> 1 Assiette ordinaire. <br>
            - 60g Pain (Complet ou toast ou galette) <br>
            ou  150g Pate ou riz (Compléte).<br>
            Ou Pomme de terre.<br>
            Ou Légumineuses <br>
            -Fruit (Sauf banane) <br>
            - Viande (100g).<br>

            3/ A 16 h:<br>
            1 - Une boite yaourt nature + fruit.<br>

            4/ Diner:<br>
            - Légumes (tous les légumes).<br>
            - Fruit (sauf banane).<br>
            - 100g viande.<br>
            - 30 g Pain (Complet ou toast ou galette).<br>
            Ou Pate Ou riz (Compléte).<br>
            Ou pomme de terre.<br>
            Ou légumineuses.<br><br>
            * Aliments interdit:<br>
            1- Laitages: lait entier, Formage gras, yaourt aromatisé.<br>
            2- Viandes: mouton gras et dérivés de viandes.<br>
            3- Féculents: pain blanc, biscuits sucrés, patisseries <br>
            4- Sucre et secreries.<br>
            5- Boissons: limonades, sirops, coca......<br><br>
            * Conseils:<br>
            1- L'alimentation doit etre repartie sur 3 repas pris a heure fixe et régulier.<br>
            2- La cuisson sera faite sans matiéres graces, ni farineux.<br>
            3- Les viandes seront grillés , bouillies, rotis et a la broche.<br>
            4- Les poissons seront cuit au four, au court bouillon.<br>
            5- Les oeufs seront cuits durs, mollets, a la coque et poches.<br>
            6- Utiliser aromate et epices.<br>
            7- Il fautvarié au maximumles modes de cuissons pour éviter la monotonie du régime.<br>
            8- Pour les crudiétés utilider les sauces a base du yaourt, citron, fine herbes.<br>

            `;
    }
}
</script>
</body>
</html>