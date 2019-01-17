<?php $title = "Celebrania:: Contact Us"; 
include "inc/header.inc.php"; ?>
<?php include "inc/m-nav.inc.php"; ?>

<section class="contact_celebrania">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form  method="post" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control c_c_input" placeholder="john Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email" class="form-control c_c_input" placeholder="johndoe@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5"  class="form-control c_c_input" placeholder="....."required ></textarea>
                    </div>
                    <button type="submit" name="submit" class="contact_btn">Submit</button>
                </form>
<?php 


$sendto = "info@celebrania.com";
$subject = "New Email Has Arrived From Celebrania Website";

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
$header = "From: ". $_POST['email']. "\r\n";
$header .= "Reply To: ".$_POST['email']. "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();
        $message = "Name: " .$_POST['name']. "\r\n";
        $message = "Email: " .$_POST['email']. "\r\n";
        $message.= "Message: " .wordwrap($_POST['message'], 70 . "\r\n");

        mail($sendto, $subject, $message, $header); 
        
        echo "
        
                <div class='alert alert-success alert-dismissible' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Thank you for contacting us. We will be in touch with you very soon</strong>
                </div>
        ";

    }

?>
                

            </div>

            <div class="col-lg-5">
                <div class="add_info">
                    <span class="add_title">Address</span>
                    <p>204 B, Green Heritage, Nehru Nagar, Patliputra, Patna-01</p>
                </div>
                <div class="add_info">
                    <span class="add_title">Contact</span>
                    <p>+91 7557777877</p>
                </div>
                <div class="add_info">
                    <span class="add_title">Email</span>
                    <p>info@celebrania.com</p>
                </div>
                <!-- <div class="add_info">
                    <span class="add_title">Website</span>
                    <p>204 B, Green Heritage, Nehru Nagar, Patliputra, Patna-01</p>
                </div> -->
            </div>
        </div>
    </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14389.484922552714!2d85.1239224!3d25.6258019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea04098e256c650f!2sCelebrania!5e0!3m2!1sen!2sin!4v1543688907453" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="social_box_f">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>

<?php include "inc/main.footer.php"; ?>
<?php include "inc/footer.inc.php"; ?>