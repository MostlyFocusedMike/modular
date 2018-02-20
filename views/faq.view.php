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
  <main role="main" id="faq-page">
    <?php
      $about_page = new basic_page('faq','Frequently Asked Questions');
      $about_page->set_main_text_sub_head(array(
        //['sub heading','paragraph']
        ['Is Mustacchio really your last name?', 'Yes'],
        ['Really?','Yes, really.'],
        ['...Mustacchio?','YES. NEXT QUESTION, PLEASE.'],
        ['What made you want to do stand up comedy?',
        'A love of both having the spotlight on me and also being afraid of having the spotlight on me.  I love to make people laugh and people occasionally chuckle at some nonsense I spout, so I figured I’m practically a pro already.'],
        ['Where do you normally perform?',
        'I\'ve been seen on stage at the Looney Bin in Staten Island and various places around NYC including Broadway Comedy Club, New York Comedy Club, Jimmy\'s 43, and a few others.'],
        ['When’s your next show?',
        'It depends when you read this FAQ. Whenever I have an upcoming spot or show you’ll see me bragging about it on my Facebook or Twitter, so your best bet is to check those places.'],
        ['Do you do any other comedy besides stand up?',
        'If you follow me on social media I’m usually doing nothing but writing jokes and short stories. I also play piano in a 2-person comedy band called “Bright Colors, Shiny Objects.” We’re still in development, but more info is to come.'],
        ['And I\'m also led to understand you’re writing a book?',
        'Yes. More info to come on that when available.'],
        ['How much for an autograph or picture?',
        'Autographs are $25, pictures are $25, both together is $40.'],
        ['Will you go on a date with me?','Sorry folks, I\'m taken.'],
        ['...Really? it’s “Mustacchio?" you\'re fucking with us, right?',
        'I\'m just ignoring this question now. '],
        ['Who are your favorite comedians?',
        'If we’re talking just stand up, my favorites are Jeff Ross, Anthony Jeselnik, Jim Jeffries, Mitch Hedberg, George Carlin, Norm Macdonald, Richard Jeni, and Joan Rivers. Beyond stand up, my biggest comedy hero is Groucho Marx, and I love writers like David Thorne and David Sedaris. '],
        ['no, really. what\'s your last name?',
        ''],
        ['C\'mon, seriously.',
        ''],
        ['Anthony?',
        ''],
        ['Hello?',
        ''],
      ));
      $about_page->show_page();
    ?>
  </main>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
