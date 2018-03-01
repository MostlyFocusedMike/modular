<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Mike Cronin">
  <meta name="description" content="Anthony Mustacchio is a stand up comic in NYC, and he's pretty funny">
  <title>Anthony Mustacchio Comedy</title>
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>
<body>
  <?php
    include 'views/navbar.view.php';
  ?>
  <main role="main" id="contact-page">
    <div id="contact-bg" class="std-page-bg">
       <div id="contact-holder" class="std-holder">
         <div class="heading-holder">
           <h1>Contact</h1>      
         </div>
      <div id="page-content">
        
      <form name="contactform" method="post" action="app/src/contact.php">
        <div>
          <label for="name">Name *</label>
          <input  type="text" id="name-inp" name="name" maxlength="25" size="30">
          <p id="name-error"></p>
          <label for="email">Email Address *</label>
          <input  type="text"  id="email-inp" name="email" maxlength="80" size="30">
          <p id="email-error"></p>
        </div>
        <div>
          <label for="comments">Comments *</label>
          <textarea  name="comments" id="comments-inp" maxlength="1000" cols="25" rows="6"></textarea>
          <p id="comments-error"></p>
        </div>
        <input type="submit" value="Send" id="submit-button">   
      </form>

<p>a * indicates a required field.</p>
<h3>You can also follow Anthony on <a href="https://twitter.com/anthonymustache" target="_blank">Twitter</a> or <a href="https://www.facebook.com/AnthonyMustacchioComedyWhatElseWouldICallIt/" target="_blank">Facebook</a>.</h3>
      </div>


    </div>
  </main>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
