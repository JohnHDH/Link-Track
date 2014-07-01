<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Link Administration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HDH Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HDH Administration</a></li>
            <li><a href="create.php"><i class="fa fa-bar-chart-o"></i> Create New</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Create
			<br />
			<small>Create a new link</small></h1>
          </div>
        </div><!-- /.row -->
		<br />
		<br />
		<br />
		<center>
		<p>Enter the url as: http://harddrivehotel.com</p>
		<br />
		<form method="post" action="">
    <input type="text" name="link" value="<?= isset($_POST['link']) ? htmlspecialchars($_POST['something']) : '' ?>" />
    <input type="submit" name="submit" class="btn btn-default"/>
  </form>

<?php
if(isset($_POST['submit'])) {
  echo 'http://www.YOURDOMAIN.com/track.php?page=', htmlspecialchars($_POST['link']);
}
?>
</center>
      </div><!-- /#page-wrapper -->
<center>&copy; Hard Drive Hotel 2014</center>
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
