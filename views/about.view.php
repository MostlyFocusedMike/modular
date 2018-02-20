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
  <main role="main" id="about-page">
    <?php
    $about_page = new basic_page('about',
      '<span>Who is</span> <span>Anthony Mustacchio?</span>');
      $about_page->set_main_text_no_sub_head(array(
          'Anthony Mustacchio is a stand-up guy/comedian from New York City. 
          (Well, technically Staten Island, but “New York City comedian” sounds better) who performs all around New York City. 
          Mustacchio has been doing stand up for 5 years and doing it well for about 3 months.',
         'His unique style of standing on a stage and telling jokes into a microphone has been hailed as “okay ” and “not the worst, I guess.”
         He brings to the stage a comical look at both social norms and political chaos in ways that can be both dark and silly, 
         told with a biting wit from the unique and often under-represented perspective of a straight white guy. ',
          'He was the head comedy writer for “The Julianna Forlano Show” on WBAI Radio 99.5FM from 2014 - 2016,
          a contributor to Act.tv and PolitiPod, twice appeared on John Fugelsang’s “Tell Me Everything” on Sirius XM and is a regular on Laughing Liberally,i
          the longest running political stand-up comedy show in New York City. He’s also appeared in the Imperial Comedy Festival in Manhattan in 2013.',
          'Mustacchio is proudly blocked by Donald Trump on Twitter and is probably the only guy you’ll ever meet with a sombrero collection. '
      ));
      $about_page->show_page();
    ?>

  </main>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
