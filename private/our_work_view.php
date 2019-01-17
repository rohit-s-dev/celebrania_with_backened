
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              ALL IMAGES</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>IMAGE</th>
                      <th>TITLE</th>
                      <th>DESCRIPTION</th>
                      <th>DATE</th>
                      <th>BUTTONS</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>IMAGE</th>
                      <th>TITLE</th>
                      <th>DESCRIPTION</th>
                      <th>DATE</th>
                      <th>BUTTONS</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php 
                      $sql = "SELECT * FROM our_work order by id DESC";
                      $sql_query = mysqli_query($db, $sql);
                      while($rows = mysqli_fetch_assoc($sql_query)) {
                        $id = $rows['id'];
                        $title = $rows['title'];
                        $des_para = $rows['des_para'];
                        $img = $rows['img'];
                        $upload_date = $rows['upload_date'];
                      ?>
                      <tr>
                      <td> <?php echo $id ?></td>
                      <td> <img src="../images/our_works/<?php echo $img ?>" alt="" class='img-fluid' width='80'></td>
                      <td> <?php echo $title ?></td>
                      <td> <?php echo $des_para ?></td>
                      <td><?php echo $upload_date ?> </td>
                      <td><a href="index.php?delete=<?php echo $id; ?>" class='btn btn-primary mr-2'>DELETE</a><a href="index.php?source=edit_post&p_id=<?php echo $id; ?>" class='btn btn-primary mr-2'>EDIT</a> </td>
                      </tr>
                  <?php
                    } 
                  ?>
                    
                  </tbody>
                </table>
              </div>
            </div>

            <?php 
            if(isset($_GET['delete'])) {
              $sql = "DELETE FROM our_work WHERE id = $id";
              $sql_query = mysqli_query($db, $sql);
              header("LOCATION: index.php");
            }
            
            ?>
          </div>
