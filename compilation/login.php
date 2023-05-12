<?php
// connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "compilation";
$conn = new mysqli($host, $username, $password, $dbname);

// vérifier la connexion
if ($conn->connect_error) {
  die("erreur de connexion au serveur");

}

// récupérer les données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$num = $_POST["num"];
$age = $_POST["age"];
$lieun = $_POST["lieun"];

// préparer et exécuter la requête d'insertion
$query = "INSERT INTO user(nom,prenom,email,password,phone,age,lieu) VALUES('$nom','$prenom','$email','$pass','$num','$age','$lieun')";
$result = mysqli_query($conn,$query);

// vérifier si l'insertion a réussi
if($result)	echo "Insertion avec succes.";
else	echo "Insertion echouee.";

// fermer la connexion et la requête préparée
mysqli_close($conn);


?>