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
  <main role="main" id="reviews-page">
<?php 
  $reviews = array(
      ['Smart, relatable, and, oh yeah, funny, Anthony Mustacchio is a comic to watch.  And, he didn’t pay me anything for this testimonial... although a Starbucks gift card would have been nice.', 'Paul Lander, Writer/Producer for various projects on NBC, ABC, MTV, <span>VH1, Disney Channel</span>'],
      ['You look like you jerk off in the park','Jeff Ross'],
      ['He’s alright.','Jackie Peluso, not a comedian'],
      ['He’s funny, but not like, haha funny. I mean, he’s definitely amusing, but not enough to make you ever laugh. I don’t know why he thinks he can do stand up. What is he doing with that plug?','Anthony’s recently deceased grandmother, RIP'],
      ['Anthony Mustacchio is not funny in the slightest.','Mitch Stiller, a former friend'],
      ['In hindsight, I should\'ve checked to see if he had any positive reviews before I made him a "Reviews Page."','Mike Cronin, the web designer'],
      ['Hey there, new comedian! Wanna be on a show for me?','Sheba Mason'],
      ['You are blocked from following @realDonaldTrump and viewing @realDonaldTrump’s tweets.','Donald Trump']
    );
    $reviews_page = new basic_page('reviews', 'Reviews');
    $reviews_page->set_reviews($reviews);
    $reviews_page->show_page(); 

?>
  </main>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
