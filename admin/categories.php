<?php include "admin_incs/header.php" ?>

<body>
  <div id="wrapper">
    <?php include "admin_incs/navbar.php" ?>
    <div class="container-fluid body-section">
      <div class="row">
        <?php include "admin_incs/sidebar.php" ?>
        <div class="col-md-9">
          <h1><i class="fa fa-folder-open"></i> Categories <small>Different Categories</small></h1>
          <hr>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-tachometer"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-folder-open"></i> Categories</li>
          </ol>
          <div class="row">
            <div class="col-md-6">
              <form action="categories.php" method="post">
                <div class="form-group">
                  <label for="category">Category Name :</label>
                  <input type="text" placeholder="Category Name" class="form-control" name="cat_title" required>
                </div>
                <input type="submit" value="Add Category" name="add_category" class="btn btn-primary">
              </form>
              <br>
              <?php if (isset($_GET['edit'])) {
                $edit_id = $_GET['edit'];
                include 'edit_category.php';
              } ?>

              <?php
              if (isset($_POST["add_category"])) {
                $cat_title = $_POST["cat_title"];
                $sql = "INSERT INTO `categories`(`cat_title`) VALUES ('$cat_title')";
                $query = mysqli_query($conn, $sql);
                header("Location:categories.php");
              }
              ?>
            </div>
            <div class="col-md-6">
              <center><h3><u>Categories List</u></h3></center><br>
              <table class="table table-hover table-bordered table-striped">
                <thead class="text-center">
                  <tr>

                    <th>Category_Titles</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM `categories`";
                  $query = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($query)) :
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                  ?>
                    <tr>
                      <td><?= ucwords($cat_title) ?></td>
                      <td><a href="categories.php?edit=<?= $cat_id ?>" class="text-info"><i class="fa fa-edit"></i></a></td>
                      <td><a href="categories.php?delete=<?= $cat_id ?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $deleteSql = "DELETE FROM `categories` WHERE `cat_id` = '$delete_id'";
      $deleteCategory = mysqli_query($conn, $deleteSql);
      header("Location:categories.php");
    }

    ?>
    <?php include "admin_incs/footer.php"; ?>