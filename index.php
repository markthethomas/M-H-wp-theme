<?php get_header(); ?>
<body>
<div class="row landing-contain hidden-xs">
  <div class="col-md-4"></div>
    <a href=""><div id="markcircle" class="col-md-1 circle mark">Mark</div></a>
  <div class="col-md-2 ampersand hidden-xs">&</div>
    <a href=""><div id="haleycircle" class="col-md-1 circle haley">Haley</div></a>
  <div class="col-md-4"></div>
</div>
<!-- mobile -->
<div class="row landing-contain visible-xs">
  <a href=""><div class="col-xs-2 col-xs-offset-3 circle-xsmall mhxsmall">Mark</div></a>
  <div class="col-xs-1 ampersand-xsmall">&</div>
  <a href=""><div class="col-xs-2 col-xs-offset-1 circle-xsmall mhxsmall">Haley</div></a>
  <div class="col-xs-3"></div>
</div>
<!-- nav -->
<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://markandhaley.com">Mark & Haley</a>
  </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class=""><?php $page_id = 4; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Mark</a>';?></li>  
      <li class=""><?php $page_id = 8; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Haley</a>';?></li>
      <li class=""><?php $page_id = 10; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Story</a>';?></li>
      <li><?php $page_id = 21; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Groomsmen</a>';?></li>
      <li><?php $page_id = 14; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Bridesmaids</a>';?></li>
      <li><?php $page_id = 17; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Blog</a>';?></li>
      <li class="dropdown">
        <a href="http://markandhaley.com" class="dropdown-toggle" data-toggle="dropdown">Guests<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><?php $page_id = 27; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">RSVP <span class="glyphicon glyphicon-ok-sign pull-right"></span></a>';?></li>
          <li><?php $page_id = 29; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Getting There <span class="glyphicon glyphicon-road pull-right"></span></a>';?></li>
          <li><?php $page_id = 31; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Registration <span class="glyphicon glyphicon-gift pull-right"></span></a>';?></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- connect -->
    <li>
      <a href="http://markandhaley.com/rsvp"><span class="glyphicon glyphicon-ok-sign"></span>RSVP</a>
    </li>
    <li>
      <a href="https://twitter.com/markandhaley" target="blank"><img src="../wp-content/themes/M+H/img/Twitter_logo_white.png" alt="twitter" class="pull-right img-responsive" style="width: 26px; margin-right: 1em;"></a>
    </li>
    </ul>

  </div><!-- /.navbar-collapse -->
</nav>
<?php get_footer(); ?>