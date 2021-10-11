<?php

     $premier="";
     $deuxieme="";
     
     $premierb="";
     $deuxiemeb="";
                            
if(isset($_GET['envoyer'])){
    $premierA=fopen('fichier/premierGroupeA.txt',"r");  
    $premierb1=fopen('fichier/premierGroupeB.txt',"r");   

    $deuxiemeA=fopen('fichier/deuxiemeGroupeA.txt',"r");  
    $deuxiemeb1=fopen('fichier/deuxiemeGroupeB.txt',"r");  

    $demiScoreA1=$_GET['demiScore1'];
    $demiScoreA2=$_GET['demiScore2'];
                      if($demiScoreA1>$demiScoreA2){
                        $premier=fgets($premierA); 
                        $deuxieme=fgets($deuxiemeb1); 
          //Fichier pour Grande final
                      $GrandeFinalA=fopen('fichier/GrandeFinalA.txt',"w");
                       fwrite($GrandeFinalA,$premier);
                       fclose($GrandeFinalA);
          //Fichier pour Petite final
                       $PetiteFinalA=fopen('fichier/petiteFinalA.txt',"w");
                       fwrite($PetiteFinalA,$deuxieme);
                       fclose($PetiteFinalA);
          
                      }else if ($demiScoreA1<$demiScoreA2){
                        $premier=fgets($deuxiemeb1); 
                        $deuxieme=fgets($premierA); 
          //Fichier pour Grande Final
                      $GrandeFinalA=fopen('fichier/GrandeFinalA.txt',"w");
                       fwrite($GrandeFinalA,$premier);
                       fclose($GrandeFinalA);
          //Fichier pour Petite Final
                     $PetiteFinalA=fopen('fichier/petiteFinalA.txt',"w");
                       fwrite($PetiteFinalA,$deuxieme);
                        fclose($PetiteFinalA);
                      }
  
    $demiScoreB1=$_GET['demiScore1b'];
    $demiScoreB2=$_GET['demiScore2b'];

    if($demiScoreB1>$demiScoreB2){
        $premierb=fgets($premierb1); 
        $deuxiemeb=fgets($deuxiemeA); 
   //Fichier pour Grande final
           $GrandeFinalB=fopen('fichier/GrandeFinalB.txt',"w");
           fwrite($GrandeFinalB,$premierb);
           fclose($GrandeFinalB);
//Fichier pour Petite final
           $PetiteFinalB=fopen('fichier/petiteFinalB.txt',"w");
           fwrite($PetiteFinalB,$deuxiemeb);
           fclose($PetiteFinalB);
      }else if ($demiScoreB1<$demiScoreB2){
        $premierb=fgets($deuxiemeA); 
        $deuxiemeb=fgets($premierb1);
//Fichier pour Grande final
           $GrandeFinalB=fopen('fichier/GrandeFinalB.txt',"w");
           fwrite($GrandeFinalB,$premierb);
           fclose($GrandeFinalB);
//Fichier pour Petite final
           $PetiteFinalB=fopen('fichier/petiteFinalB.txt',"w");
           fwrite($PetiteFinalB,$deuxiemeb);
           fclose($PetiteFinalB); 
      }
     
      if(($demiScoreA1===$demiScoreA2) || ($demiScoreB1===$demiScoreB2)){
        ?>
        <script>
        alert ("Match Null il Faut entrer les scores a nouveau"); 
        </script>
        <?php
        include 'PhaseFinal.php';
      }

      if(!($demiScoreA1===$demiScoreA2) && !($demiScoreB1===$demiScoreB2)){
      include 'PetiteFinal.php';
      }
}










?>