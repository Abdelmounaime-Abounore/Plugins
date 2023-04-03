<?php
/**
 *  Plugin Name: contact us Plugin
**/

function contact_plugin(){
$contact = '';
$contact .= '<h2> Contact us  </h2>';
$contact .= '<form method="post" action="http://e-comm.test/store/">';
$contact .='<label for="name">Name :</label> </br>';
$contact .= '<input type="text" name="name" id="name" class="form-control w-100" placeholder="Enter Your Name"/> </br>' ;
$contact .='<label for="email">Email :</label> </br>';
$contact .= '<input type="text" name="email" id="email" class="form-control w-100" placeholder="Enter Your Email"/> </br>' ;
$contact .='<label for="Comments">Questions or Comments :</label> </br>';
$contact .='<textarea type="text" name="Comments" id="Comments" class="form-control w-100" placeholder="Enter Your Comments"/> </textarea> </br>' ;
$contact .= '<input type="submit" name="Submit_ContactUs" class="btn btn-md btn-primary" value="SEND YOUR INFORMATION" />';
$contact .= '</form>';
return $contact;
}
add_shortcode('contact', 'contact_plugin');

function GetData(){
    if(isset($_POST['Submit_ContactUs'])){
        $name = sanitize_text_field($_POST['name']);
        $Email = sanitize_text_field($_POST['email']);
        $comments = sanitize_text_field($_POST['Comments']);
        $to ='abdelmounaim.abounore@gmail.com';
        $subject ='test form submission';
        $message =''.$name.' _ '.$Email.' _ '.$comments;
        wp_mail($to,$subject,$message);
    }
}
add_action('wp_head','GetData');
function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'ce37c1bd34e722';
  $phpmailer->Password = '83e0da452b2dbf';
}

add_action('phpmailer_init', 'mailtrap');

?>