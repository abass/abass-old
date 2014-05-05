<!doctype html>
<html lang="en">
<?php
  $title = 'Contact';
  $author = 'Alex Bass';
?>
  <!-- INTERNET EXPLORER FIX -->
  <?php include_once("includes/ie.php"); ?>

  <head>
    <meta charset="utf-8">
    <!-- TITLE/DESC/KEYWORDS -->
    <title><?php echo $title?> | <?php echo $author?></title>
    <meta name="description" content="Have a question or need to contact me? This is the place to do it. Feel free to fill out the form, I'll respond as quickly as possibl!">
    <meta name="author" content="<?php echo $author?>">

    <!-- STYLES -->
    <?php include_once("includes/styles.php"); ?>
  </head>

  <body>
    <!-- HEADER -->
    <?php include_once("includes/header.php"); ?>

    <!-- CONTENT -->
    <!-- QUESTION SECTION -->
    <section class="row p-contact">
      <!-- QUESTION FORM -->
      <form id="question-form" action="resources/script/question-send" method="post">
        <div class="column-4 required">
          <label class="no-margin" for="question-name"><strong>Name</strong></label>
          <input type="text" name="name" value="" id="question-name" placeholder="First / Last Name" required>
        </div>
        <div class="column-4 required">
          <label for="question-email"><strong>Email Address</strong></label>
          <input type="email" name="email" value="" id="question-email" placeholder="email@example.com" required>
        </div>
        <div class="column-4">
          <label for="question-subject"><strong>Subject</strong></label>
          <input type="text" name="subject" value="" id="question-subject" placeholder="e.g. Question">
        </div>
        <div class="row column-8 first-column required">
          <label for="question-message"><strong>Your Message</strong></label>
          <textarea name="message" id="question-message" placeholder="Please include any additional information pertaining to your inquiry." required></textarea>
        </div>
        <div class="hidden">
          <label for="question-spam-check">Do not fill out this field:</label>
          <input name="spam-check" type="text" value="" id="question-spam-check" />
        </div>
        <div class="column-4 m-top-55 m-top-20-mobile">
          <input class="large strong green-btn" type="submit" value="Submit ›">
        </div>
        <div class="column-4 m-top-5 textcenter last">
          <input class="large strong gray-bg" type="reset" value="Reset">
        </div>
        <div class="row m-bottom-10"></div>
      </form>
    </section>

    <section class="gray-bg p center">
      <div class="row m-bottom-40">
        <h3 class="center">Interested in learning more about me?</h3>
      </div>
      <div class="row">
        <div class="column-6 m-bottom-10-mobile">
          <!-- <img src="/img/cb.png" alt="Responsive Design CyberBytes Inc."> -->
          <a href="http://www.cyberbytesinc.com/blog/" class="center green-btn">Read <span class="black">My Blog <i class="fa fa-external-link"></i></span></a>
        </div>
        <div class="column-6">
          <!-- <img src="/img/ama.png" alt="Responsive Design Canisius College American Marketing Association"> -->
          <a href="https://twitter.com/Flip4Bytes" class="center black-btn">Explore <span class="green">My Socials <i class="fa fa-external-link"></i></span></a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include_once("includes/footer.php"); ?>

    <!-- JAVASCRIPT -->
    <?php include_once("includes/js.php"); ?>
    <script src="resources/js/contact.js"></script>
    <script src="resources/js/jquery.maskedinput.js"></script>
  </body>
</html>