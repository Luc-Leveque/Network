<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | User Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php

?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo BASE_URL; ?>/accueil" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels --><span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices --><span class="logo-lg"><b>Admin</b>LTE</span> </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span> </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <?php
$id = $_SESSION['id_u'];
$sql1 = 'SELECT * FROM user WHERE id_u = ' . $_SESSION['id_u'];
$requete = $bdd->query($sql1);
                                                    
                                                    
			while($reponse = $requete->fetch())
				{
?>
                                                        <div class="pull-left"> <img src="<?php echo $reponse['image_profil'] ; ?>" class="img-circle" alt="User Image"> </div>
                                                        <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left"> <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> </div>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> 5 new members joined today </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo $reponse['image_profil'] ; ?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $_SESSION['nom'] ; 
                                                        echo $_SESSION['prenom'] ;?></span> </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header"> <img src="<?php echo $reponse['image_profil'] ; ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $_SESSION['nom'] ; 
                                                 echo $_SESSION['prenom'] ;?> <small>Member since Nov. 2012</small> </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left"> <a href="<?php echo BASE_URL; ?>/profil" class="btn btn-default btn-flat">Profil</a> </div>
                                        <div class="pull-right"> <a href="<?php echo BASE_URL; ?>/logout" class="btn btn-default btn-flat">logout</a> </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image"> <img src="<?php echo $reponse['image_profil'] ; ?>" class="img-circle" alt="User Image"> </div>
                        <div class="pull-left info">
                            <p>
                                <?php echo $_SESSION['nom'] ; 
                                echo $_SESSION['prenom'] ;?>
                            </p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span> </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <                         <<ul class="sidebar-menu">
                        <li class="header">MENU</li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/accueil"> <i class="fa fa-globe" aria-hidden="true"></i> <span>Accueil</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/profil"> <i class="fa fa-user" aria-hidden="true"></i> <span>Profil</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/messagerie"> <i class="fa fa-comments" aria-hidden="true"></i> <span>Chat</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/image"> <i class="fa fa-picture-o" aria-hidden="true"></i></i> <span>Image</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/amis"> <i class="fa fa-list" aria-hidden="true"></i> <span>Liste amis</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/requete"> <i class="fa fa-hand-peace-o" aria-hidden="true"></i> <span>Requete</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/pasamis"> <i class="fa fa-user-plus" aria-hidden="true"></i> <span>Decouvrer de nouveaux amis</span> </a>
                        </li>
                        <li>
                            <?php
                        if(isset($_SESSION['connecte'])){
                        if ($_SESSION['connecte'] == true)
                        {
                        ?>
                                <a href='<?php echo BASE_URL; ?>/logout'> <i class="fa fa-sign-out" aria-hidden="true"></i></i> <span>Déconnexion</span> </a>
                                <?php
                        }
                        else
                        {
                        header('Location: ' . BASE_URL . '/connexion');
                        } 
                        }
                        ?>
                        </li>
                        </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1> 
                    </h1> </section>
                <div class="col-md-12">
                    <!-- USERS LIST -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Liste image</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i> </button> <a class="label label-danger" href="<?php echo BASE_URL; ?>/pimage">Ajouter une image</a> </li>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <?php 
                                $id_u = $_SESSION['id_u'];

                                $image ="SELECT * FROM user u , image i   WHERE i.id_u = u.id_u and u.id_u=$id ";  

                                $image = $bdd->query($image);


                                while($reponse2 = $image->fetch())
                                {

                                ?>
                                    <li> <img src="<?php echo $reponse2['lien'] ; ?>"> <a class="label label-danger" href="<?php echo BASE_URL; ?>/supimage/<?php echo $reponse2['id_i'] ; ?>">Supprimer l'image</a> </li>
                                    </li>
                                    <?php } ?>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                    </div>
                    <!--/.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.col -->
        </div>
        < </div>
            <!-- /.col -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
            </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)"> <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span> </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Report panel usage
                                    <input type="checkbox" class="pull-right" checked> </label>
                                <p> Some information about this general settings option </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked> </label>
                                <p> Other sets of options are available </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked> </label>
                                <p> Allow the user to show his name in blog posts </p>
                            </div>
                            <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">Chat Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Show me as online
                                    <input type="checkbox" class="pull-right" checked> </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Turn off notifications
                                    <input type="checkbox" class="pull-right"> </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Delete chat history <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a> </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->
            <!-- jQuery 2.2.3 -->
            <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="plugins/fastclick/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/app.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="dist/js/demo.js"></script>
            <?php } ?>
    </body>