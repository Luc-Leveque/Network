  <?php
       

       $monamie=(int)$_GET['id'];
       $id= (int)$_SESSION["id_u"];
       
        $mamie= 'Delete from demande_amie WHERE (a2 = :a1 AND a1 = :a2) OR (a2 = :a2 AND a1 = :a1) ';

									$mamie = $bdd->prepare($mamie);
									$mamie = $mamie->execute(array(
                                        ':a1' => $id ,
										':a2' => $monamie
									));
     
	 {
		echo "<script type=\"text/javascript\">
							alert(\"friend request deleted\");
						</script>";

        header('Location: ' . BASE_URL . '/requete');
		
	}
	
	
  ?>