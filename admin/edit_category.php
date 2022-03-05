<form action="categories.php" method="post">
  <div class="form-group">
    <label for="category">Update Category Title :</label>
    <?php
    $sql = "SELECT * FROM `categories` WHERE `cat_id`='$edit_id'";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) :
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
    ?>
      <input type="text" class="form-control" name="category_title" placeholder="Update Category Title" 
      value="<?=$cat_title ?>">

    <?php
    endwhile;
    ?>
  </div>
  <?php
  if (isset($_POST['update_category'])) {
    // $edit_id = $_GET['update_category'];
    $NewCatTitle = $_POST['category_title'];
    $updatetsql = "UPDATE `categories` SET `cat_title` = '$NewCatTitle' WHERE `cat_id` = '$cat_id'";
    $updatecategories = mysqli_query($conn, $updatetsql);
    header('location:categories.php');
  }
  ?>
  <input type="submit" value="Update Category" name="update_category" class="btn btn-primary">
</form>