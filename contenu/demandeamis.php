<?php

           $receiver=(int)$_GET['id'];
           $sender=(int)$_SESSION['id_u'];
             
            $query = "SELECT count(*) AS nb FROM demande_amie  WHERE a2 = $sender AND a1 = $receiver OR a2 = $receiver AND a1 = $sender ";
            $query = $bdd->query($query)->fetch(PDO::FETCH_ASSOC); 
            $query =$query['nb'];
            
            if($query > 0){
                
                $_SESSION['alert'] = 1;

            header('Location: ' . BASE_URL . '/pasamis');
             }
	
           else{
   
             $query2 = "SELECT count(*) FROM amitier WHERE a1= $sender AND a2=$receiver OR a1=$receiver AND a2=$sender";
             $query2 = $bdd->query($query2)->fetch(PDO::FETCH_ASSOC); 
             $query2 =$query2['nb'];
               
			 if($query2 > 0){
        
                 $_SESSION['alert'] = 2;
	   

	       echo"
               <script type=\"text/javascript\">
							alert(\"Cette personne est déjà votre amis\");
						</script>

              ";
             header('Location: ' . BASE_URL . '/pasamis');

            }
             else
     
	         {
                 echo "aaa";
                 $req = 'INSERT INTO demande_amie (a1,a2 ) VALUES (:a1 , :a2)';

									$req = $bdd->prepare($req);
									$req = $req->execute(array(
                                        ':a1' => $sender ,
										':a2' => $receiver
									));
            
			 {
		           $_SESSION['alert'] = 3;
			           echo "<script type=\"text/javascript\">
							alert(\"Requete envoyé\");
						</script>";
             header('Location: ' . BASE_URL . '/pasamis');
			
		
               }
	          }
            }		
 
             ?>