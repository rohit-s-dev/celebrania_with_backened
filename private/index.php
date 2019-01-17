<?php 
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

        <?php 

          if (isset($_GET['source'])) {

            $source = $_GET['source'];

          } else {
            $source = "";
          }
        
        switch ($source) {
          case "edit_post";
          include "inc/our_work_edit.php";
          break;

          default:
          include "our_work_view.php";
          break;
        }

        
        ?>

        <!-- /.container-fluid -->

<?php 
include("inc/footer.php");
?>