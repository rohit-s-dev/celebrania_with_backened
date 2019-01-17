
<div class="col-md-8 m-auto our_Work p-4">
            
            <?php 
            if(isset($_GET['p_id'])) {

                $p_id = escape($db, $_GET['p_id']);

                $sql = "SELECT * FROM our_work WHERE id =  '$p_id' ";
                $sql_query = mysqli_query($db, $sql);

                while($rows = mysqli_fetch_assoc($sql_query)) {
                    $title = $rows['title'];
                    $img = $rows['img'];
                    $des_para = $rows['des_para'];
                }
            }
            
            ?>

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

                $u_sql = "UPDATE our_work SET ";
                $u_sql .= "img = '$image' , ";
                $u_sql .= "title = '$title' , ";
                $u_sql .= "des_para = '$description' , ";
                $u_sql .= "upload_date = now() ";
                $u_sql .= "WHERE id = $p_id ";
                
                $up_sql_query = mysqli_query($db, $u_sql);

                if($up_sql_query) {
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
                <input type="text" name="title"  id="title" class="form-control" value="<?php echo $title; ?>">
              </div>
              <div class="form-group">
                <label for="description" class="text-white">Our Work Description : </label>
                <input type="text" name="description"  id="description" class="form-control" value="<?php echo $des_para; ?>">
              </div>
              <div class="form-group">
                <label for="description" class="text-white">Upload Image : </label>
                <img src="../images/our_works/<?php echo $img; ?>" class='img-fluid my-3' width='80' alt="">
                <input type="file" name="image"  id="file" class="form-control" >
              </div>

              <input type="submit" value="Upload Image" class="btn btn-success" name="add_our_work">
            </form>
          </div>