
<?php


$monamie=(int)$_GET['id'];

$id=(int) $_SESSION["id_u"];

 $req= 'INSERT INTO amitier (a1,a2) VALUES (:a1 , :a2)';

									$req = $bdd->prepare($req);
									$req = $req->execute(array(
                                        ':a1' => $id ,
										':a2' => $monamie
									));
            
 $mamie= 'Delete FROM demande_amie where (a2 = :a1 AND a1 = :a2) OR (a2 = :a2 AND a1 = :a1)   ';

									$mamie = $bdd->prepare($mamie);
									$mamie = $mamie->execute(array(
                                        ':a1' => $id ,
										':a2' => $monamie
									));
{

echo "<script type=\"text/javascript\">
        alert(\"friend added\");
    </script>";
header('Location: ' . BASE_URL . '/requete');


}


?>