<?php
$c=mysqli_connect('localhost','root','','inukamedian');

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

$req="INSERT INTO etudiant VALUES ('$code','$nom','$prenom')";

$ex=$c->query($req);

if($ex){
    echo 'Inscription Reussie';
}else{
    echo 'Inscription echoue';
}
?>