<?php
   $receiving_email_address = '120037342@upq.edu.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['nombre'];
  $contact->from_email = $_POST['correo electronico'];
  $contact->subject = $_POST['asunto'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['nombre'], 'From');
  $contact->add_message( $_POST['correo electronico'], 'Email');
  $contact->add_message( $_POST['mensaje'], 'Message', 10);

  echo $contact->send();
?>
