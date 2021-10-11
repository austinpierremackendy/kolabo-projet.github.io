<?php 
//Varaible pour le Groupe A 
         $premier="";
         $MG=0;
         $MN=0;
         $MP="";
         $BP="";
         $BC="";
         $difA="";
         $point="";

         $deuxieme="";
         $MG2="";
         $MN2="";
         $MP2="";
         $BP2="";
         $BC2="";
         $difA2="";
         $point2="";

         $troisieme="";
         $MG3="";
         $MN3="";
         $MP3="";
         $BP3="";
         $BC3="";
         $difA3="";
         $point3="";

         $quatrieme="";
         $MG4="";
         $MN4="";
         $MP4="";
         $BP4="";
         $BC4="";
         $difA4="";
         $point4="";

//Variable pour le groupe B
         $premierb="";
         $MGb=0;
         $MNb=0;
         $MPb="";
         $BPb="";
         $BCb="";
         $difAb="";
         $pointb="";
     
         $deuxiemeb="";
         $MG2b="";
         $MN2b="";
         $MP2b="";
         $BP2b="";
         $BC2b="";
         $difA2b="";
         $point2b="";

         $troisiemeb="";
         $MG3b="";
         $MN3b="";
         $MP3b="";
         $BP3b="";
         $BC3b="";
         $difA3b="";
         $point3b="";

         $quatrime4b="";
         $MG4b="";
         $MN4b="";
         $MP4b="";
         $BP4b="";
         $BC4b="";
         $difA4b="";
         $point4b="";



             if(isset($_GET['Classement'])){
                  $num=1;
//Groupe A
                         $pttb1=0;
                         $qteG1=0;
                         $qteP1=0;
                         $qteN1=0;
                         $qtebp1=0;
                         $qtebc1=0;
                     $scoreA1=$_GET['score1'];
                     $scoreb2=$_GET['score2'];
                       


                            $pttb2=0;
                            $qteG2=0;
                            $qteP2=0;
                            $qteN2=0;
                            $qtebp2=0;
                            $qtebc2=0;
                     $scoreb3=$_GET['score3'];
                     $scoreb4=$_GET['score4'];

                          $pttb3=0;
                          $qteG3=0;
                          $qteP3=0;
                          $qteN3=0;
                          $qtebp3=0;
                          $qtebc3=0;
                     $scoreb5=$_GET['score5'];
                     $scoreb6=$_GET['score6'];

                          $pttb4=0;
                          $qteG4=0;
                          $qteP4=0;
                          $qteN4=0;
                          $qtebp4=0;
                          $qtebc4=0;
                     $scoreb7=$_GET['score7'];
                     $scoreb8=$_GET['score8'];

                      
                     $scoreb9=$_GET['score9'];
                     $scoreb10=$_GET['score10'];

                     $scoreb11=$_GET['score11'];
                     $scoreb12=$_GET['score12'];
            
                          if($scoreA1>$scoreb2){
                                  $pttb1=$pttb1+3;
                                  $pttb2=$pttb2+0;
                                  $qteG1=$qteG1+1;
                                  $qteP2=$qteP2+1;
                          }else if($scoreA1<$scoreb2){
                              $pttb1=$pttb1+0;
                              $pttb2=$pttb2+3;
                              $qteP1=$qteP1+1;
                              $qteG2=$qteG2+1;
                          }else{
                              $pttb1=$pttb1+1;
                              $pttb2=$pttb2+1;
                              $qteN1=$qteN1+1;
                              $qteN2=$qteN2+1;
                          }

                          if($scoreb7>$scoreb8){
                              $pttb2=$pttb2+3;
                              $pttb4=$pttb4+0;
                              $qteG2=$qteG2+1;
                              $qteP4=$qteP4+1;
                      }else if($scoreb7<$scoreb8){
                          $pttb2=$pttb2+0;
                          $pttb4=$pttb4+3;
                          $qteP2=$qteP2+1;
                          $qteG4=$qteG4+1;
                      }else{
                          $pttb2=$pttb2+1;
                          $pttb4=$pttb4+1;
                          $qteN2=$qteN2+1;
                          $qteN4=$qteN4+1;
                      }

                      if($scoreb11>$scoreb12){
                          $pttb2=$pttb2+3;
                          $pttb3=$pttb3+0;
                          $qteG2=$qteG2+1;
                          $qteP3=$qteP3+1;
                  }else if($scoreb11<$scoreb12){
                      $pttb2=$pttb2+0;
                      $pttb3=$pttb3+3;
                      $qteP2=$qteP2+1;
                      $qteG3=$qteG3+1;
                  }else{
                      $pttb2=$pttb2+1;
                      $pttb3=$pttb3+1;
                      $qteN2=$qteN2+1;
                      $qteN3=$qteN3+1;
                  }

    
                          if($scoreb5>$scoreb6){
                              $pttb1=$pttb1+3;
                              $pttb3=$pttb3+0;
                              $qteG1=$qteG1+1;
                              $qteP3=$qteP3+1;
                      }else if($scoreb5<$scoreb6){
                          $pttb1=$pttb1+0;
                          $pttb3=$pttb3+3;
                          $qteP1=$qteP1+1;
                          $qteG3=$qteG3+1;
                      }else{
                          $pttb1=$pttb1+1;
                          $pttb3=$pttb3+1;
                          $qteN1=$qteN1+1;
                          $qteN3=$qteN3+1;
                      }
   

                          if($scoreb9>$scoreb10){
                               $pttb1=$pttb1+3;
                                $pttb4=$pttb4+0;
                                $qteG1=$qteG1+1;
                                $qteP4=$qteP4+1;
                        }else if($scoreb9<$scoreb10){
                                  $pttb1=$pttb1+0;
                                   $pttb4=$pttb4+3;
                                   $qteP1=$qteP1+1;
                                   $qteG4=$qteG4+1;
                        }else{
                                  $pttb1=$pttb1+1;
                                   $pttb4=$pttb4+1;
                                   $qteN1=$qteN1+1;
                                   $qteN4=$qteN4+1;
                            }
             
                            if($scoreb3>$scoreb4){
                              $pttb3=$pttb3+3;
                               $pttb4=$pttb4+0;
                               $qteG3=$qteG3+1;
                               $qteP4=$qteP4+1;
                       }else if($scoreb3<$scoreb4){
                                 $pttb3=$pttb3+0;
                                  $pttb4=$pttb4+3;
                                  $qteP3=$qteP3+1;
                                  $qteG4=$qteG4+1;
                       }else{
                                    $pttb3=$pttb3+1;
                                  $pttb4=$pttb4+1;
                                  $qteN3=$qteN3+1;
                                  $qteN4=$qteN4+1;
                           }

              $qtebp1=$scoreA1+$scoreb5+$scoreb9;
              $qtebp2=$scoreb2+$scoreb7+$scoreb11;
              $qtebp3=$scoreb3+$scoreb6+$scoreb12;
              $qtebp4=$scoreb4+$scoreb8+$scoreb10;

              $qtebc1=$scoreb2+$scoreb6+$scoreb10;
              $qtebc2=$scoreA1+$scoreb8+$scoreb12;
              $qtebc3=$scoreb4+$scoreb5+$scoreb11;
              $qtebc4=$scoreb3+$scoreb7+$scoreb9;
   
              $dif1=$qtebp1-$qtebc1;
              $dif2=$qtebp2-$qtebc2;
              $dif3=$qtebp3-$qtebc3;
              $dif4=$qtebp4-$qtebc4;

    //GroupeB
    $pttb1b=0;
    $qteG1b=0;
    $qteP1b=0;
    $qteN1b=0;
    $qtebp1b=0;
    $qtebc1b=0;
$scoreA1b=$_GET['scoreB1'];
$scoreb2b=$_GET['scoreB2'];
  


       $pttb2b=0;
       $qteG2b=0;
       $qteP2b=0;
       $qteN2b=0;
       $qtebp2b=0;
       $qtebc2b=0;
$scoreb3b=$_GET['scoreB3'];
$scoreb4b=$_GET['scoreB4'];

     $pttb3b=0;
     $qteG3b=0;
     $qteP3b=0;
     $qteN3b=0;
     $qtebp3b=0;
     $qtebc3b=0;
$scoreb5b=$_GET['scoreB5'];
$scoreb6b=$_GET['scoreB6'];

     $pttb4b=0;
     $qteG4b=0;
     $ateP4b=0;
     $qteN4b=0;
     $qtebp4b=0;
     $qtebc4b=0;
$scoreb7b=$_GET['scoreB7'];
$scoreb8b=$_GET['scoreB8'];

 
$scoreb9b=$_GET['scoreB9'];
$scoreb10b=$_GET['scoreB10'];

$scoreb11b=$_GET['scoreB11'];
$scoreb12b=$_GET['scoreB12'];

     if($scoreA1b>$scoreb2b){
             $pttb1b=$pttb1b+3;
             $pttb2b=$pttb2b+0;
             $qteG1b=$qteG1b+1;
             $qteP2b=$qteP2b+1;
     }else if($scoreA1b<$scoreb2b){
         $pttb1b=$pttb1b+0;
         $pttb2b=$pttb2b+3;
         $qteP1b=$qteP1b+1;
         $qteG2b=$qteG2b+1;
     }else{
         $pttb1b=$pttb1b+1;
         $pttb2b=$pttb2b+1;
         $qteN1b=$qteN1b+1;
         $qteN2b=$qteN2b+1;
     }

     if($scoreb7b>$scoreb8b){
         $pttb2b=$pttb2b+3;
         $pttb4b=$pttb4b+0;
         $qteG2b=$qteG2b+1;
         $ateP4b=$ateP4b+1;
 }else if($scoreb7b<$scoreb8b){
     $pttb2b=$pttb2b+0;
     $pttb4b=$pttb4b+3;
     $qteP2b=$qteP2b+1;
     $qteG4b=$qteG4b+1;
 }else{
     $pttb2b=$pttb2b+1;
     $pttb4b=$pttb4b+1;
     $qteN2b=$qteN2b+1;
     $qteN4b=$qteN4b+1;
 }

 if($scoreb11b>$scoreb12b){
     $pttb2b=$pttb2b+3;
     $pttb3b=$pttb3b+0;
     $qteG2b=$qteG2b+1;
     $qteP3b=$qteP3b+1;
}else if($scoreb11b<$scoreb12b){
 $pttb2b=$pttb2b+0;
 $pttb3b=$pttb3b+3;
 $qteP2b=$qteP2b+1;
 $qteG3b=$qteG3b+1;
}else{
 $pttb2b=$pttb2b+1;
 $pttb3b=$pttb3b+1;
 $qteN2b=$qteN2b+1;
 $qteN3b=$qteN3b+1;
}


     if($scoreb5b>$scoreb6b){
         $pttb1b=$pttb1b+3;
         $pttb3b=$pttb3b+0;
         $qteG1b=$qteG1b+1;
         $qteP3b=$qteP3b+1;
 }else if($scoreb5b<$scoreb6b){
     $pttb1b=$pttb1b+0;
     $pttb3b=$pttb3b+3;
     $qteP1b=$qteP1b+1;
     $qteG3b=$qteG3b+1;
 }else{
     $pttb1b=$pttb1b+1;
     $pttb3b=$pttb3b+1;
     $qteN1b=$qteN1b+1;
     $qteN3b=$qteN3b+1;
 }


     if($scoreb9b>$scoreb10b){
          $pttb1b=$pttb1b+3;
           $pttb4b=$pttb4b+0;
           $qteG1b=$qteG1b+1;
           $ateP4b=$ateP4b+1;
   }else if($scoreb9b<$scoreb10b){
             $pttb1b=$pttb1b+0;
              $pttb4b=$pttb4b+3;
              $qteP1b=$qteP1b+1;
              $qteG4b=$qteG4b+1;
   }else{
             $pttb1b=$pttb1b+1;
              $pttb4b=$pttb4b+1;
              $qteN1b=$qteN1b+1;
              $qteN4b=$qteN4b+1;
       }

       if($scoreb3b>$scoreb4b){
         $pttb3b=$pttb3b+3;
          $pttb4b=$pttb4b+0;
          $qteG3b=$qteG3b+1;
          $ateP4b=$ateP4b+1;
  }else if($scoreb3b<$scoreb4b){
            $pttb3b=$pttb3b+0;
             $pttb4b=$pttb4b+3;
             $qteP3b=$qteP3b+1;
             $qteG4b=$qteG4b+1;
  }else{
               $pttb3b=$pttb3b+1;
             $pttb4b=$pttb4b+1;
             $qteN3b=$qteN3b+1;
             $qteN4b=$qteN4b+1;
      }

$qtebp1b=$scoreA1b+$scoreb5b+$scoreb9b;
$qtebp2b=$scoreb2b+$scoreb7b+$scoreb11b;
$qtebp3b=$scoreb3b+$scoreb6b+$scoreb12b;
$qtebp4b=$scoreb4b+$scoreb8b+$scoreb10b;

$qtebc1b=$scoreb2b+$scoreb6b+$scoreb10b;
$qtebc2b=$scoreA1b+$scoreb8b+$scoreb12b;
$qtebc3b=$scoreb4b+$scoreb5b+$scoreb11b;
$qtebc4b=$scoreb3b+$scoreb7b+$scoreb9b;

$dif1b=$qtebp1b-$qtebc1b;
$dif2b=$qtebp2b-$qtebc2b;
$dif3b=$qtebp3b-$qtebc3b;
$dif4b=$qtebp4b-$qtebc4b;
 //-------------------------------------------------------------------------------------------------------------------------------
               $GroupA1=fopen("fichier/GroupeA1.txt","r");
               $GroupA2=fopen("fichier/GroupeA2.txt","r");
               $GroupA3=fopen("fichier/GroupeA3.txt","r");
               $GroupA4=fopen("fichier/GroupeA4.txt","r");
//Condition pour gerer le classement pour le groupe A
        //Test pour si le premier equipe est  le premier du classement  
              if( ($pttb1>$pttb2 and $pttb1>$pttb3 and $pttb1>$pttb4) || (($pttb1>=$pttb2 and $pttb1>=$pttb3 and $pttb1>=$pttb4) && ($dif1>=$dif2 and $dif1>=$dif3 and $dif1>=$dif4))){
                $premier=fgets($GroupA1);
                  $MG=$qteG1;
                  $MN=$qteN1;
                  $MP=$qteP1;
                  $BP=$qtebp1;
                  $BC=$qtebc1; 
                  $difA=$dif1;
                  $point=$pttb1;
         //test pour si deuxieme equipe est  le deuxieme du classement 
                  if( ($pttb2>$pttb3 and $pttb2>$pttb4) || (($pttb2>=$pttb3 and $pttb2>=$pttb4) && ($dif2>=$dif3 and $dif2>=$dif4))){
                      $deuxieme=fgets($GroupA2);
                      $MG2=$qteG2;
                      $MN2=$qteN2;
                      $MP2=$qteP2;
                      $BP2=$qtebp2;
                      $BC2=$qtebc2;
                      $difA2=$dif2;
                      $point2=$pttb2;
        //Test pour si le troisieme equipe est  le troisieme du classement
                      if(($pttb3>$pttb4) || (($pttb3>=$pttb4) && ($dif3>=$dif4))){
                       $troisieme=fgets($GroupA3);
                          $MG3=$qteG3;
                          $MN3=$qteN3;
                          $MP3=$qteP3;
                          $BP3=$qtebp3;
                          $BC3=$qtebc3;
                          $difA3=$dif3;
                          $point3=$pttb3;
        //Test si le quatrieme equipe est le quatrieme du classement
                       $quatrieme=fgets($GroupA4);
                          $MG4=$qteG4;
                          $MN4=$qteN4;
                          $MP4=$qteP4;
                          $BP4=$qtebp4;
                          $BC4=$qtebc4;
                          $difA4=$dif4;
                          $point4=$pttb4;
        //Test si le quatrieme equipe est le troisieme du classement
                      }else{
                     $troisieme=fgets($GroupA4);
                          $MG3=$qteG4;
                          $MN3=$qteN4;
                          $MP3=$qteP4;
                          $BP3=$qtebp4;
                          $BC3=$qtebc4;
                          $difA3=$dif4;
                          $point3=$pttb4;
        //Test si le troisieme equipe est le quatrieme du classement
                  $quatrieme=fgets($GroupA3);
                          $MG4=$qteG3;
                          $MN4=$qteN3;
                          $MP4=$qteP3;
                          $BP4=$qtebp3;
                          $BC4=$qtebc3;
                          $difA4=$dif3;
                          $point4=$pttb3;
                      }

        //Test si la troisieme equipe est le deuxieme du classement
                  }else if(($pttb3>$pttb2 and $pttb3>$pttb4) || (($pttb3>=$pttb2 and $pttb3>=$pttb4) && ($dif3>$dif2 and $dif3>$dif4))){
                     $deuxieme=fgets($GroupA3);
                      $MG2=$qteG3;
                      $MN2=$qteN3;
                      $MP2=$qteP3;
                      $BP2=$qtebp3;
                      $BC2=$qtebc3;
                      $difA2=$dif3;
                      $point2=$pttb3;
        //Test si la deuxieme equipe est est troisieme dans le classement
                      if(($pttb2>$pttb4) || (($pttb2>=$pttb4) && ($dif2>$dif4))){
                        $troisieme=fgets($GroupA2);
                          $MG3=$qteG2;
                          $MN3=$qteN2;
                          $MP3=$qteP2;
                          $BP3=$qtebp2;
                          $BC3=$qtebc2;
                          $difA3=$dif2;
                          $point3=$pttb2;
        //Test si la quatrieme equipe est quatrieme dans le classement                
                      $quatrieme=fgets($GroupA4);
                          $MG4=$qteG4;
                          $MN4=$qteN4;
                          $MP4=$qteP4;
                          $BP4=$qtebp4;
                          $BC4=$qtebc4;
                          $difA4=$dif4;
                          $point4=$pttb4;

                      }else{
        //Test si la quatrieme equipe est troisieme dans le classement
                         $troisieme=fgets($GroupA4);
                          $MG3=$qteG4;
                          $MN3=$qteN4;
                          $MP3=$qteP4;
                          $BP3=$qtebp4;
                          $BC3=$qtebc4;
                          $difA3=$dif4;
                          $point3=$pttb4;
        //Test si la deuxieme equipe est quatrieme dans le classement 
                        $quatrieme=fgets($GroupA2);
                          $MG4=$qteG2;
                          $MN4=$qteN2;
                          $MP4=$qteP2;
                          $BP4=$qtebp2;
                          $BC4=$qtebc2;
                          $difA4=$dif2;
                          $point4=$pttb2;
                      }

                  }else{
            //Test si le quatrieme equip est le deuxieme du classement
                     $deuxieme=fgets($GroupA4);
                      $MG2=$qteG4;
                      $MN2=$qteN4;
                      $MP2=$qteP4;
                      $BP2=$qtebp4;
                      $BC2=$qtebc4;
                      $difA2=$dif4;
                      $point2=$pttb4;
                  
            //Test si la deuxieme est le troisieme du classement
                      if( ($pttb2>=$pttb3) || (($pttb2>=$pttb3) and ($dif2>$dif3))){
                         $troisieme=fgets($GroupA2);
                          $MG3=$qteG2;
                          $MN3=$qteN2;
                          $MP3=$qteP2;
                          $BP3=$qtebp2;
                          $BC3=$qtebc2;
                          $difA3=$dif2;
                          $point3=$pttb2;
            //Test si le troisieme est le quatrieme du classemet 
                          $quatrieme=fgets($GroupA3);
                          $MG4=$qteG3;
                          $MN4=$qteN3;
                          $MP4=$qteP3;
                          $BP4=$qtebp3;
                          $BC4=$qtebc3;
                          $difA4=$dif3;
                          $point4=$pttb3;

                      }else{
            //Test si la troisieme est la troisieme du classement
                         $troisieme=fgets($GroupA3);
                          $MG3=$qteG3;
                          $MN3=$qteN3;
                          $MP3=$qteP3;
                          $BP3=$qtebp3;
                          $BC3=$qtebc3;
                          $difA3=$dif3;
                          $point3=$pttb3;
             // Test si la deuxieme est le quatrieme du classement 
                         $quatrieme=fgets($GroupA2);
                          $MG4=$qteG2;
                          $MN4=$qteN2;
                          $MP4=$qteP2;
                          $BP4=$qtebp2;
                          $BC4=$qtebc2;
                          $difA4=$dif2;
                          $point4=$pttb2;
                      }
                  }
//######################################################################################################################################
                  //  if principale
           //Test si le deuxieme equipe est le premier du classement 
}else if(($pttb2>$pttb1 and $pttb2>$pttb3 and $pttb2>$pttb4) || (($pttb2>=$pttb1 and $pttb2>=$pttb3 and $pttb2>=$pttb4) and ($dif2>=$dif1 and $dif2>=$dif3 and $dif2>$dif4))){
                 $premier=fgets($GroupA2);
                  $MG=$qteG2;
                  $MN=$qteN2;
                  $MP=$qteP2;
                  $BP=$qtebp2;
                  $BC=$qtebc2;
                  $difA=$dif2;
                  $point=$pttb2;

                  if(($pttb1>$pttb3 and $pttb1>$pttb4) || (($pttb1>=$pttb3 and $pttb1>=$pttb4) && ($dif1>$dif3 and $dif1>$dif4))){
                    $deuxieme=fgets($GroupA1);
                      $MG2=$qteG1;
                      $MN2=$qteN1;
                      $MP2=$qteP1;
                      $BP2=$qtebp1;
                      $BC2=$qtebc1;
                      $difA2=$dif1;
                      $point2=$pttb1;

                      if( ($pttb3>$pttb4) || (($pttb3>=$pttb4) && ($dif3>$dif4))){
                    $troisieme=fgets($GroupA3);
                          $MG3=$qteG3;
                          $MN3=$qteN3;
                          $MP3=$qteP3;
                          $BP3=$qtebp3;
                          $BC3=$qtebc3;
                          $difA3=$dif3;
                          $point3=$pttb3;

                    $quatrieme=fgets($GroupA4);
                          $MG4=$qteG4;
                          $MN4=$qteN4;
                          $MP4=$qteP4;
                          $BP4=$qtebp4;
                          $BC4=$qtebc4;
                          $difA4=$dif4;
                          $point4=$pttb4;

                      }else{
                    $troisieme=fgets($GroupA4);
                          $MG3=$qteG4;
                          $MN3=$qteN4;
                          $MP3=$qteP4;
                          $BP3=$qtebp4;
                          $BC3=$qtebc4;
                          $difA3=$dif4;
                          $point3=$pttb4;

                     $quatrieme=fgets($GroupA3);
                          $MG4=$qteG3;
                          $MN4=$qteN3;
                          $MP4=$qteP3;
                          $BP4=$qtebp3;
                          $BC4=$qtebc3;
                          $difA4=$dif3;
                          $point4=$pttb3;
                      }

                   
                  }else if(($pttb3>$pttb1 and $pttb3>$pttb4) || (($pttb3>=$pttb1 and $pttb3>=$pttb4) && ($dif3>$dif1 and $dif3>$dif4))){
                     $deuxieme=fgets($GroupA3);
                      $MG2=$qteG3;
                      $MN2=$qteN3;
                      $MP2=$qteP3;
                      $BP2=$qtebp3;
                      $BC2=$qtebc3;
                      $difA2=$dif3;
                      $point2=$pttb3;

                      if(($pttb1>$pttb4) || (($pttb1>=$pttb4) && ($dif1>$dif4))){
                        $troisieme=fgets($GroupA1);
                          $MG3=$qteG1;
                          $MN3=$qteN1;
                          $MP3=$qteP1;
                          $BP3=$qtebp1;
                          $BC3=$qtebc1;
                          $difA3=$dif1;
                          $point3=$pttb1;

                       $quatrieme=fgets($GroupA4);
                          $MG4=$qteG4;
                          $MN4=$qteN4;
                          $MP4=$qteP4;
                          $BP4=$qtebp4;
                          $BC4=$qtebc4;
                          $difA4=$dif4;
                          $point4=$pttb4;

                      }else{
                       $troisieme=fgets($GroupA4);
                          $MG3=$qteG4;
                          $MN3=$qteN4;
                          $MP3=$qteP4;
                          $BP3=$qtebp4;
                          $BC3=$qtebc4;
                          $difA3=$dif4;
                          $point3=$pttb4;

                       $quatrieme=fgets($GroupA1);
                          $MG4=$qteG1;
                          $MN4=$qteN1;
                          $MP4=$qteP1;
                          $BP4=$qtebp1;
                          $BC4=$qtebc1;
                          $difA4=$dif1;
                          $point4=$pttb1;
                      }
                      
                  }else{
                    $deuxieme=fgets($GroupA4);
                      $MG2=$qteG4;
                      $MN2=$qteN4;
                      $MP2=$qteP4;
                      $BP2=$qtebp4;
                      $BC2=$qtebc4;
                      $difA2=$dif4;
                      $point2=$pttb4;
                  

                      if(($pttb1>$pttb3) || (($pttb1>=$pttb3) && ($dif1>=$dif3))){
                          $troisieme=fgets($GroupA1);
                          $MG3=$qteG1;
                          $MN3=$qteN1;
                          $MP3=$qteP1;
                          $BP3=$qtebp1;
                          $BC3=$qtebc1;
                          $difA3=$dif1;
                          $point3=$pttb1;

                          $quatrieme=fgets($GroupA3);
                          $MG4=$qteG3;
                          $MN4=$qteN3;
                          $MP4=$qteP3;
                          $BP4=$qtebp3;
                          $BC4=$qtebc3;
                          $difA4=$dif3;
                          $point4=$pttb3;

                      }else{
                          $troisieme=fgets($GroupA3);
                          $MG3=$qteG3;
                          $MN3=$qteN3;
                          $MP3=$qteP3;
                          $BP3=$qtebp3;
                          $BC3=$qtebc3;
                          $difA3=$dif3;
                          $point3=$pttb3;

                         $quatrieme=fgets($GroupA1);
                          $MG4=$qteG1;
                          $MN4=$qteN1;
                          $MP4=$qteP1;
                          $BP4=$qtebp1;
                          $BC4=$qtebc1;
                          $difA4=$dif1;
                          $point4=$pttb1;
                      }
                  }
//######################################################################################################################################
        //Test si le troisieme equipe est le premier du classment 

              }else if(($pttb3>$pttb2 and $pttb3>$pttb1 and $pttb3>$pttb4) || (($pttb3>=$pttb2 and $pttb3>=$pttb1 and $pttb3>=$pttb4) && ($dif3>$dif2 and $dif3>$dif1 and $dif3>$dif4))){
                  $premier=fgets($GroupA3);
                  $MG=$qteG3;
                  $MN=$qteN3;
                  $MP=$qteP3;
                  $BP=$qtebp3;
                  $BC=$qtebc3;
                  $difA=$dif3;
                  $point=$pttb3;

                  if( ($pttb1>$pttb2 and $pttb1>$pttb4) || (($pttb1>=$pttb2 and $pttb1>=$pttb4) && ($dif1>$dif2 and $dif1>$dif4))){
                      $deuxieme=fgets($GroupA1);
                      $MG2=$qteG1;
                      $MN2=$qteN1;
                      $MP2=$qteP1;
                      $BP2=$qtebp1;
                      $BC2=$qtebc1;
                      $difA2=$dif1;
                      $point2=$pttb1;

                      if(($pttb2>$pttb4) || (($pttb2>=$pttb4) && ($dif2>$dif4 ))){
                         $troisieme=fgets($GroupA2);
                          $MG3=$qteG2;
                          $MN3=$qteN2;
                          $MP3=$qteP2;
                          $BP3=$qtebp2;
                          $BC3=$qtebc2;
                          $difA3=$dif2;
                          $point3=$pttb2;

                         $quatrieme=fgets($GroupA4);
                          $MG4=$qteG4;
                          $MN4=$qteN4;
                          $MP4=$qteP4;
                          $BP4=$qtebp4;
                          $BC4=$qtebc4;
                          $difA4=$dif4;
                          $point4=$pttb4;

                      }else{
                         $troisieme=fgets($GroupA4);
                          $MG3=$qteG4;
                          $MN3=$qteN4;
                          $MP3=$qteP4;
                          $BP3=$qtebp4;
                          $BC3=$qtebc4;
                          $difA3=$dif4;
                          $point3=$pttb4;

                          $quatrieme=fgets($GroupA2);
                          $MG4=$qteG2;
                          $MN4=$qteN2;
                          $MP4=$qteP2;
                          $BP4=$qtebp2;
                          $BC4=$qtebc2;
                          $difA4=$dif2;
                          $point4=$pttb2;
                      }

            
                  }else if(($pttb2>$pttb1 and $pttb2>$pttb4) || (($pttb2>=$pttb1 and $pttb2>=$pttb4) && ($dif2>$dif1 and $dif2>$dif4))){
                    $deuxieme=fgets($GroupA2);
                      $MG2=$qteG2;
                      $MN2=$qteN2;
                      $MP2=$qteP2;
                      $BP2=$qtebp2;
                      $BC2=$qtebc2;
                      $difA2=$dif2;
                      $point2=$pttb2;

                      if(($pttb1>$pttb4) || (($pttb1>=$pttb4) and ($dif1>$dif4))){
                          $troisieme=fgets($GroupA1);
                          $MG3=$qteG1;
                          $MN3=$qteN1;
                          $MP3=$qteP1;
                          $BP3=$qtebp1;
                          $BC3=$qtebc1;
                          $difA3=$dif1;
                          $point3=$pttb1;

                          $quatrieme=fgets($GroupA4);
                          $MG4=$qteG4;
                          $MN4=$qteN4;
                          $MP4=$qteP4;
                          $BP4=$qtebp4;
                          $BC4=$qtebc4;
                          $difA4=$dif4;
                          $point4=$pttb4;

                      }else{
                          $troisieme=fgets($GroupA4);
                          $MG3=$qteG4;
                          $MN3=$qteN4;
                          $MP3=$qteP4;
                          $BP3=$qtebp4;
                          $BC3=$qtebc4;
                          $difA3=$dif4;
                          $point3=$pttb4;

                         $quatrieme=fgets($GroupA1);
                          $MG4=$qteG1;
                          $MN4=$qteN1;
                          $MP4=$qteP1;
                          $BP4=$qtebp1;
                          $BC4=$qtebc1;
                          $difA4=$dif1;
                          $point4=$pttb1;
                      }

                      

                  }else{
                      $deuxieme=fgets($GroupA4);
                      $MG2=$qteG4;
                      $MN2=$qteN4;
                      $MP2=$qteP4;
                      $BP2=$qtebp4;
                      $BC2=$qtebc4;
                      $difA2=$dif4;
                      $point2=$pttb4;
                  

                      if( ($pttb1>$pttb2) || (($pttb1>=$pttb2) && ($dif1>$dif2))){
                          $troisieme=fgets($GroupA1);
                          $MG3=$qteG1;
                          $MN3=$qteN1;
                          $MP3=$qteP1;
                          $BP3=$qtebp1;
                          $BC3=$qtebc1;
                          $difA3=$dif1;
                          $point3=$pttb1;

                          $quatrieme=fgets($GroupA2);
                          $MG4=$qteG2;
                          $MN4=$qteN2;
                          $MP4=$qteP2;
                          $BP4=$qtebp2;
                          $BC4=$qtebc2;
                          $difA4=$dif2;
                          $point4=$pttb2;

                      }else{
                          $troisieme=fgets($GroupA2);
                          $MG3=$qteG2;
                          $MN3=$qteN2;
                          $MP3=$qteP2;
                          $BP3=$qtebp2;
                          $BC3=$qtebc2;
                          $difA3=$dif2;
                          $point3=$pttb2;

                          $quatrieme=fgets($GroupA1);
                          $MG4=$qteG1;
                          $MN4=$qteN1;
                          $MP4=$qteP1;
                          $BP4=$qtebp1;
                          $BC4=$qtebc1;
                          $difA4=$dif1;
                          $point4=$pttb1;
                      }
                  }

              }else{
     //##################################################################################################################################
        //Test si le quatrieme equipe est le premier du classement
                  
                 $premier=fgets($GroupA4);
                  $MG=$qteG4;
                  $MN=$qteN4;
                  $MP=$qteP4;
                  $BP=$qtebp4;
                  $BC=$qtebc4;
                  $difA=$dif4;
                  $point=$pttb4;
                  
                  if( ($pttb1>$pttb2 and $pttb1>$pttb3) || (($pttb1>=$pttb2 and $pttb1>=$pttb3) && ($dif1>$dif2 and $dif1>$dif3))){
                     $deuxieme=fgets($GroupA1);
                      $MG2=$qteG1;
                      $MN2=$qteN1;
                      $MP2=$qteP1;
                      $BP2=$qtebp1;
                      $BC2=$qtebc1;
                      $difA2=$dif1;
                      $point2=$pttb1;

                      if( ($pttb2>$pttb3) || (($pttb2>=$pttb3) && ($dif2>$dif3))){
                         $troisieme=fgets($GroupA2);
                          $MG3=$qteG2;
                          $MN3=$qteN2;
                          $MP3=$qteP2;
                          $BP3=$qtebp2;
                          $BC3=$qtebc2;
                          $difA3=$dif2;
                          $point3=$pttb2;

                       $quatrieme=fgets($GroupA3);
                        
                          $MG4=$qteG3;
                          $MN4=$qteN3;
                          $MP4=$qteP3;
                          $BP4=$qtebp3;
                          $BC4=$qtebc3;
                          $difA4=$dif3;
                          $point4=$pttb3;

                      }else{
                          $troisieme=fgets($GroupA3);

                          $MG3=$qteG3;
                          $MN3=$qteN3;
                          $MP3=$qteP3;
                          $BP3=$qtebp3;
                          $BC3=$qtebc3;
                          $difA3=$dif3;
                          $point3=$pttb3;

                          $quatrieme=fgets($GroupA2);
                          $MG4=$qteG2;
                          $MN4=$qteN2;
                          $MP4=$qteP2;
                          $BP4=$qtebp2;
                          $BC4=$qtebc2;
                          $difA4=$dif2;
                          $point4=$pttb2;
                      }

                   
                  }else if( ( $pttb2>$pttb3 and $pttb2>$pttb1) || (($pttb2>=$pttb3 and $pttb2>=$pttb1) && ($dif2>$dif3 and $dif2>$dif1))){
                      $deuxieme=fgets($GroupA2);
                      $MG2=$qteG2;
                      $MN2=$qteN2;
                      $MP2=$qteP2;
                      $BP2=$qtebp2;
                      $BC2=$qtebc2;
                      $difA2=$dif2;
                      $point2=$pttb2;

                      if(($pttb1>=$pttb3) || (($pttb1>=$pttb3) && ($dif1>$dif3))){
                          $troisieme=fgets($GroupA1);
                          $MG3=$qteG1;
                          $MN3=$qteN1;
                          $MP3=$qteP1;
                          $BP3=$qtebp1;
                          $BC3=$qtebc1;
                          $difA3=$dif1;
                          $point3=$pttb1;

                          $quatrieme=fgets($GroupA3);
                          $MG4=$qteG3;
                          $MN4=$qteN3;
                          $MP4=$qteP3;
                          $BP4=$qtebp3;
                          $BC4=$qtebc3;
                          $difA4=$dif3;
                          $point4=$pttb3;

                      }else{
                          $troisieme=fgets($GroupA3);
                          $MG3=$qteG3;
                          $MN3=$qteN3;
                          $MP3=$qteP3;
                          $BP3=$qtebp3;
                          $BC3=$qtebc3;
                          $difA3=$dif3;
                          $point3=$pttb3;

                          $quatrieme=fgets($GroupA1);
                          $MG4=$qteG1;
                          $MN4=$qteN1;
                          $MP4=$qteP1;
                          $BP4=$qtebp1;
                          $BC4=$qtebc1;
                          $difA4=$dif1;
                          $point4=$pttb1;
                      }

                  }else{
                      $deuxieme=fgets($GroupA3);
                      $MG2=$qteG3;
                      $MN2=$qteN3;
                      $MP2=$qteP3;
                      $BP2=$qtebp3;
                      $BC2=$qtebc3;
                      $difA2=$dif3;
                      $point2=$pttb3;
                  

                      if(($pttb1>$pttb2) || (($pttb1>=$pttb2) && ($dif1>$dif2))){
                          $troisieme=fgets($GroupA1);
                          $MG3=$qteG1;
                          $MN3=$qteN1;
                          $MP3=$qteP1;
                          $BP3=$qtebp1;
                          $BC3=$qtebc1;
                          $difA3=$dif1;
                          $point3=$pttb1;

                         $quatrieme=fgets($GroupA2);
                          $MG4=$qteG2;
                          $MN4=$qteN2;
                          $MP4=$qteP2;
                          $BP4=$qtebp2;
                          $BC4=$qtebc2;
                          $difA4=$dif2;
                          $point4=$pttb2;

                      }else{
                         $troisieme=fgets($GroupA2);
                          $MG3=$qteG2;
                          $MN3=$qteN2;
                          $MP3=$qteP2;
                          $BP3=$qtebp2;
                          $BC3=$qtebc2;
                          $difA3=$dif2;
                          $point3=$pttb2;

                          $quatrieme=fgets($GroupA1);
                          $MG4=$qteG1;
                          $MN4=$qteN1;
                          $MP4=$qteP1;
                          $BP4=$qtebp1;
                          $BC4=$qtebc1;
                          $difA4=$dif1;
                          $point4=$pttb1;
                      }
                  }
           }   
           $PremierGrpoupA=fopen('fichier/premiergroupeA.txt',"w");
           fwrite($PremierGrpoupA,$premier);
           fclose($PremierGrpoupA);

       $deuxiemeGroupeA=fopen('fichier/deuxiemeGroupeA.txt',"w");
           fwrite($deuxiemeGroupeA,$deuxieme);
           fclose($deuxiemeGroupeA);

           fclose($GroupA1);
           fclose($GroupA2);
           fclose($GroupA3);
           fclose($GroupA4);


           //Condition pour le classement du Groupe B
           $GroupB1=fopen("fichier/GroupeB1.txt","r");
 $GroupB2=fopen("fichier/GroupeB2.txt","r");
 $GroupB3=fopen("fichier/GroupeB3.txt","r");
 $GroupB4=fopen("fichier/GroupeB4.txt","r");
//Condition pour gerer le classement pour le groupe A
        //Test pour si le premierb equipe est  le premierb du classement  
              if( ($pttb1b>$pttb2b and $pttb1b>$pttb3b and $pttb1b>$pttb4b) || (($pttb1b>=$pttb2b and $pttb1b>=$pttb3b and $pttb1b>=$pttb4b) && ($dif1b>=$dif2b and $dif1b>=$dif3b and $dif1b>=$dif4b))){
                $premierb=fgets($GroupB1);
                  $MGb=$qteG1b;
                  $MNb=$qteN1b;
                  $MPb=$qteP1b;
                  $BPb=$qtebp1b;
                  $BCb=$qtebc1b; 
                  $difAb=$dif1b;
                  $pointb=$pttb1b;
         //test pour si deuxiemeb equipe est  le deuxiemeb du classement 
                  if( ($pttb2b>$pttb3b and $pttb2b>$pttb4b) || (($pttb2b>=$pttb3b and $pttb2b>=$pttb4b) && ($dif2b>=$dif3b and $dif2b>=$dif4b))){
                      $deuxiemeb=fgets($GroupB2);
                      $MG2b=$qteG2b;
                      $MN2b=$qteN2b;
                      $MP2b=$qteP2b;
                      $BP2b=$qtebp2b;
                      $BC2b=$qtebc2b;
                      $difA2b=$dif2b;
                      $point2b=$pttb2b;
        //Test pour si le troisiemeb equipe est  le troisiemeb du classement
                      if(($pttb3b>$pttb4b) || (($pttb3b>=$pttb4b) && ($dif3b>=$dif4b))){
                       $troisiemeb=fgets($GroupB3);
                          $MG3b=$qteG3b;
                          $MN3b=$qteN3b;
                          $MP3b=$qteP3b;
                          $BP3b=$qtebp3b;
                          $BC3b=$qtebc3b;
                          $difA3b=$dif3b;
                          $point3b=$pttb3b;
        //Test si le quatrime4b equipe est le quatrime4b du classement
                       $quatrime4b=fgets($GroupB4);
                          $MG4b=$qteG4b;
                          $MN4b=$qteN4b;
                          $MP4b=$ateP4b;
                          $BP4b=$qtebp4b;
                          $BC4b=$qtebc4b;
                          $difA4b=$dif4b;
                          $point4b=$pttb4b;
        //Test si le quatrime4b equipe est le troisiemeb du classement
                      }else{
                     $troisiemeb=fgets($GroupB4);
                          $MG3b=$qteG4b;
                          $MN3b=$qteN4b;
                          $MP3b=$ateP4b;
                          $BP3b=$qtebp4b;
                          $BC3b=$qtebc4b;
                          $difA3b=$dif4b;
                          $point3b=$pttb4b;
        //Test si le troisiemeb equipe est le quatrime4b du classement
                  $quatrime4b=fgets($GroupB3);
                          $MG4b=$qteG3b;
                          $MN4b=$qteN3b;
                          $MP4b=$qteP3b;
                          $BP4b=$qtebp3b;
                          $BC4b=$qtebc3b;
                          $difA4b=$dif3b;
                          $point4b=$pttb3b;
                      }

        //Test si la troisiemeb equipe est le deuxiemeb du classement
                  }else if(($pttb3b>$pttb2b and $pttb3b>$pttb4b) || (($pttb3b>=$pttb2b and $pttb3b>=$pttb4b) && ($dif3b>$dif2b and $dif3b>$dif4b))){
                     $deuxiemeb=fgets($GroupB3);
                      $MG2b=$qteG3b;
                      $MN2b=$qteN3b;
                      $MP2b=$qteP3b;
                      $BP2b=$qtebp3b;
                      $BC2b=$qtebc3b;
                      $difA2b=$dif3b;
                      $point2b=$pttb3b;
        //Test si la deuxiemeb equipe est est troisiemeb dans le classement
                      if(($pttb2b>$pttb4b) || (($pttb2b>=$pttb4b) && ($dif2b>$dif4b))){
                        $troisiemeb=fgets($GroupB2);
                          $MG3b=$qteG2b;
                          $MN3b=$qteN2b;
                          $MP3b=$qteP2b;
                          $BP3b=$qtebp2b;
                          $BC3b=$qtebc2b;
                          $difA3b=$dif2b;
                          $point3b=$pttb2b;
        //Test si la quatrime4b equipe est quatrime4b dans le classement                
                      $quatrime4b=fgets($GroupB4);
                          $MG4b=$qteG4b;
                          $MN4b=$qteN4b;
                          $MP4b=$ateP4b;
                          $BP4b=$qtebp4b;
                          $BC4b=$qtebc4b;
                          $difA4b=$dif4b;
                          $point4b=$pttb4b;

                      }else{
        //Test si la quatrime4b equipe est troisiemeb dans le classement
                         $troisiemeb=fgets($GroupB4);
                          $MG3b=$qteG4b;
                          $MN3b=$qteN4b;
                          $MP3b=$ateP4b;
                          $BP3b=$qtebp4b;
                          $BC3b=$qtebc4b;
                          $difA3b=$dif4b;
                          $point3b=$pttb4b;
        //Test si la deuxiemeb equipe est quatrime4b dans le classement 
                        $quatrime4b=fgets($GroupB2);
                          $MG4b=$qteG2b;
                          $MN4b=$qteN2b;
                          $MP4b=$qteP2b;
                          $BP4b=$qtebp2b;
                          $BC4b=$qtebc2b;
                          $difA4b=$dif2b;
                          $point4b=$pttb2b;
                      }

                  }else{
            //Test si le quatrime4b equip est le deuxiemeb du classement
                     $deuxiemeb=fgets($GroupB4);
                      $MG2b=$qteG4b;
                      $MN2b=$qteN4b;
                      $MP2b=$ateP4b;
                      $BP2b=$qtebp4b;
                      $BC2b=$qtebc4b;
                      $difA2b=$dif4b;
                      $point2b=$pttb4b;
                  
            //Test si la deuxiemeb est le troisiemeb du classement
                      if( ($pttb2b>=$pttb3b) || (($pttb2b>=$pttb3b) and ($dif2b>$dif3b))){
                         $troisiemeb=fgets($GroupB2);
                          $MG3b=$qteG2b;
                          $MN3b=$qteN2b;
                          $MP3b=$qteP2b;
                          $BP3b=$qtebp2b;
                          $BC3b=$qtebc2b;
                          $difA3b=$dif2b;
                          $point3b=$pttb2b;
            //Test si le troisiemeb est le quatrime4b du classemet 
                          $quatrime4b=fgets($GroupB3);
                          $MG4b=$qteG3b;
                          $MN4b=$qteN3b;
                          $MP4b=$qteP3b;
                          $BP4b=$qtebp3b;
                          $BC4b=$qtebc3b;
                          $difA4b=$dif3b;
                          $point4b=$pttb3b;

                      }else{
            //Test si la troisiemeb est la troisiemeb du classement
                         $troisiemeb=fgets($GroupB3);
                          $MG3b=$qteG3b;
                          $MN3b=$qteN3b;
                          $MP3b=$qteP3b;
                          $BP3b=$qtebp3b;
                          $BC3b=$qtebc3b;
                          $difA3b=$dif3b;
                          $point3b=$pttb3b;
             // Test si la deuxiemeb est le quatrime4b du classement 
                         $quatrime4b=fgets($GroupB2);
                          $MG4b=$qteG2b;
                          $MN4b=$qteN2b;
                          $MP4b=$qteP2b;
                          $BP4b=$qtebp2b;
                          $BC4b=$qtebc2b;
                          $difA4b=$dif2b;
                          $point4b=$pttb2b;
                      }
                  }
//######################################################################################################################################
                  //  if principale
           //Test si le deuxiemeb equipe est le premierb du classement 
}else if(($pttb2b>$pttb1b and $pttb2b>$pttb3b and $pttb2b>$pttb4b) || (($pttb2b>=$pttb1b and $pttb2b>=$pttb3b and $pttb2b>=$pttb4b) and ($dif2b>=$dif1b and $dif2b>=$dif3b and $dif2b>$dif4b))){
                 $premierb=fgets($GroupB2);
                  $MGb=$qteG2b;
                  $MNb=$qteN2b;
                  $MPb=$qteP2b;
                  $BPb=$qtebp2b;
                  $BCb=$qtebc2b;
                  $difAb=$dif2b;
                  $pointb=$pttb2b;

                  if(($pttb1b>$pttb3b and $pttb1b>$pttb4b) || (($pttb1b>=$pttb3b and $pttb1b>=$pttb4b) && ($dif1b>$dif3b and $dif1b>$dif4b))){
                    $deuxiemeb=fgets($GroupB1);
                      $MG2b=$qteG1b;
                      $MN2b=$qteN1b;
                      $MP2b=$qteP1b;
                      $BP2b=$qtebp1b;
                      $BC2b=$qtebc1b;
                      $difA2b=$dif1b;
                      $point2b=$pttb1b;

                      if( ($pttb3b>$pttb4b) || (($pttb3b>=$pttb4b) && ($dif3b>$dif4b))){
                    $troisiemeb=fgets($GroupB3);
                          $MG3b=$qteG3b;
                          $MN3b=$qteN3b;
                          $MP3b=$qteP3b;
                          $BP3b=$qtebp3b;
                          $BC3b=$qtebc3b;
                          $difA3b=$dif3b;
                          $point3b=$pttb3b;

                    $quatrime4b=fgets($GroupB4);
                          $MG4b=$qteG4b;
                          $MN4b=$qteN4b;
                          $MP4b=$ateP4b;
                          $BP4b=$qtebp4b;
                          $BC4b=$qtebc4b;
                          $difA4b=$dif4b;
                          $point4b=$pttb4b;

                      }else{
                    $troisiemeb=fgets($GroupB4);
                          $MG3b=$qteG4b;
                          $MN3b=$qteN4b;
                          $MP3b=$ateP4b;
                          $BP3b=$qtebp4b;
                          $BC3b=$qtebc4b;
                          $difA3b=$dif4b;
                          $point3b=$pttb4b;

                     $quatrime4b=fgets($GroupB3);
                          $MG4b=$qteG3b;
                          $MN4b=$qteN3b;
                          $MP4b=$qteP3b;
                          $BP4b=$qtebp3b;
                          $BC4b=$qtebc3b;
                          $difA4b=$dif3b;
                          $point4b=$pttb3b;
                      }

                   
                  }else if(($pttb3b>$pttb1b and $pttb3b>$pttb4b) || (($pttb3b>=$pttb1b and $pttb3b>=$pttb4b) && ($dif3b>$dif1b and $dif3b>$dif4b))){
                     $deuxiemeb=fgets($GroupB3);
                      $MG2b=$qteG3b;
                      $MN2b=$qteN3b;
                      $MP2b=$qteP3b;
                      $BP2b=$qtebp3b;
                      $BC2b=$qtebc3b;
                      $difA2b=$dif3b;
                      $point2b=$pttb3b;

                      if(($pttb1b>$pttb4b) || (($pttb1b>=$pttb4b) && ($dif1b>$dif4b))){
                        $troisiemeb=fgets($GroupB1);
                          $MG3b=$qteG1b;
                          $MN3b=$qteN1b;
                          $MP3b=$qteP1b;
                          $BP3b=$qtebp1b;
                          $BC3b=$qtebc1b;
                          $difA3b=$dif1b;
                          $point3b=$pttb1b;

                       $quatrime4b=fgets($GroupB4);
                          $MG4b=$qteG4b;
                          $MN4b=$qteN4b;
                          $MP4b=$ateP4b;
                          $BP4b=$qtebp4b;
                          $BC4b=$qtebc4b;
                          $difA4b=$dif4b;
                          $point4b=$pttb4b;

                      }else{
                       $troisiemeb=fgets($GroupB4);
                          $MG3b=$qteG4b;
                          $MN3b=$qteN4b;
                          $MP3b=$ateP4b;
                          $BP3b=$qtebp4b;
                          $BC3b=$qtebc4b;
                          $difA3b=$dif4b;
                          $point3b=$pttb4b;

                       $quatrime4b=fgets($GroupB1);
                          $MG4b=$qteG1b;
                          $MN4b=$qteN1b;
                          $MP4b=$qteP1b;
                          $BP4b=$qtebp1b;
                          $BC4b=$qtebc1b;
                          $difA4b=$dif1b;
                          $point4b=$pttb1b;
                      }
                      
                  }else{
                    $deuxiemeb=fgets($GroupB4);
                      $MG2b=$qteG4b;
                      $MN2b=$qteN4b;
                      $MP2b=$ateP4b;
                      $BP2b=$qtebp4b;
                      $BC2b=$qtebc4b;
                      $difA2b=$dif4b;
                      $point2b=$pttb4b;
                  

                      if(($pttb1b>$pttb3b) || (($pttb1b>=$pttb3b) && ($dif1b>=$dif3b))){
                          $troisiemeb=fgets($GroupB1);
                          $MG3b=$qteG1b;
                          $MN3b=$qteN1b;
                          $MP3b=$qteP1b;
                          $BP3b=$qtebp1b;
                          $BC3b=$qtebc1b;
                          $difA3b=$dif1b;
                          $point3b=$pttb1b;

                          $quatrime4b=fgets($GroupB3);
                          $MG4b=$qteG3b;
                          $MN4b=$qteN3b;
                          $MP4b=$qteP3b;
                          $BP4b=$qtebp3b;
                          $BC4b=$qtebc3b;
                          $difA4b=$dif3b;
                          $point4b=$pttb3b;

                      }else{
                          $troisiemeb=fgets($GroupB3);
                          $MG3b=$qteG3b;
                          $MN3b=$qteN3b;
                          $MP3b=$qteP3b;
                          $BP3b=$qtebp3b;
                          $BC3b=$qtebc3b;
                          $difA3b=$dif3b;
                          $point3b=$pttb3b;

                         $quatrime4b=fgets($GroupB1);
                          $MG4b=$qteG1b;
                          $MN4b=$qteN1b;
                          $MP4b=$qteP1b;
                          $BP4b=$qtebp1b;
                          $BC4b=$qtebc1b;
                          $difA4b=$dif1b;
                          $point4b=$pttb1b;
                      }
                  }
//######################################################################################################################################
        //Test si le troisiemeb equipe est le premierb du classment 

              }else if(($pttb3b>$pttb2b and $pttb3b>$pttb1b and $pttb3b>$pttb4b) || (($pttb3b>=$pttb2b and $pttb3b>=$pttb1b and $pttb3b>=$pttb4b) && ($dif3b>$dif2b and $dif3b>$dif1b and $dif3b>$dif4b))){
                  $premierb=fgets($GroupB3);
                  $MGb=$qteG3b;
                  $MNb=$qteN3b;
                  $MPb=$qteP3b;
                  $BPb=$qtebp3b;
                  $BCb=$qtebc3b;
                  $difAb=$dif3b;
                  $pointb=$pttb3b;

                  if( ($pttb1b>$pttb2b and $pttb1b>$pttb4b) || (($pttb1b>=$pttb2b and $pttb1b>=$pttb4b) && ($dif1b>$dif2b and $dif1b>$dif4b))){
                      $deuxiemeb=fgets($GroupB1);
                      $MG2b=$qteG1b;
                      $MN2b=$qteN1b;
                      $MP2b=$qteP1b;
                      $BP2b=$qtebp1b;
                      $BC2b=$qtebc1b;
                      $difA2b=$dif1b;
                      $point2b=$pttb1b;

                      if(($pttb2b>$pttb4b) || (($pttb2b>=$pttb4b) && ($dif2b>$dif4b ))){
                         $troisiemeb=fgets($GroupB2);
                          $MG3b=$qteG2b;
                          $MN3b=$qteN2b;
                          $MP3b=$qteP2b;
                          $BP3b=$qtebp2b;
                          $BC3b=$qtebc2b;
                          $difA3b=$dif2b;
                          $point3b=$pttb2b;

                         $quatrime4b=fgets($GroupB4);
                          $MG4b=$qteG4b;
                          $MN4b=$qteN4b;
                          $MP4b=$ateP4b;
                          $BP4b=$qtebp4b;
                          $BC4b=$qtebc4b;
                          $difA4b=$dif4b;
                          $point4b=$pttb4b;

                      }else{
                         $troisiemeb=fgets($GroupB4);
                          $MG3b=$qteG4b;
                          $MN3b=$qteN4b;
                          $MP3b=$ateP4b;
                          $BP3b=$qtebp4b;
                          $BC3b=$qtebc4b;
                          $difA3b=$dif4b;
                          $point3b=$pttb4b;

                          $quatrime4b=fgets($GroupB2);
                          $MG4b=$qteG2b;
                          $MN4b=$qteN2b;
                          $MP4b=$qteP2b;
                          $BP4b=$qtebp2b;
                          $BC4b=$qtebc2b;
                          $difA4b=$dif2b;
                          $point4b=$pttb2b;
                      }

            
                  }else if(($pttb2b>$pttb1b and $pttb2b>$pttb4b) || (($pttb2b>=$pttb1b and $pttb2b>=$pttb4b) && ($dif2b>$dif1b and $dif2b>$dif4b))){
                    $deuxiemeb=fgets($GroupB2);
                      $MG2b=$qteG2b;
                      $MN2b=$qteN2b;
                      $MP2b=$qteP2b;
                      $BP2b=$qtebp2b;
                      $BC2b=$qtebc2b;
                      $difA2b=$dif2b;
                      $point2b=$pttb2b;

                      if(($pttb1b>$pttb4b) || (($pttb1b>=$pttb4b) and ($dif1b>$dif4b))){
                          $troisiemeb=fgets($GroupB1);
                          $MG3b=$qteG1b;
                          $MN3b=$qteN1b;
                          $MP3b=$qteP1b;
                          $BP3b=$qtebp1b;
                          $BC3b=$qtebc1b;
                          $difA3b=$dif1b;
                          $point3b=$pttb1b;

                          $quatrime4b=fgets($GroupB4);
                          $MG4b=$qteG4b;
                          $MN4b=$qteN4b;
                          $MP4b=$ateP4b;
                          $BP4b=$qtebp4b;
                          $BC4b=$qtebc4b;
                          $difA4b=$dif4b;
                          $point4b=$pttb4b;

                      }else{
                          $troisiemeb=fgets($GroupB4);
                          $MG3b=$qteG4b;
                          $MN3b=$qteN4b;
                          $MP3b=$ateP4b;
                          $BP3b=$qtebp4b;
                          $BC3b=$qtebc4b;
                          $difA3b=$dif4b;
                          $point3b=$pttb4b;

                         $quatrime4b=fgets($GroupB1);
                          $MG4b=$qteG1b;
                          $MN4b=$qteN1b;
                          $MP4b=$qteP1b;
                          $BP4b=$qtebp1b;
                          $BC4b=$qtebc1b;
                          $difA4b=$dif1b;
                          $point4b=$pttb1b;
                      }

                      

                  }else{
                      $deuxiemeb=fgets($GroupB4);
                      $MG2b=$qteG4b;
                      $MN2b=$qteN4b;
                      $MP2b=$ateP4b;
                      $BP2b=$qtebp4b;
                      $BC2b=$qtebc4b;
                      $difA2b=$dif4b;
                      $point2b=$pttb4b;
                  

                      if( ($pttb1b>$pttb2b) || (($pttb1b>=$pttb2b) && ($dif1b>$dif2b))){
                          $troisiemeb=fgets($GroupB1);
                          $MG3b=$qteG1b;
                          $MN3b=$qteN1b;
                          $MP3b=$qteP1b;
                          $BP3b=$qtebp1b;
                          $BC3b=$qtebc1b;
                          $difA3b=$dif1b;
                          $point3b=$pttb1b;

                          $quatrime4b=fgets($GroupB2);
                          $MG4b=$qteG2b;
                          $MN4b=$qteN2b;
                          $MP4b=$qteP2b;
                          $BP4b=$qtebp2b;
                          $BC4b=$qtebc2b;
                          $difA4b=$dif2b;
                          $point4b=$pttb2b;

                      }else{
                          $troisiemeb=fgets($GroupB2);
                          $MG3b=$qteG2b;
                          $MN3b=$qteN2b;
                          $MP3b=$qteP2b;
                          $BP3b=$qtebp2b;
                          $BC3b=$qtebc2b;
                          $difA3b=$dif2b;
                          $point3b=$pttb2b;

                          $quatrime4b=fgets($GroupB1);
                          $MG4b=$qteG1b;
                          $MN4b=$qteN1b;
                          $MP4b=$qteP1b;
                          $BP4b=$qtebp1b;
                          $BC4b=$qtebc1b;
                          $difA4b=$dif1b;
                          $point4b=$pttb1b;
                      }
                  }

              }else{
     //##################################################################################################################################
        //Test si le quatrime4b equipe est le premierb du classement
                  
                 $premierb=fgets($GroupB4);
                  $MGb=$qteG4b;
                  $MNb=$qteN4b;
                  $MPb=$ateP4b;
                  $BPb=$qtebp4b;
                  $BCb=$qtebc4b;
                  $difAb=$dif4b;
                  $pointb=$pttb4b;
                  
                  if( ($pttb1b>$pttb2b and $pttb1b>$pttb3b) || (($pttb1b>=$pttb2b and $pttb1b>=$pttb3b) && ($dif1b>$dif2b and $dif1b>$dif3b))){
                     $deuxiemeb=fgets($GroupB1);
                      $MG2b=$qteG1b;
                      $MN2b=$qteN1b;
                      $MP2b=$qteP1b;
                      $BP2b=$qtebp1b;
                      $BC2b=$qtebc1b;
                      $difA2b=$dif1b;
                      $point2b=$pttb1b;

                      if( ($pttb2b>$pttb3b) || (($pttb2b>=$pttb3b) && ($dif2b>$dif3b))){
                         $troisiemeb=fgets($GroupB2);
                          $MG3b=$qteG2b;
                          $MN3b=$qteN2b;
                          $MP3b=$qteP2b;
                          $BP3b=$qtebp2b;
                          $BC3b=$qtebc2b;
                          $difA3b=$dif2b;
                          $point3b=$pttb2b;

                       $quatrime4b=fgets($GroupB3);
                        
                          $MG4b=$qteG3b;
                          $MN4b=$qteN3b;
                          $MP4b=$qteP3b;
                          $BP4b=$qtebp3b;
                          $BC4b=$qtebc3b;
                          $difA4b=$dif3b;
                          $point4b=$pttb3b;

                      }else{
                          $troisiemeb=fgets($GroupB3);

                          $MG3b=$qteG3b;
                          $MN3b=$qteN3b;
                          $MP3b=$qteP3b;
                          $BP3b=$qtebp3b;
                          $BC3b=$qtebc3b;
                          $difA3b=$dif3b;
                          $point3b=$pttb3b;

                          $quatrime4b=fgets($GroupB2);
                          $MG4b=$qteG2b;
                          $MN4b=$qteN2b;
                          $MP4b=$qteP2b;
                          $BP4b=$qtebp2b;
                          $BC4b=$qtebc2b;
                          $difA4b=$dif2b;
                          $point4b=$pttb2b;
                      }

                   
                  }else if( ( $pttb2b>$pttb3b and $pttb2b>$pttb1b) || (($pttb2b>=$pttb3b and $pttb2b>=$pttb1b) && ($dif2b>=$dif3b and $dif2b>=$dif1b))){
                      $deuxiemeb=fgets($GroupB2);
                      $MG2b=$qteG2b;
                      $MN2b=$qteN2b;
                      $MP2b=$qteP2b;
                      $BP2b=$qtebp2b;
                      $BC2b=$qtebc2b;
                      $difA2b=$dif2b;
                      $point2b=$pttb2b;

                      if(($pttb1b>=$pttb3b) || (($pttb1b>=$pttb3b) && ($dif1b>$dif3b))){
                          $troisiemeb=fgets($GroupB1);
                          $MG3b=$qteG1b;
                          $MN3b=$qteN1b;
                          $MP3b=$qteP1b;
                          $BP3b=$qtebp1b;
                          $BC3b=$qtebc1b;
                          $difA3b=$dif1b;
                          $point3b=$pttb1b;

                          $quatrime4b=fgets($GroupB3);
                          $MG4b=$qteG3b;
                          $MN4b=$qteN3b;
                          $MP4b=$qteP3b;
                          $BP4b=$qtebp3b;
                          $BC4b=$qtebc3b;
                          $difA4b=$dif3b;
                          $point4b=$pttb3b;

                      }else{
                          $troisiemeb=fgets($GroupB3);
                          $MG3b=$qteG3b;
                          $MN3b=$qteN3b;
                          $MP3b=$qteP3b;
                          $BP3b=$qtebp3b;
                          $BC3b=$qtebc3b;
                          $difA3b=$dif3b;
                          $point3b=$pttb3b;

                          $quatrime4b=fgets($GroupB1);
                          $MG4b=$qteG1b;
                          $MN4b=$qteN1b;
                          $MP4b=$qteP1b;
                          $BP4b=$qtebp1b;
                          $BC4b=$qtebc1b;
                          $difA4b=$dif1b;
                          $point4b=$pttb1b;
                      }

                  }else{
                      $deuxiemeb=fgets($GroupB3);
                      $MG2b=$qteG3b;
                      $MN2b=$qteN3b;
                      $MP2b=$qteP3b;
                      $BP2b=$qtebp3b;
                      $BC2b=$qtebc3b;
                      $difA2b=$dif3b;
                      $point2b=$pttb3b;
                  

                      if(($pttb1b>$pttb2b) || (($pttb1b>=$pttb2b) && ($dif1b>$dif2b))){
                          $troisiemeb=fgets($GroupB1);
                          $MG3b=$qteG1b;
                          $MN3b=$qteN1b;
                          $MP3b=$qteP1b;
                          $BP3b=$qtebp1b;
                          $BC3b=$qtebc1b;
                          $difA3b=$dif1b;
                          $point3b=$pttb1b;

                         $quatrime4b=fgets($GroupB2);
                          $MG4b=$qteG2b;
                          $MN4b=$qteN2b;
                          $MP4b=$qteP2b;
                          $BP4b=$qtebp2b;
                          $BC4b=$qtebc2b;
                          $difA4b=$dif2b;
                          $point4b=$pttb2b;

                      }else{
                         $troisiemeb=fgets($GroupB2);
                          $MG3b=$qteG2b;
                          $MN3b=$qteN2b;
                          $MP3b=$qteP2b;
                          $BP3b=$qtebp2b;
                          $BC3b=$qtebc2b;
                          $difA3b=$dif2b;
                          $point3b=$pttb2b;

                          $quatrime4b=fgets($GroupB1);
                          $MG4b=$qteG1b;
                          $MN4b=$qteN1b;
                          $MP4b=$qteP1b;
                          $BP4b=$qtebp1b;
                          $BC4b=$qtebc1b;
                          $difA4b=$dif1b;
                          $point4b=$pttb1b;
                      }
                  }
           }   
           $PremierGrpoupB=fopen('fichier/premiergroupeB.txt',"w");
           fwrite($PremierGrpoupB,$premierb);
           fclose($PremierGrpoupB);

           $deuxiemeGroupeB=fopen('fichier/deuxiemeGroupeB.txt',"w");
           fwrite($deuxiemeGroupeB,$deuxiemeb);
           fclose($deuxiemeGroupeB);

           fclose($GroupB1);
           fclose($GroupB2);
           fclose($GroupB3);
           fclose($GroupB4);
    

        }
?>
