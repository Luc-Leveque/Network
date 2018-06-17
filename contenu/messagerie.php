
<link href="css/messagerie.php" rel="stylesheet">


 <?php
    if(isset($_POST['submit']))
    {
        extract($_POST);
        
        $requete = $bdd->prepare("SELECT id_u FROM user WHERE email = :email");
        $requete->bindValue(':email',$destinataire,PDO::PARAM_STR);
        $requete->execute();
        if($reponse = $requete->fetch())
        {
                $requete = $bdd->prepare("INSERT INTO messages(titre,contenu,id_exp,id_dest) VALUES(:titre,:contenu,:exp,:dest)");
        
                $requete->bindValue(':titre',$titre,PDO::PARAM_STR);
                $requete->bindValue(':contenu',$contenu,PDO::PARAM_STR);
                $requete->bindValue(':exp',$_SESSION['id_u'],PDO::PARAM_INT);
                $requete->bindValue(':dest',$reponse['id_u'],PDO::PARAM_INT);
                $requete->execute();
                echo "Message envoyé";   
            
        header('Location: ' . BASE_URL . '/accueil');
                
        }
        else
        {
            echo "Destinataire inconnu";
        }
        
   
    }
?>

<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" method="post">
      
          
      <p class="email">
        <input name="destinataire" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email Destinataire" />
      </p>
      
      <p class="name">
        <input name="titre" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Titre" id="name" />
      </p>
      
      <p class="text">
        <textarea name="contenu" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Contenu"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" name="submit" value="Envoyer" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>

  
 
    
    