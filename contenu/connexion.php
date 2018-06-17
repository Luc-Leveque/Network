	
<html>
    <link href="css/connexion.css" rel="stylesheet">
  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
		<?php 
			if(isset($_POST['submit']))
			{
                $nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$mdp = sha1($_POST['mdp']);
				
				$requete = $bdd->prepare("SELECT * FROM user WHERE nom = :nom AND prenom =:prenom AND mdp = :mdp");
                $requete->bindValue(":nom",$nom,PDO::PARAM_STR);
				$requete->bindValue(":prenom",$prenom,PDO::PARAM_STR);
				$requete->bindValue(":mdp",$mdp,PDO::PARAM_STR);
				$requete->execute();
				
				if($reponse = $requete->fetch())
				{
					$_SESSION['connecte'] = true;
					$_SESSION['id_u'] = $reponse['id_u'];
					
					if(isset($_POST['remember']))
					{
						setcookie('auth',$reponse['id_u']."-----".sha1($reponse['nom'].$reponse['prenom'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
						//le dernier argument evite que le cookie soit editable en javascript
					}
                    
                    
				    $_SESSION['nom']=$reponse['nom'];
                    $_SESSION['prenom']= $reponse['prenom'];
                    
                    

                    header('Location: ' . BASE_URL . '/accueil');
				}
				else
				{
					echo "Mauvais identifiant";
				}
			}
			
			if(isset($_COOKIE['auth']))
			{
				$auth = $_COOKIE['auth'];
				$auth = explode('-----',$auth);
				
				$requete = $bdd->prepare("SELECT * FROM user WHERE id_u = :id_u");
				$requete->bindValue(':id_u',$auth[0],PDO::PARAM_INT);
				$requete->execute();
				$reponse = $requete->fetch();
				$key = sha1($reponse['nom'].$reponse['prenom'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);
				
				if($key == $auth[1])
				{
					$_SESSION['connecte'] = true;
                   
                     
					$_SESSION['id_u'] = $auth[0];
					setcookie('auth',$reponse['id_u']."-----".sha1($reponse['nom'].$reponse['prenom'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
                   
				}
				else
				{
					setcookie('auth','',time()-3600,'/','localhost',false,true);
					//A mettre aussi sur la page de deconnexion
				}
			}
		?>

<div class="login">
    <form method="post" class="marg">
         <h1 class="r">Connexion</h1>
    	  Nom:<input class="texte" type="text" name="nom" /><br />
			Prenom:<input class="texte" type="text" name="prenom" /><br />
			MDP:<input class="texte" type="password" name="mdp" /><br />
			se souvenir de moi<input type="checkbox" name="remember" /><br />
			<input  class="submit" type="submit" name="submit" value="valider" />
			<input class="submit" type="reset" name="raz" value="RAZ" />
    </form>
    <br>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- login bootsnipp -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9155049400353686"
     data-ad-slot="9589048256"
     data-ad-format="auto"></ins>
</div>
	</body>
</html>


