  <?php

    $image=(int)$_GET['id'];
    $id=(int) $_SESSION['id_u'];

    $samie= 'delete from image WHERE id_i = :id_i';

									$samie = $bdd->prepare($samie);
									$samie = $samie->execute(array(
                                        ':id_i' => $image ,
									));

     {
		echo "<script type=\"text/javascript\">
							alert(\"image est supprimer\");
						</script>";
        header('Location: ' . BASE_URL . '/image');	
		
		}
	
	
  ?>