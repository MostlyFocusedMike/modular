<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mikecronin@sbcglobal.net";
    $email_subject = "New message from your site!";

    // if the inputs are wrong, this message prints 
    function died($error) {
        echo "Looks like there was an issue with your ";
        echo $error.".<br />";
        echo 'Please hit your browser\'s back button and fix these errors.';
        die();
    }
 
    // validation expected data exists in the php code itself, not a user error
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        die('We are sorry, there appears to be a problem with the form you submitted. Please hit your browser\'s back button to try again.');             
    }
 
    $first_name = $_POST['name'] ; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    
    // if there are errors, this message will get filled in as they go 
    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $email_issue = false; 
    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'email address';
    $email_issue = true; 
    }

    $name_issue = false; 
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$first_name)) {
      if ($email_issue) {
        $error_message .= ', '; // if the error message already starts with email, add this
      }
      $error_message .= 'first name';
      $name_issue = true;
    }
 
  if(strlen($comments) < 2) {
    if ($name_issue && $email_issue) {
      $error_message .= ', and '; //if both email and name are wrong
    }
    if ($name_issue || $email_issue) {
      $error_message .= ' and '; // if just one of them was wrong, we don't need the , 
    }
    $error_message .= 'comments';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
 
  // if any of the values in $bad are found in $string, they are replaced with ""
  // any of the bad values will mess up the email mechanic 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
    $email_message = 'Here\'s your message:\n';
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);  
}
//http://www.freecontactform.com/email_form.php is where you got the basis for this code
header("Location: /thank-you"); //this is how you redirect the user
die(); //this kills the current page and takes you to the header
?>
