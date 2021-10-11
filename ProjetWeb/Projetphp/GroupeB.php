<?php 
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
                  $troisiemeb=fgets($GroupB3);
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

                   
                  }else if( ( $pttb2b>$pttb3b and $pttb2b>$pttb1b) || (($pttb2b>=$pttb3b and $pttb2b>=$pttb1b) && ($dif2b>$dif3b and $dif2b>$dif1b))){
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
