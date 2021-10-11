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
        <section class="im">
                                <?php 
                                 $premier=fopen('fichier/premierGroupeA.txt',"r");  
                                 $premierB=fopen('fichier/premierGroupeB.txt',"r");   

                                 $deuxieme=fopen('fichier/deuxiemeGroupeA.txt',"r");  
                                 $deuxiemeb=fopen('fichier/deuxiemeGroupeB.txt',"r");  
                                     ?>
    <h2>Demi-Finale</h2>
        <hr>
            <form action="PhaseFinalphp.php" methode="get">
                
        <table>
            <tr id="tete">
                <th>Demi-Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Match 13</td>
                <td><?php  echo $premier=fgets($premier);  ?> VS <?php echo $deuxiemeb=fgets($deuxiemeb);  ?></td>
                <td><input type="number" name="demiScore1" min="0"  max="10"> - <input type="number" name="demiScore2"  min="0" max="10"></td>
                
            </tr>
            <tr>
                <td>Match 14</td>
                <td><?php  echo $premierb=fgets($premierB);  ?> VS <?php  echo $deuxieme=fgets($deuxieme);  ?></td>
                <td><input type="number" name="demiScore1b" min="0"  max="10"> - <input type="number" name="demiScore2b"  min="0" max="10"></td>
                
            </tr>
            <tr>
               <td colspan="3"><input  type="submit" name='envoyer' value="valider"> </td>
           </tr>
        </table>
      
                    </form>
</section>
         
</body>
</html>