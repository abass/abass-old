<!doctype html>
<html lang="en">
<?php
  $title = 'Portfolio';
  $author = 'Alex Bass';
?>
  <!-- INTERNET EXPLORER FIX -->
  <?php include_once("includes/ie.php"); ?>

  <head>
    <meta charset="utf-8">
    <!-- TITLE/DESC/KEYWORDS -->
    <title><?php echo $title?> | Alex Bass</title>
    <meta name="description" content="">
    <meta name="author" content="<?php echo $author?>">

    <!-- STYLES -->
    <?php include_once("includes/styles.php"); ?>
  </head>

  <body>
    <!-- HEADER -->
    <?php include_once("includes/header.php"); ?>

    <!-- CONTENT -->
    <section id="portfolio" class="row full-width">
      <!-- DESIGNER -->
      <a href="#designer">
        <h2 class="row designer column-6 p center white bold">Website Designer</h2>
      </a>
      <!-- DEVELOPER -->
      <a href="#developer">
        <h2 class="row developer column-6 p center black bold">Application Developer</h2>
      </a>
    </section>

    <section id="designer" class="dark-texture-bg">
      <div class="transparent-bg">
        <div class="row large-width gutter p">
          <div class="column-6 center">
            <img src="/img/portfolio/cb.png" alt="CyberBytes Inc.">
          </div>
          <div class="column-6 portfolio-item-text">
            <h2>CyberBytes Inc.</h2>
            <p>This is the site that I made for my company. I focused a lot of importance on making it as mobile-friendly as possible. I tried to show the power of our services through the functionality of the website so it sells itself.</p>
            <a href="http://www.cyberbytesinc.com" class="center green-btn xxxsm">CyberBytes Inc. <span class="black">Buffalo NY Website Design</span></a>
          </div>
        </div>
      </div>
      <div class="dark-transparent-bg">
        <div class="row large-width gutter p">
          <div class="column-6 push-6 center">
            <img src="/img/portfolio/ama.png" alt="CyberBytes Inc.">
          </div>
          <div class="column-6 pull-6 portfolio-item-text">
            <h2>Canisius American Marketing Association</h2>
            <p>I focused on creating a fairly flat user-interface to allow for content and images to be the main focal point on each page. They needed this site to help inform students of the organization while giving them useful information to show students why it would be beneficial for them to join.</p>
            <a href="http://www.canisiusama.com" rel="nofollow" class="center green-btn xxxsm">Canisius College <span class="black">American Marketing Association</span></a>
          </div>
        </div>
      </div>
      <div class="black-bg">
        <h2 class="row large-width gutter p center"><a href="http://www.cyberbytesinc.com/portfolio/" class="external">More Portfolio Items <i class="fa fa-external-link"></i></a></h2>
      </div>
    </section>

    <section id="developer">
      <div class="green-bg">
        <div class="row large-width gutter p">
          <!-- WEB DESIGN CHEAT SHEET IMAGE -->
          <div class="column-5 push-7 mobile-center m-bottom-20-mobile">
            <img src="img/portfolio/wdcs.png" class="column-6 hidden-mobile" alt="Web Design Cheat Sheet for BlackBerry 10">
            <img src="img/portfolio/wdcs2.png" class="column-6" alt="Web Design Cheat Sheet for BlackBerry 10">
          </div>
          <!-- WEB DESIGN CHEAT SHEET CONTENT -->
          <div class="column-7 pull-5 portfolio-item-text">
            <h2><a href="http://www.cyberbytesinc.com/portfolio/web-design-cheat-sheet" class="white">Web Design Cheat Sheet</a> is a Built for BlackBerry&#8482; Certified Application developed for BlackBerry&reg; 10.</h2>
            <p>The App is a reference &amp; editing tool for HTML5, CSS3, and JavaScript. It was made using the Native Cascades framework with the <b>FREEMIUM</b> payment model. I chose this model to allow for individuals to download the App at no cost giving a very low barrier of entry. This would allow us to become recognized from the various 5 star reviews, while also allowing for the option to unlock additional paid content if satisfied with the product. With <b>hundreds</b> of five star reviews and tens of thousands of downloads, I have gotten a great response from this niche application.</p>
            <div>
              <a href="http://www.cyberbytesinc.com/portfolio/web-design-cheat-sheet" class="column-3-5 tablet-same gray-btn center m-bottom-10-mobile more-arrow">More Information</a>
              <a href="http://appworld.blackberry.com/webstore/content/21797691/" class="column-3-5 tablet-same black-btn center">Download App</a>
              <!-- <a href="http://crackberry.com/app/web-design-cheat-sheet" class="column-3-5 tablet-same black-btn center">Editors' Choice Award</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="dark-green-bg">
        <div class="row large-width gutter p">
        <!-- BEFLOW IMAGE -->
          <div class="column-5 mobile-center m-bottom-20-mobile">
            <img src="img/portfolio/beflow.png" class="column-6" alt="BerryFlow for BlackBerry 10">
            <img src="img/portfolio/beflow2.png" class="column-6 hidden-mobile" alt="BerryFlow for BlackBerry 10">
          </div>
          <!-- BEFLOW CONTENT -->
          <div class="column-7 portfolio-item-text">
            <h2><a href="http://appworld.blackberry.com/webstore/content/32072888/" class="white">BeFlow</a> is a Built for BlackBerry&#8482; Certified Application developed  BlackBerry&reg; 10.</h2>
            <p>This is the official app for <a href="http://berryflow.com" class="white" rel="nofollow">BerryFlow.com</a>. It includes News, Forums, WordPress Connect, App/Reviews, and more. It was made using the Native Cascades framework as the main shell, with WebViews to pull in the content for each section. This is a <b>FREE</b> application. The client wanted an App that would make his website more easily accessible on mobile for their target demographic (BlackBerry 10 Users).</p>
            <div>
              <a href="http://appworld.blackberry.com/webstore/content/32072888/" rel="nofollow" class="column-3-5 tablet-same gray-btn center m-bottom-10-mobile more-arrow">Download App</a>
              <a href="http://berryflow.com/beflowappoverview/" rel="nofollow" class="column-3-5 tablet-same black-btn center">Hands-On Demo</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="row large-width p gutter center">
      <div class="row m-bottom-40">
        <h3 class="center">I make beautifully <a href="http://www.cyberbytesinc.com/blog/responsive-website-design">responsive</a> websites using HTML5, CSS3, and JavaScript.</h3>
      </div>
      <div class="row">
        <div class="column-6 m-bottom-10-mobile">
          <a href="/contact" class="center green-btn xxsm">Questions? <span class="black">Contact Me</span></a>
        </div>
        <div class="column-6">
          <a href="/about" class="center gray-btn xxsm"><span class="green">Learn More</span> About Me</a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include_once("includes/footer.php"); ?>

    <!-- JAVASCRIPT -->
    <?php include_once("includes/js.php"); ?>
        <!-- function autoResizeDiv()
        {
            document.getElementById('main').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv(); -->
  </body>
</html>