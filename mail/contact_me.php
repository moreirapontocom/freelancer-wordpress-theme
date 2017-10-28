<?php

if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)
) {
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$email_body  = 'You have received a new message from your website contact form.<br><br>';
$email_body .= 'Name: '.$name.'<br>';
$email_body .= 'Email: '.$email_address.'<br>';
$email_body .= 'Phone: '.$phone.'<br>';
$email_body .= 'Message: '.$message;

$wp_load_dir = realpath(__DIR__ . '/..');
$wp_load_dir = str_replace('wp-content/themes/lucasmoreira','',$wp_load_dir);
$wp_load_dir = $wp_load_dir.'wp-load.php';

require $wp_load_dir;

$to_email_option = get_option('admin_email');

// Create the email and send the message

$to = $to_email_option;
$email_subject = "[Lucas] Contact from:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $to_email_option\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
$response = mail($to,$email_subject,$email_body,$headers);

if ( !$response )
    return false;

return true;
