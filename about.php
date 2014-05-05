<!doctype html>
<html lang="en">
<?php
  $title = 'About';
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
    <section class="row p">
      <div class="row team-list-item">
        <!-- ALEX IMAGE -->
        <div class="column-4 center">
          <img src="img/clear.gif" class="alex-portrait" alt="Canisius College American Marketing Association">
        </div>
        <!-- ALEX CONTENT -->
        <div class="column-8 m-top-20-mobile">
          <h4>Hi, I'm <a href="http://www.cyberbytesinc.com/team">Alex</a></h4>
          <p>As a child, I spent most of my free time skateboarding and making video games with an RPG Maker. They were my two favorite hobbies and I dreamt of one day making a career out of one of them. As time went on, my passion for video game design grew, and I knew which career path I wanted to take.</p>

          <p>There was one little problem though: I hated having to come up with a storyline for games. They needed components like complex stories, unexpected plot twists, and remarkable endings. I realized it wasn't actually the video game's story I was so passionate about, rather, it was the design that went into it; the complexity and problem-solving that went on behind the scenes to make the idea of a game come to fruition. The end-user loves seeing the finished product; I love seeing the work that goes into it.</p>

          <p>Web design and app development provided with a better outlet to do what I wanted. There's no storyline; no plot twist; no remarkable ending to be made. There's just the design, detail, and problem-solving that goes into it. I quickly fell in love with the art of web design and app development, and they've become my passion. Now, instead of spending my time creating storylines, I spend it staying up-to-date on the ever-changing trends on the web. And not because I should, but simply because I enjoy doing it.</p>

          <p>I've heard that when you can't tell the difference between your work and hobby, you know you've made a good career choice. And as far as I'm concerned, I couldn't have made a better one.</p>

          <!-- <p>Growing up, I spent most of my free time skateboarding and making video games with an RPG Maker on the computer. I knew that one day I would either become a professional skateboarder or video game designer of some sort.</p>

          <p>There was one little problem though. I hated having to come up with a storyline for the games that I had made; a complex story, an unexpected plot twist, and a remarkable ending. I quickly realized was that I did not necessarily enjoy making the game. What I actually enjoyed was the amount of complexity and problem solving that went on behind the scenes to make something so utterly unique and simple on the front-end.</p>

          <p>Little did I know, website design and application development is much the same thing, minus the exhausting storyline. I quickly fell in love with the art and now spend my free time staying up-to-date on the ever-changing trends on the web. Not because I should, but simply because I enjoy doing it. When you can't tell the difference between your work and hobby is when you've made it and as far as I'm concerned, that is what I have done.</p> -->
          <!-- I enjoy working on front-end development, <a href="/blog/responsive-website-design">responsive design</a>, &amp; app development. I just graduated from Canisius College with a triple major in Management, Marketing, and Entrepreneurship. I am very passionate about BlackBerry and write <a href="/blog/">articles on this site</a> and <a href="http://opensourcebb.com/component/k2/itemlist/user/454-alexbass">OpenSourceBB.com</a> in my free time. -->
        </div>
      </div>
    </section>

    <section class="gray-bg p center">
      <div class="row m-bottom-20">
        <h3 class="center">College Education</h3>
        <p>coming soon</p>
      </div>
    </section>

    <section class="row large-width p gutter center">
      <div class="row m-bottom-40">
        <h3 class="center">I make beautifully <a href="http://www.cyberbytesinc.com/blog/responsive-website-design">responsive</a> websites using HTML5, CSS3, and JavaScript.</h3>
      </div>
      <div class="row">
        <div class="column-6 m-bottom-10-mobile">
          <a href="/portfolio" class="center green-btn xxsm">Check Out <span class="black">My Portfolio</span></a>
        </div>
        <div class="column-6">
          <a href="/contact" class="center gray-btn xxsm"><span class="green">Questions?</span> Contact Me</a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include_once("includes/footer.php"); ?>

    <!-- JAVASCRIPT -->
    <?php include_once("includes/js.php"); ?>
  </body>
</html>