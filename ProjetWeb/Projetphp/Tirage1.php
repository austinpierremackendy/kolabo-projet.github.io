
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        
        <link rel="stylesheet" href="tableau1.css">
    </head>
    <body>
        <section >
        <div class="body">
        <h2>Liste des equipes</h2>
        <hr>

        <table>
 <form action=" " method="GET">
            <tr id="tete">
                <th>1er tete de serie</th>
                <th>2eme tete de serie</th>
                <th>3eme tete de serie</th>
                <th>4eme tete de serie</th>
            </tr>
            <tr>
                <td>Brezil</td>
                <td>France</td>
                <td>Espagne</td>
                <td>Portugal</td>
            </tr>
            <tr>
                <td>Argentine</td>
                <td>Italie</td>
                <td>Allemagne</td>
                <td>Haiti</td>
            </tr>

            <tr class="bouton">
                <td colspan=4> <input type="submit" value="Tirage" name="tirage"></td>
            </tr>
                
</form>
                  
        </table>

        <?php
                   
             include  'tiragephp.php';
            
        ?>
                
     <?php if(isset($_GET['tirage'])):  ?>    
        <div class="back">
        <table class="table">
            <tr id="tete">
                <th>Tete de serie</th>
                <th>Groupe A</th>
                <th>Group B</th>
            </tr>
           <tr>
                <td>1ere tete de serie(TDS)</td>
                <td><?php  echo $tirage1 ?></td>
                <td><?php  echo $tirageb1 ?></td>
                
            </tr>
            <tr>
                <td>2eme tete de serie(TDS)</td>
                <td><?php  echo $tirage2 ?></td>
                <td><?php  echo $tirageb2 ?></td>
                
            </tr>
            <tr>
                <td>3eme tete de serie(TDS)</td>
                <td><?php  echo $tirage3 ?></td>
                <td><?php  echo $tirageb3 ?></td>
                
            </tr>
            <tr>
                <td>4eme tete de serie(TDS)</td>
                <td><?php  echo $tirage4 ?></td>
                <td><?php  echo $tirageb4 ?></td>
               
            </tr>
        
        </table>
     </diV>      
            <?php

        $GroupA1=fopen("fichier/GroupeA1.txt","w");
          fwrite($GroupA1,$tirage1);
          fclose($GroupA1);

          $GroupA2=fopen("fichier/GroupeA2.txt","w");
          fwrite($GroupA2,$tirage2);
          fclose($GroupA2);

          $GroupA3=fopen("fichier/GroupeA3.txt","w");
          fwrite($GroupA3,$tirage3);
          fclose($GroupA3);

          $GroupA4=fopen("fichier/GroupeA4.txt","w");
          fwrite($GroupA4,$tirage4);
          fclose($GroupA4);
?>

 <?php

  $GroupB1=fopen("fichier/GroupeB1.txt","w");
  fwrite($GroupB1,$tirageb1);
  fclose($GroupB1);

  $GroupB2=fopen("fichier/GroupeB2.txt","w");
  fwrite($GroupB2,$tirageb2);
  fclose($GroupB2);

  $GroupB3=fopen("fichier/GroupeB3.txt","w");
  fwrite($GroupB3,$tirageb3);
  fclose($GroupB3);

  $GroupB4=fopen("fichier/GroupeB4.txt","w");
  fwrite($GroupB4,$tirageb4);
  fclose($GroupB4);
?>   


          <form action="Classement1.php" method="Get">
        <table class="table2">
            <tr id="tete">
                <th>Groupe A</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Match 1</td>
                <td><?php  echo $tirage1 ?> VS <?php  echo $tirage2 ?> </td>
                <td> <input type="number" name="score1" min="0"  max="10" > - <input type="number" name="score2"  min="0" max="10" ></td>
                
            </tr>
            <tr>
                <td>Match 2</td>
                <td><?php  echo $tirage3 ?> VS <?php  echo $tirage4 ?></td>
                <td><input type="number" name="score3" min="0"  max="10" > - <input type="number" name="score4" min="0"  max="10"></td>
                
            </tr>
            <tr>
                <td>Match 3</td>
                <td><?php  echo $tirage1 ?> VS <?php  echo $tirage3 ?></td>
                <td><input type="number" name="score5" min="0"  max="10" > - <input type="number" name="score6" min="0"  max="10" ></td>
                
            </tr>
            <tr>
                <td>Match 4</td>
                <td><?php  echo $tirage2  ?> VS <?php  echo $tirage4  ?></td>
                <td><input type="number" name="score7" min="0"  max="10" > - <input type="number" name="score8" min="0"  max="10" ></td>
               
            </tr> 
            <tr>
                <td>Match 5</td>
                <td><?php  echo $tirage1  ?> VS <?php  echo $tirage4 ?></td>
                <td><input type="number" name="score9" min="0"  max="10" > - <input type="number" name="score10" min="0"  max="10" ></td>
               
            </tr> 
            <tr>
                <td>Match 6</td>
                <td><?php  echo $tirage2  ?> VS <?php  echo $tirage3 ?></td>
                <td><input type="number" name="score11" min="0"  max="10" > - <input type="number" name="score12" min="0"  max="10" ></td>
               
            </tr> 
        </table>

        <table class="table3">
            <tr id="tete">
                <th>Groupe B</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Match 1</td>
                <td><?php echo $tirageb1 ?> VS <?php echo $tirageb2 ?></td>
                <td><input type="number" name="scoreB1" min="0"  max="10"> - <input type="number" name="scoreB2"  min="0" max="10" ></td>
                
            </tr>
            <tr>
                <td>Match 2</td>
                <td><?php echo $tirageb3 ?> VS <?php echo $tirageb4 ?></td>
                <td><input type="number" name="scoreB3" min="0"  max="10"> - <input type="number" name="scoreB4"  min="0" max="10" ></td>
                
            </tr>
            <tr>
                <td>Match 3</td>
                <td><?php echo $tirageb1 ?> VS <?php echo $tirageb3 ?></td>
                <td><input type="number" name="scoreB5" min="0"  max="10"> - <input type="number" name="scoreB6"  min="0" max="10" ></td>
                
            </tr>
            <tr>
                <td>Match 4</td>
                <td><?php echo $tirageb2 ?> VS <?php echo $tirageb4 ?></td>
                <td><input type="number" name="scoreB7" min="0"  max="10"> - <input type="number" name="scoreB8"  min="0" max="10" ></td>
               
            </tr> 
            <tr>
                <td>Match 5</td>
                <td><?php echo $tirageb1 ?> VS <?php echo $tirageb4 ?></td>
                <td><input type="number" name="scoreB9" min="0"  max="10"> - <input type="number" name="scoreB10"  min="0" max="10" ></td>
               
            </tr> 
            <tr>
                <td>Match 6</td>
                <td><?php echo $tirageb2 ?> VS <?php echo $tirageb3 ?></td>
                <td><input type="number" name="scoreB11" min="0"  max="10"> - <input type="number" name="scoreB12"  min="0" max="10"  ></td>
               
            </tr> 
                
            <tr class="bouton">
                <td colspan=3><input type="submit" value="Classement" name="Classement"> </td>
            </tr>
        </table>
                    </form>

    <?php endif ?>
     </section>
     </body>
    </body>
</html>
