<?php
  $menuLink = ($_SERVER['PHP_SELF']);
  $menuLinkid = basename($_SERVER['PHP_SELF'], ".php");

  $pageURL="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $searchbar = 'hidden';
  $searchicon = 'fa fa-bars';

  // PAGES
  if (substr($menuLink,1,5) == "blog/"){
    $menuLinkid = 'blog';
  } else if ($menuLinkid == "index"){
    $menuLinkid = 'home';
  }
  if ($menuLinkid == "blog"){
    $blog = 'active';
  } else if ($menuLinkid == "portfolio"){
    $portfolio = 'active';
  } else if ($menuLinkid == "about"){
    $about = 'active';
  } else if ($menuLinkid == "contact"){
    $contact = 'active';
  } else if ($menuLinkid == "home"){
    $home = 'active';
  } else if ($menuLinkid == "search" || $menuLinkid == "404"){
    $searchicon = 'fa fa-sea red'; $searchbar = ''; $searchbarfocus = 'autofocus';
  }

  // AUTHORS
  if ($author == "Alex Bass"){
      $team = '/team#alex';
      $twitter = 'https://www.twitter.com/Flip4Bytes';
      $facebook = 'https://www.facebook.com/Flip4Life';
      $googleplus = 'https://plus.google.com/114533524603904902096/';
  } else {
      $author = 'CyberBytes Inc.';
      $team = '/team';
      $twitter = 'https://www.twitter.com/CyberBytesInc';
      $facebook = 'https://www.facebook.com/CyberBytesInc';
      $googleplus = 'https://plus.google.com/+CyberBytesInc';
  }
?>
<header id="header">
      <div class="row no-p-mobile">
        <div class="logo">
          <a href="/"><img src="/img/clear.gif" alt="Alex Bass"><h1>Alex Bass</h1></a>
        </div>
        <div class="menu hidden-desktop">
          <a href="#"><h1><?php echo $menuLinkid?></h1><i id="menu-icon" class="fa fa-bars"></i></a>
        </div>
        <nav id="nav" class="visible-desktop">
          <ul class="row no-p-mobile">
            <li class="<?php echo $home ?>"><a href="/">Home</a></li>
            <li class="<?php echo $about ?>"><a href="/about">About</a></li>
            <li class="<?php echo $portfolio ?>"><a href="/portfolio">Portfolio</a></li>
            <li class="<?php echo $contact ?>"><a href="/contact">Contact</a></li>
            <li class="<?php echo $blog ?>"><a href="/blog" target="_blank" class="external">Blog<i class="fa fa-external-link"></i></a></li>
            <li class="hidden-desktop"><a href="https://twitter.com/Flip4Bytes" class="external">Twitter<i class="fa fa-external-link"></i></a></li>
            <li class="hidden-desktop"><a href="https://www.linkedin.com/in/flip4bytes" class="external">LinkedIn<i class="fa fa-external-link"></i></a></li>
            <li class="hidden-desktop"><a href="https://plus.google.com/114533524603904902096/" class="external">Google+<i class="fa fa-external-link"></i></a></li>
          </ul>
        </nav>
      </div>
    </header>
