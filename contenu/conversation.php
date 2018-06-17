<?php 

$id_c = (int) $_GET['id'];
$id_u = (int) $_SESSION['id_u']; 

if(isset($_POST['submit']) && !empty($_POST['submit'])){

	$message = htmlspecialchars($_POST['message']);

	$req = "INSERT INTO messages (id_exp, id_dest, contenu) VALUES ($id_u, $id_c, '$message')";
	$req = $bdd->query($req);

	if(!$req){
		echo "<script>alert('Erreur lors de l'envoie du message !');</script>"; 
	}
}

$requete = "SELECT * FROM messages WHERE (id_exp = $id_c AND id_dest = $id_u) OR (id_exp = $id_u AND id_dest = $id_c) ORDER BY date_msg";
$requete = $bdd->query($requete);


?>

<section class="section white">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
			<?php  
					while($donnees = $requete->fetch()){

						$expediteur = $bdd->query('SELECT * FROM user WHERE id_u = ' . $donnees['id_exp'])->fetch();

						$date = french_date(strtotime($donnees['date_msg']));

						if($donnees['id_exp'] != $id_u){
			?>
							<div class="col-sm-8 pull-left text-left panel-body border-teal">
									<h6><?= $expediteur['prenom'] . ' ' . $expediteur['nom'] ?><small class="pull-right"> <?= $date ?></small></h6><hr>
	                  			<p><?= $donnees['contenu'] ?></p>
	                		</div>

			<?php 		}else{ ?>
	                		<div class="col-sm-8 pull-right text-right panel-body border-violet">
									<h6><small class="pull-left"> <?= $date ?> </small><?= $expediteur['prenom'] . ' ' . $expediteur['nom'] ?></h6><hr>
	                  			<p><?= $donnees['contenu'] ?></p>
	                		</div>
            <?php 
            			}
            		} 
            ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<form action="" method="post" id="contact-form">
						<div class="row" style="margin-top: 50px">
							<div class="col-sm-12 text-center">
								<div class="form-group text-left">
									<label for="contact-message">Message</label>
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<textarea name="message" id="contact-message" class="form-with-icon" rows="7"></textarea>
								</div>
								<input type="submit" name="submit" class="button btn-primary">
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</section> <!-- end .section -->