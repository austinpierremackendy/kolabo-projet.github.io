<?php
$c=mysqli_connect('localhost','root','','inukamedian');
$req="SELECT * FROM etudiant";
$res=$c->query($req);
print "<Center>";
print  "<table width='60%' border=3>";
print "<tr><th>Code</th><th>Nom</th><th>Prenom</th></tr>";
  while($req=mysqli_fetch_array($res)){
      print "<tr><td>".$req[0]."</td><td>".$req[1]."</td><td>".$req[2]."</td></tr>";
  }

  print "</table></center> <br>";

  ?>

