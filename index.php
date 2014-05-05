<!doctype html>
<html lang="en">
<?php
  $title = 'Home';
  $author = 'Alex Bass';
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "2/27/1992";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>
  <!-- INTERNET EXPLORER FIX -->
  <?php include_once("includes/ie.php"); ?>

  <head>
    <meta charset="utf-8">
    <!-- TITLE/DESC/KEYWORDS -->
    <title>Alex Bass | Front-End Developer &amp; UI/UX Designer</title>
    <meta name="description" content="Alex Bass, President of CyberBytes Inc. based out of Buffalo New York. Specialized in Website Design and BlackBerry 10 App Development.">
    <meta name="author" content="<?php echo $author?>">

    <!-- STYLES -->
    <?php include_once("includes/styles.php"); ?>
  </head>

  <body>
    <!-- HEADER -->
    <?php include_once("includes/header.php"); ?>

    <!-- CONTENT -->
    <section class="row p">
      <div class="column-3 push-9 m-bottom-30-mobile">
        <img src="/img/alex.jpg" alt="Alex Bass" class="alex center">
      </div>
      <div class="column-9 pull-3 m-top-10">
        <h3 class="md">Hello! I'm Alex Bass, a <a href="#" class="visible-desktop"><?php echo $age?></a><span class="popup">February 27th, 1992</span><span class="hidden-desktop"><?php echo $age?></span> year old Front-End Developer &amp; UI/UX Designer from Buffalo, NY and the President &amp; Co-Founder of <a href="http://www.CyberBytesInc.com">CyberBytes Inc.</a></h3>
        <h3 class="m-top-40 m-top-20-mobile"><b>I eat, sleep, and breathe Web Design.</b></h3>
      </div>
    </section>

    <section class="gray-bg p center">
      <div class="row">
        <div class="column-4">
          <i class="fa fa-cogs"></i>
          <h2>Optimized Solutions</h2>
          <p>It is very important that a website is properly optimized. A study by Google showed that an extra 500ms in loading time resulted in a 20% drop in traffic. It's no surprise that people will leave your site if it is not properly optimized. Especially with the large increase in mobile traffic over recent years. There are many optimizations that can be done but are often overlooked by many.</p>
        </div>
        <div class="column-4">
          <i class="fa fa fa-expand"></i>
          <h2><a href="http://www.cyberbytesinc.com/blog/responsive-website-design">Responsive Design</a></h2>
          <p>This is accomplished through the use of Media Queries: one of the greatest advancements to come out of CSS3. They allow you to have just one website that intelligently reposition content based on the device that you are currently using by utilizing screen size breakpoints. Gone are the days of having a separate mobile and desktop website. Google has also confirmed that responsive sites are favored in search results.</p>
        </div>
        <div class="column-4">
          <i class="fa fa-mobile"></i>
          <h2>Mobile-First</h2>
          <p>Mobile-First design focuses on how a site functions and looks on mobile platforms with the same importance of how it will on a desktop. Rather than cramming everything together to fit into a tablet or mobile view, you start with creating the site in it's mobile form and then make the content more spacious to improve readability upon sizing it up for desktop use.</p>
        </div>
      </div>
    </section>

    <section class="row large-width p gutter center">
      <div class="row m-bottom-40">
        <h3 class="center">I make beautifully <a href="http://www.cyberbytesinc.com/blog/responsive-website-design">responsive</a> websites using HTML5, CSS3, and JavaScript.</h3>
      </div>
      <div class="row">
        <div class="column-6 m-bottom-10-mobile">
          <!-- <img src="/img/cb.png" alt="Responsive Design CyberBytes Inc."> -->
          <a href="/about" class="center green-btn xxsm">Learn More <span class="black">About Me</span></a>
        </div>
        <div class="column-6">
          <!-- <img src="/img/ama.png" alt="Responsive Design Canisius College American Marketing Association"> -->
          <a href="/portfolio" class="center gray-btn xxsm"><span class="green">Check Out</span> My Portfolio</a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include_once("includes/footer.php"); ?>

    <!-- JAVASCRIPT -->
    <?php include_once("includes/js.php"); ?>
  </body>
</html>