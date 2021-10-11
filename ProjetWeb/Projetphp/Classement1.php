
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
  <section class="image">
    
<?php
   
?>
<?php

include 'Classementphp.php';
?>
     
    <h2>Classement des equipes</h2>
        <hr>

           <table id="table">
           <tr id="tete" >
                <th colspan=9 > Groupe A</th>
            </tr>
            <tr>
                <td>Classment</td>
                <td>MJ</td>
                <td>MG</td>
                <td>MN</td>
                <td>MP</td>
                <td>BP</td>
                <td>BC</td>
                <td>DIF</td>
                <td>POINT</td>
            </tr>
            <tr>
                <td><?php  echo $premier ?></td>
                <td>3</td>
                <td><?php echo $MG ?></td>
                <td><?php echo $MN ?></td>
                <td><?php echo $MP ?></td>
                <td><?php echo $BP ?></td>
                <td><?php echo $BC ?></td>
                <td><?php echo $difA ?></td>
                <td><?php echo $point ?></td>
            </tr>
            <tr>
                <td> <?php   echo $deuxieme   ?></td>
                <td>3</td>
                <td><?php echo $MG2 ?></td>
                <td><?php echo $MN2 ?></td>
                <td><?php echo $MP2 ?></td>
                <td><?php echo $BP2 ?></td>
                <td><?php echo $BC2 ?></td>
                <td><?php echo $difA2 ?></td>
                <td><?php echo $point2 ?></td>
            </tr>
            <tr>
                <td><?php  echo $troisieme ?></td>
                <td>3</td>
                <td><?php echo $MG3 ?></td>
                <td><?php echo $MN3 ?></td>
                <td><?php echo $MP3 ?></td>
                <td><?php echo $BP3 ?></td>
                <td><?php echo $BC3 ?></td>
                <td><?php echo $difA3 ?></td>
                <td><?php echo $point3 ?></td>
            </tr>
            <tr>
                <td><?php  echo $quatrieme   ?></td>
                <td>3</td>
                <td><?php echo $MG4 ?></td>
                <td><?php echo $MN4 ?></td>
                <td><?php echo $MP4 ?></td>
                <td><?php echo $BP4 ?></td>
                <td><?php echo $BC4 ?></td>
                <td><?php echo $difA4 ?></td>
                <td><?php echo $point4 ?></td>
            </tr>
           </table>

            <table class="table">
           <tr id="tete">
                <th colspan=9> Groupe B</th>
            </tr>
            <tr>
                <td>Classment</td>
                <td>MJ</td>
                <td>MG</td>
                <td>MN</td>
                <td>MP</td>
                <td>BP</td>
                <td>BC</td>
                <td>DIF</td>
                <td>POINT</td>
            </tr>
            <tr>
                <td><?php  echo $premierb  ?></td>
                <td>3</td>
                <td><?php echo $MGb ?></td>
                <td><?php echo $MNb ?></td>
                <td><?php echo $MPb ?></td>
                <td><?php echo $BPb ?></td>
                <td><?php echo $BCb ?></td>
                <td><?php echo $difAb ?></td>
                <td><?php echo $pointb ?></td>
            </tr>
            <tr>
                <td><?php  echo $deuxiemeb  ?></td>
                <td>3</td>
                <td><?php echo $MG2b ?></td>
                <td><?php echo $MN2b ?></td>
                <td><?php echo $MP2b ?></td>
                <td><?php echo $BP2b ?></td>
                <td><?php echo $BC2b ?></td>
                <td><?php echo $difA2b ?></td>
                <td><?php echo $point2b ?></td>
            </tr>
            <tr>
                <td><?php  echo $troisiemeb  ?></td>
                <td>3</td>
                <td><?php echo $MG3b ?></td>
                <td><?php echo $MN3b ?></td>
                <td><?php echo $MP3b ?></td>
                <td><?php echo $BP3b ?></td>
                <td><?php echo $BC3b ?></td>
                <td><?php echo $difA3b ?></td>
                <td><?php echo $point3b ?></td>
            </tr>
            <tr>
                <td><?php  echo   $quatrime4b?></td>
                <td>3</td>
                <td><?php echo $MG4b ?></td>
                <td><?php echo $MN4b ?></td>
                <td><?php echo $MP4b ?></td>
                <td><?php echo $BP4b ?></td>
                <td><?php echo $BC4b ?></td>
                <td><?php echo $difA4b ?></td>
                <td><?php echo $point4b ?></td> 
            </tr>
            <tr>
    <td colspan="9">
            <bouton><a href="phaseFinal.php">Demi-Final</a></button>
</td>
            </tr>
           </table> 
</section>
</body>
</html>