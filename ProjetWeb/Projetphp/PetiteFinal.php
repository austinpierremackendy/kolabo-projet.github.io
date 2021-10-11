<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <link rel="stylesheet" href="tirage.css">
        <link rel="stylesheet" href="tableau1.css">
    </head>
    <body>
        <section class="img">
                                <?php   
                                 $PetiteFinalA=fopen('fichier/petiteFinalA.txt',"r"); 
                                 $PetiteFinalB=fopen('fichier/petiteFinalB.txt',"r"); 
                                     ?>
    <h2>Petite-Finale</h2>
        <hr>
            <form action="" method="Post">
                
        <table>
            <tr id="tete">
                <th>Petite-Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Match 13</td>
                <td><?php  echo $premier=fgets($PetiteFinalA);  ?> VS <?php echo $deuxiemeb=fgets($PetiteFinalB);  ?></td>
                <td><input type="number" name="demiScore1" min="0"  max="10"> - <input type="number" name="demiScore2"  min="0" max="10"></td>
                
            </tr>
            <tr>
               <td colspan="3"><input  type="submit" name='envoyer' value="valider"> </td>
           </tr>
        </table>
</form>

    <?php  
            $troisieme="vide";
            $quatrieme="vide"; 
               if(isset($_POST['envoyer'])){
                   $score1=$_POST['demiScore1'];
                   $score2=$_POST['demiScore2'];
                   if($score1>$score2){
                       $troisieme=$premier;
                       $quatrieme=$deuxiemeb;
                   }elseif($score1<$score2){
                    $troisieme=$deuxiemeb;
                    $quatrieme=$premier;
                   }else{
                       ?>
                            <script>
                                alert("Prolongation, il faut reentrer les scores");
                            </script>
                       <?php
                   }
               }
            ?>
      
        <?php if(isset($_POST['envoyer'])):  ?>    
                <?php if(!($score1==$score2)):  ?>
                    <form method="post" action="Final1.php">
            <table class="table17">
            <tr id="tete">
                <th>Troisieme Place</th>
                <th><?php echo $troisieme ?></th>
                <th></th>
            </tr>
            <tr>
                <td>Quatrieme Place</td>
                <td><?php echo $quatrieme ?></td>
                <td></td>
                
            </tr>
            <tr>
               <td colspan="3"><input  type="submit" name='envoyer' value="Final"> </td>
           </tr>
        </table>
                </form>
        <?php endif    ?>
        <?php endif    ?>
                </section>
</body>
</html>