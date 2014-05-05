<!doctype html>
<html lang="en">
<?php
  $title = 'Home';
  $author = 'Alex Bass';
?>
  <!-- INTERNET EXPLORER FIX -->
  <?php include_once("includes/ie.php"); ?>

  <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="my-oPgUW1VYk56TOrFfOcPy2ftiQ8v7xLOTrXcnW-04" />
    <!-- TITLE/DESC/KEYWORDS -->
    <title>404 | Alex Bass</title>
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
      <div class="m-top-10">
        <h2><b>404 | Page Not Found</b></h2>
        <h2 class="m-top-40 m-top-20-mobile">Please use the menu above to find the page you are looking for.</h2>
      </div>
    </section>

    <section class="gray-bg">
      <div class="row large-width p gutter center">
        <div class="row m-bottom-20">
          <h3 class="center">- Or maybe you were looking for one of these sites? -</h3>
        </div>
        <div class="row">
          <div class="column-6 m-none-mobile m-bottom-30-mobile">
            <img src="/img/cb.png" alt="Responsive Design CyberBytes Inc.">
            <a href="http://www.cyberbytesinc.com" class="center red-btn xxxsm">CyberBytes Inc. <span class="black">Buffalo NY Web Design</span></a>
          </div>
          <div class="column-6">
            <img src="/img/ama.png" alt="Responsive Design Canisius College American Marketing Association">
            <a href="http://www.cyberbytesinc.com/portfolio#ama" class="center blue-btn xxxsm">Canisius College <span class="black">American Marketing Association</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include_once("includes/footer.php"); ?>

    <!-- JAVASCRIPT -->
    <?php include_once("includes/js.php"); ?>
  </body>
</html>