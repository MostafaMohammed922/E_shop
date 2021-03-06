<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Babar786 | Admin</title>

    <!-- Bootstrap -->
    <link href="img/favicon.png" rel="icon">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animated.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Babar786</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-plus-square"></i> Add Post</a></li>
                <li><a href="#"><i class="fa fa-user-plus"></i> Add User</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container-fluid body-section">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                      <a href="#" class="list-group-item active">
                        <i class="fa fa-tachometer"></i> Dashboard
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">14</span>
                          <i class="fa fa-file-text"></i> All Posts
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">10</span>
                          <i class="fa fa-comment"></i> Comments  
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">11</span>
                          <i class="fa fa-folder-open"></i> Categories
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">9</span>
                          <i class="fa fa-users"></i> Users
                      </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1><i class="fa fa-tachometer"></i> Dashboard <small>Statistics Overview</small></h1><hr>
                    <ol class="breadcrumb">
                      <li class="active"><i class="fa fa-tachometer"></i> Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>

        <?php include "admin_incs/footer.php"?>