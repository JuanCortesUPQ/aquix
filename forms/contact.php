<?php
   $receiving_email_address = '120037342@upq.edu.com';

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['nombre'];
  $contact->from_email = $_POST['correo electronico'];
  $contact->subject = $_POST['asunto'];

  $contact->add_message( $_POST['nombre'], 'From');
  $contact->add_message( $_POST['correo electronico'], 'Email');
  $contact->add_message( $_POST['mensaje'], 'Message', 10);

  echo $contact->send();
?>
