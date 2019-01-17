<?php $title = "Celebrania:: Who are we"; 
include "inc/header.inc.php"; ?>
<?php include "inc/m-nav.inc.php"; ?>

<!-- <section class="our_works_d">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="our_works_d_title">Our Works</h3>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section> -->

<?php 
$sql = "SELECT * FROM our_work ORDER BY id DESC";
$sql_query = mysqli_query($db, $sql);
?>

<section class="our_works_p">
    <div class="container">
        <div class="row no-gutters gallery">
            <?php 
            while($rows = mysqli_fetch_assoc($sql_query)) {
                $id = $rows['id'];
                $title = $rows['title'];
                $des_para = $rows['des_para'];
                $img = $rows['img'];
                $upload_date = $rows['upload_date'];
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 text-center mbb10">
                <div class="img-box">
                    <img src="images/our_works/<?php echo $img; ?>" alt="">
                    <div class="content_box">
                        <h5><?php echo $title; ?></h5>
                        <p><?php echo $des_para; ?></p>
                    </div>
                </div>
            </div>

            <?php 
            }
            
            ?>
        </div>
    </div>
</section>

<?php include "inc/main.footer.php"; ?>
<?php include "inc/footer.inc.php"; ?>