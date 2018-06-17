<link href="css/messagerie.php" rel="stylesheet">


 <?php
$id=(int)$_SESSION['id_u'];
    if(isset($_POST['submit']))
    {
        extract($_POST);

        $requete = $bdd->prepare("SELECT id_u FROM user WHERE id_u = :id");
        $requete->execute(array(':id'=>$id));
    
        if($reponse = $requete->fetch())
        {
                $requete = $bdd->prepare("INSERT INTO commentaire(contenu,id_u ) VALUES(:contenu , :id_u)");
                $requete->execute(array(
                    ':contenu' => $contenu,
                    ':id_u' => $id
                    
                ));
                echo "Post posté"; 
                header('Location: ' . BASE_URL . '/accueil');
                
        }
        else
        {
            echo "Problème dans la matrice";
        }
        

            
    }
?>

<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" method="post">

      <p class="text">
        <textarea name="contenu" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Contenu"></textarea>
      </p>
      
      <div class="submit">
        <input type="submit" name="submit" value="Envoyer" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>