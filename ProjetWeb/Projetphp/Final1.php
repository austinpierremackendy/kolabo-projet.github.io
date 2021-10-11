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
        <section class="final">
    <?php 
                                 $GrandeFinalA=fopen('fichier/GrandeFinalA.txt',"r");
                                 $GrandeFinalB=fopen('fichier/GrandeFinalB.txt',"r");  
                                 ?>
    <h2>Finale</h2>
        <hr>
            <form action="" method="Post">
                
        <table>
            <tr id="tete">
                <th>Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Match 13</td>
                <td><?php  echo $premier=fgets($GrandeFinalA);  ?> VS <?php echo $deuxiemeb=fgets($GrandeFinalB);  ?></td>
                <td><input type="number" name="score11" min="0"  max="10"> - <input type="number" name="score12"  min="0" max="10"></td>
                
            </tr>
            <tr>
               <td colspan="3"><input  type="submit" name='valider' value="valider"> </td>
           </tr>
        </table>
</form>
<?php  
            $troisieme="vide";
            $quatrieme="vide"; 
               if(isset($_POST['valider'])){
                   $score1=$_POST['score11'];
                   $score2=$_POST['score12'];
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
      
        <?php if(isset($_POST['valider'])):  ?>    
                <?php if(!($score1==$score2)):  ?>
                    <form method="post" action="Final1.php">
            <table class>
            <tr id="tete">
                <th bgcolor="black">Equipe Championne</th>
                <th><?php echo $troisieme ?></th>
                <th><img src="../image5/cup.jfif" width="80px"  ></th>
            </tr>
            <tr>
                <td>deuxieme Place</td>
                <td><?php echo $quatrieme ?></td>
                <td></td>
                
            </tr>
        </table>
                </form>
        <?php endif    ?>
        <?php endif    ?>
        
</section>   
</body>
</html>