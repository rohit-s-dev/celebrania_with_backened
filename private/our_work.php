<?php 
  require_once("inc/initialize.php");
  include("inc/header.php");
  include("inc/top_bar.php");
  include("inc/sidebar.php");
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
        </div>

          <div class="col-md-8 m-auto our_Work p-4">
          <?php
           
           if(isset($_POST['add_our_work'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];

            $max = 100;
            $min = 3;

            if (blank($title) || blank($description) || blank($image)) {

                echo "<p class='text-white'>Fields cannot be empty</p>";

            } elseif (t_val($title, $max, $min)) {

                echo "Characters must be less than 100 and must be greater than 3</p>";
            
            } else {

                $sql = "INSERT INTO our_work (img, title, des_para, upload_date) 
                VALUES('$image', '$title', '$description', now())";
                
                $sql_query = mysqli_query($db, $sql);

                if($sql_query) {
                    m_f($image_tmp, $image);
                    echo "<p class='text-white'>Submitted !</p>";

                } else {
                    echo "<p class='text-white'>Something Went Wrong !</p>";
                }

            }
        }
           
          ?>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title" class="text-white">Our Work Title : </label>
                <input type="text" name="title"  id="title" class="form-control">
              </div>
              <div class="form-group">
                <label for="description" class="text-white">Our Work Description : </label>
                <input type="text" name="description"  id="description" class="form-control">
              </div>
              <div class="form-group">
                <label for="description" class="text-white">Upload Image : </label>
                <input type="file" name="image"  id="file" class="form-control">
              </div>

              <input type="submit" value="Upload Image" class="btn btn-success" name="add_our_work">
            </form>
          </div>

    <!-- /.container-fluid -->

<?php 
include("inc/footer.php");
?>