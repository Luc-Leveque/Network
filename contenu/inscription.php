<html>

  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/connexion.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<body>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <title>Inscription</title>
    </head>
    <?php 

if(isset($_POST['submit']) && !empty($_POST['submit'])){
	if(isset($_POST['nom']) && !empty($_POST['nom']) && preg_match("#^([A-Z]{1}([ -]?[a-z])+)$#",$_POST['nom'])){
		if(isset($_POST['prenom']) && !empty($_POST['prenom'])  && preg_match("#^([A-Z]{1}([ -]?[a-z])+)$#",$_POST['prenom'])){
			if(isset($_POST['email']) && !empty($_POST['email']) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,6}$#",$_POST['email'])){
				if(isset($_POST['phone']) && !empty($_POST['phone']) && preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$_POST['phone'])){
					//if(isset($_POST['address']) && !empty($_POST['address'])){
						if(isset($_POST['mdp']) && !empty($_POST['mdp'])){
							if(isset($_POST['re_mdp']) && !empty($_POST['re_mdp'])){
                                if(isset($_POST['login']) && !empty($_POST['login'])) {

								$nom = htmlspecialchars($_POST['nom']);
								$prenom = htmlspecialchars($_POST['prenom']);
								$email = htmlspecialchars($_POST['email']);
								$phone = htmlspecialchars($_POST['phone']);
								//$adresse = htmlspecialchars($_POST['address']);
                                    
                                $login = htmlspecialchars($_POST['login']);
								$mdp = sha1(htmlspecialchars($_POST['mdp']));
								$re_mdp = sha1(htmlspecialchars($_POST['re_mdp']));

								if($mdp == $re_mdp){

									$req = 'INSERT INTO user (login , email, mdp, nom, prenom, tel ) VALUES (:login ,:email, :mdp, :nom, :prenom,:telephone)';

									$req = $bdd->prepare($req);
									$req = $req->execute(array(
                                        ':login' => $login ,
										':email' => $email ,
										':mdp' => $mdp ,
										':nom' => $nom ,
										':prenom' => $prenom ,
										':telephone' => $phone ,
									));

									echo "
                                    <script type=\"text/javascript\">
                                    alert(\'Vous etes inscrit\');
                                    </script>";
                                    
                                header('Location: ' . BASE_URL . '/connexion');
                                }
                                else{ $erreur = '<div class="alert alert-danger">Les deux mot de passe <b>ne correspondent pas</b> !</div>';
								}
                                }
                                else{ $erreur = '<div class="alert alert-danger">Veuillez saisir un <b> login </b> !</div>' ;  
								}
							}
							else{ $erreur = '<div class="alert alert-danger">Veuillez re-saisir votre <b>mot de passe</b> !</div>';
							}
						}
						else{ $erreur = '<div class="alert alert-danger">Veuillez saisir un <b>mot de passe</b> !</div>';
						}
					//}
					//else{ $erreur = '<div class="alert alert-danger">Veuillez saisir une <b>adresse</b> !</div>';
					//}
				}
				else{ $erreur = '<div class="alert alert-danger">Veuillez saisir un <b>numéro de téléphone</b> !</div>';
				}
			}
			else{ $erreur = '<div class="alert alert-danger">Veuillez saisir une <b>adresse email valide </b> !</div>';
			}
		}
		else{ $erreur = '<div class="alert alert-danger">Veuillez saisir un <b>prenom</b> !</div>'; 
		}
	}
	else{ $erreur = '<div class="alert alert-danger">Veuillez saisir un <b>nom</b> !</div>';
	}
}


?>
            <div class="container">
                <div class="row main">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h1 class="title">Social-network</h1>
                            <hr /> </div>
                    </div>
                    <div class="main-login main-center">
                       <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
                        <form class="form-horizontal" method="post" action="#">
                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Login</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="login" id="login" placeholder="Entrer votre login" /> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Nom</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrer votre nom" /> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label">Prenom</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true" ></i></span>
                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrer votre prenom" /> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true" ></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre email" /> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="cols-sm-2 control-label">Telephone</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Entrer votre n° de Télephone" /> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Mdp</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Entrer votre mot de passe" /> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Mdp de confirmation</label>
                                <div class="cols-sm-10">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="re_mdp" id="re_mdp" placeholder="Confirmer votre mot de passe" /> </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input class="btn btn-primary btn-lg btn-block login-button" type="submit" name="submit" value="S'inscrire" /> </div>
                            <div class="login-register"> <a href='<?php echo BASE_URL; ?>/connexion'>Connexion</a> </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</html>


