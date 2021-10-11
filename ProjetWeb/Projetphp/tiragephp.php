<?php            
  $num=1;    
  $tirage1="";
  $tirage2="";
  $tirage3="";
  $tirage4="";   

  
  
  
if(isset($_GET['tirage'])){
                 $num=2;
                        
                        $table1=array("Argentine","Bresil");
                        $rantab1=rand(0,1);
                     
                        $tirage1=$table1[$rantab1];
                


                        $table2=array("France","Italie");
                        $rantab2=rand(0,1);
                        $tirage2=$table2[$rantab2];


                         $table3=array("Espagne","Allemagne");
                         $rantab3=rand(0,1);
                         $tirage3=$table3[$rantab3];
                          
                      

                         $table4=array("Portugal","Haiti");
                         $rantab4=rand(0,1);
                         $tirage4=$table4[$rantab4];

                       

                         if($table1[$rantab1]=="Argentine"){
                            $table1B="Brezil";
                            $tirageb1=$table1B;
                         }else{
                            $table1B="Argentine";
                            $tirageb1=$table1B;
                         }
                        


                         if($table2[$rantab2]=="France"){
                            $table2B="Italie";
                            $tirageb2=$table2B;
                         }else{
                            $table2B="France";
                            $tirageb2=$table2B;
                         }
                       

                         if($table3[$rantab3]=="Espagne"){
                            $table3B="Allemagne";
                            $tirageb3=$table3B;
                         }else{
                            $table3B="Espagne";
                            $tirageb3=$table3B;
                         }


                         if($table4[$rantab4]=="Portugal"){
                            $table4B="Haiti";
                            $tirageb4=$table4B;
                         }else{
                            $table4B="Portugal";
                            $tirageb4=$table4B;
                         }
                  }                               
 ?>


