<?php
  require_once("../../../../wp-load.php");
  include_once('../../../../wp-includes/class-wpdb.php');
  global $wpdb;
  $receiving_email_address = get_bloginfo('admin_email');
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
  $contact = new PHP_Email_Form();
  $contact->ajax = true;
  $contact->to = $receiving_email_address;
  if($_POST['name']!='' && $_POST['email']!='' && $_POST['subject']!='' && $_POST['message']!='')
  {
    $contact->from_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $contact->from_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $contact->subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $contact->message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $contact->send($wpdb);
  }
  else
  {
    echo 'Please fill up required field data marked as *';
  }
?>
