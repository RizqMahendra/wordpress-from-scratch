<?php

/*

Plugin Name: Mahe Contact

Description: Contact Form

Version: 1.0

Author: Mahendra

License: GPLv2 or later

*/

function mahe_contact()
{
    $content='';
    $content .='<div class="container">';
    $content .='<form method="post" action="http://localhost:10046/thank-you/" style="margin: 0 auto;max-width: 1000px;">';

    $content .='<div class="form-group"style="margin-bottom: 22px;">';
    $content .='<label for="your_name">Your Name</label>';
    $content .='<input type="text" name="your_name" class="form-control" placeholder="Enter Your Name">';
    $content .='</div>';

    $content .='<div class="form-group"style="margin-bottom: 22px;">';
    $content .='<label for="your_name">Your Email</label>';
    $content .='<input type="email" name="your_email" class="form-control" placeholder="Enter Your Email">';
    $content .='</div>';

    $content .='<div class="form-group"style="margin-bottom: 22px;">';
    $content .='<label for="your_phone">Your Phone</label>';
    $content .='<input type="number" name="your_phone" class="form-control" placeholder="Enter Your Phone Number">';
    $content .='</div>';
    
    $content .='<div class="form-group"style="margin-bottom: 22px;">';
    $content .='<label for="your_name">Your Message</label>';
    $content .='<textarea name="your_message" class="form-control" placeholder="enter your message"></textarea>';
    $content .='</div>';

    $content .='<br /><input type="submit" class="btn btn-primary" name="mahe_contact_submit" value="Submit"></button>';

    $content .='</form>';

    $content .='</div>';

    return $content;
}

add_shortcode('maheform', 'mahe_contact');

function mahe_contact_processing()
{
    if (isset($_POST['mahe_contact_submit'])) {
        $name = sanitize_text_field($_POST['your_name']);
        $email = sanitize_text_field($_POST['your_email']);
        $number = sanitize_number_field($_POST['your_phone']);
        $message = sanitize_textarea_field($_POST['your_message']);

        $to = 'fathiyarizq.mahendra@gmail.com';
        $subject ="Enquiry Program";
        $body = ''.$name.'-'.$email.'-'.$number.'-'.$message;
        wp_mail($to, $subject, $body);
    }
}

add_action('wp-head', 'mahe_contact_processing');
