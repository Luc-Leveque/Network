<ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="blog-post.php">Accueil</a>
                    </li>
                    <li>
                        <a href="profil.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="Permisauto.php">Image</a>
                            </li>
                            <li>
                                <a href="Permismoto.php">Mes amis</a>
                            </li>
                            <li>
                                <a href="Permismoto.php">Reglage</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscription / Connexion <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <?php
        if(isset($_SESSION['connecte'])){
                 if ($_SESSION['connecte'] == true){
                    echo("");    
                }
                 else{
                   // header ("location:register.php");
                    echo '<a href="register.php" class="list-group-item">Inscription</a>';
                } 
        }

        else{
                   // header ("location:register.php");
                  echo '<a href="register.php" class="list-group-item">Inscription</a>';
               }
                            ?>
                            
                            
                              <?php
        if(isset($_SESSION['connecte'])){
                 if ($_SESSION['connecte'] == true){
                    echo("");      
                }
                else{
                   // header ("location:register.php");
                    echo '<a href="connexion.php" class="list-group-item">Connexion</a>';
                } 
        }
        else{
                   // header ("location:register.php");
                  echo '<a href="connexion.php" class="list-group-item">Connexion</a>';
               }
                            ?>
                           
                             <?php
               if(isset($_SESSION['connecte'])){
                 if ($_SESSION['connecte'] == true)
{
    echo '<a href="logout.php" class="list-group-item">Déconnexion</a>';
}
                     else{
                   // header ("location:register.php");
                    echo '<a href="register.php" class="list-group-item">Inscription</a>';
                } 
                   }
                    ?>
                    
                        </ul>
                        </li>
                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        
