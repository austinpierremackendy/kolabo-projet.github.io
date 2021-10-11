
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <link rel="stylesheet" href="tirage.css">
        <link rel="stylesheet" href="tableau.css">
    </head>
    <body>
    <?php
    $champion="";
    $deuxieme="";
    
                                 $GrandeFinalA=fopen('fichier/GrandeFinalA.txt',"r");
                                 $GrandeFinalB=fopen('fichier/GrandeFinalB.txt',"r");  
if(isset($_POST['valider'])){
    $sore1=$_POST['score1'];
    $score2=$_POST['score2'];
        if($score1>$score2){
           $champion=fgets( $GrandeFinalA);
           $deuxieme=fgets( $GrandeFinalB);
        }elseif($score1<$score2){
            $champion=fgets( $GrandeFinalB);
            $deuxieme=fgets( $GrandeFinalA);
        }else{
            ?>
            <script>
                alert('Prolongation, il faut reentre les scores');
               
            </script>
                
            <?php
             require('Final1.php');
        }
    }

?>
    <form method="post" action="Final1.php">
            <table>
            <tr id="tete">
                <th>Equipe Champion</th>
                <th><?php echo $champion ?></th>
                <th></th>
            </tr>
            <tr>
                <td>Equipe deuxieme</td>
                <td><?php echo $deuxieme ?></td>
                <td></td>
                
            </tr>
        </table>
                </form>
                </body>
</html>