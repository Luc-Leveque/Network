  <?php


    $monamie=(int)$_GET['id'];
    $id= (int)$_SESSION['id_u'];

    $samie= 'delete from amitier WHERE (a2 = :a1 AND a1 = :a2) OR (a2 = :a2 AND a1 = :a1) ';

									$samie = $bdd->prepare($samie);
									$samie = $samie->execute(array(
                                        ':a1' => $id ,
										':a2' => $monamie
									));

     {
		echo "<script type=\"text/javascript\">
							alert(\"friend has been deleted\");
						</script>";
        header('Location: ' . BASE_URL . '/amis');	
		
		}
	
	
  ?>