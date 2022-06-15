<?php
$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'form');
if(isset($_POST['submit']))
{
    if (isset($_POST['nom'])||($_POST['prenom'])||($_POST['date_heure'])||($_POST['message'])) 
    {
        $nom= $_POST['nom'];
        $pre=$_POST['prenom'];
        $date_heure=$_POST['date_heure'];
        $message= $_POST['message'];

        if(!empty($service)||($date_heure)||($message)){
            $query="INSERT INTO rendez_vous(nom,prenom,date_heure,message) VALUES ('$nom','$pre','$date_heure','$message')";

            if (!empty($query)) {

                $query_run = mysqli_query($connection,$query);
            }   
            if (!empty($query)) {
                if( $query_run) 
                {
                    echo'<script type="text/javascript"> alert("votre information effucter")</script>'; 
                }    
                else{
                    echo'<script type="text/javascript"> alert("votre information non effucter")</script>';
                }

            } 
        }
    }
}
?>
