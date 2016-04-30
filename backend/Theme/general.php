<!DOCTYPE html>
<?php
	include('server/session.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
	  <?php include('php_templates/header.php'); ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="general.php">General</a></li>
                          <li><a  href="buttons.php">Buttons</a></li>
                          <li><a  href="panels.php">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Calendar</a></li>
                          <li><a  href="gallery.php">Gallery</a></li>
                          <li><a  href="todo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.php">Blank Page</a></li>
                          <li><a  href="login.php">Login</a></li>
                          <li><a  href="lock_screen.php">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.php">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.php">Basic Table</a></li>
                          <li><a  href="responsive_table.php">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.php">Morris</a></li>
                          <li><a  href="chartjs.php">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		<div class="row mt">
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<! -- BASIC PROGRESS BARS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Basic Progress Bars</h4>
	      				<div class="progress">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						    <span class="sr-only">20% Complete</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						    <span class="sr-only">60% Complete (warning)</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						    <span class="sr-only">80% Complete</span>
						  </div>
						</div>
      				</div><!--/showback -->
      				
      				<! -- STRIPPED PROGRESS BARS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Stripped Progress Bars</h4>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						    <span class="sr-only">20% Complete</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						    <span class="sr-only">60% Complete (warning)</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						    <span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>      				
					</div><!-- /showback -->
					
      				<! -- ANIMATED PROGRESS BARS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Animated Progress Bars</h4>
	      				<div class="progress progress-striped active">
						  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
						    <span class="sr-only">45% Complete</span>
						  </div>
						</div>
      				</div><!-- /showback -->
      				
      				<! -- MODALS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Modal Example</h4>
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						  Launch Modal
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
						      </div>
						      <div class="modal-body">
						        Hi there, I am a Modal Example for Dashgum Admin Panel.
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Save changes</button>
						      </div>
						    </div>
						  </div>
						</div>      				
      				</div><!-- /showback -->
      				
      				<! -- GRITTER NOTICES -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Gritter Examples</h4>
							<p>Click on below buttons to check it out.</p>
							<a id="add-regular" class="btn btn-default btn-sm" href="javascript:;">Regular</a>
							<a id="add-sticky" class="btn btn-success  btn-sm" href="javascript:;">Sticky</a>
							<a id="add-without-image" class="btn btn-info  btn-sm" href="javascript:;">Imageless</a>
							<a id="add-gritter-light" class="btn btn-warning  btn-sm" href="javascript:;">Light</a>
							<a id="remove-all" class="btn btn-danger  btn-sm" href="general.php#">Remove all</a>
      				</div><!-- /showback -->
      				
      			</div><! --/col-lg-6 -->
      			
      			
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<! -- ALERTS EXAMPLES -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Alerts Examples</h4>
							<div class="alert alert-success"><b>Well done!</b> You successfully read this important alert message.</div>
							<div class="alert alert-info"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
							<div class="alert alert-warning"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
							<div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.</div>      				
      				</div><!-- /showback -->
      				
      				<! -- DISMISSABLE ALERT -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Dismissable Alert</h4>
						<div class="alert alert-warning alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Warning!</strong> Better check yourself, you're not looking too good.
						</div>      				
      				</div><!-- /showback -->
      				
      				<! -- BADGES -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Badges</h4>
						<span class="badge">5</span>
						<span class="badge bg-primary">10</span>
						<span class="badge bg-success">15</span>
						<span class="badge bg-info">20</span>
						<span class="badge bg-inverse">25</span>
						<span class="badge bg-warning">30</span>
						<span class="badge bg-important">35</span>
      				</div><!-- /showback -->
      				
      				<! -- LABELS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Labels</h4>
							<span class="label label-default">label</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
                    </div><!-- /showback -->
      			
      			</div><!-- /col-lg-6 -->
      			
      		</div><!--/ row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="general.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jjquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
