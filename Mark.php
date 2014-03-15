<?php
/*
Template Name: Mark
*/
?>

<?php get_header(); ?>
<body>
<div class="row landing-contain hidden-xs">
<div class="col-md-4"></div>
<a href=""><div class="col-md-1 circle mark">Mark</div></a>
<div class="col-md-2 ampersand hidden-xs">&</div>
<a href=""><div class="col-md-1 circle haley">Haley</div></a>
<div class="col-md-4"></div>
</div>

<!-- mobile -->

<div class="row  hidden-sm hidden-md hidden-lg visible-xs">

	<div class="col-xs-4"></div>
		<a href=""><div class="col-xs-1 circle-small mark hidden-xs"></div></a>
		<div class="col-xs-2 hidden-xs">M+H</div>
		<a href=""><div class="col-xs-1 circle-small haley hidden-xs"></div></a>
	<div class="col-xs-4"></div>
	
</div>

<div class="row  hidden-sm hidden-md hidden-lg visible-xs">

  <div class="col-xs-4"></div>
    <a href=""><div class="col-xs-1 circle-small mark hidden-xs">Mark</div></a>
    <div class="col-xs-2 ampersand hidden-xs">&</div>
    <a href=""><div class="col-xs-1 circle-small haley hidden-xs">Haley</div></a>
  <div class="col-xs-4"></div>
  
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
    <a class="navbar-brand" href="#">Mark & Haley</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class=""><a href="#">Mark</a></li>
      <li class=""><a href="#">Haley</a></li>
      <li class=""><a href="#">Story</a></li>
      <li><a href="#">Groomsmen</a></li>
      <li><a href="#">Bridesmaids</a></li>
      <li><a href="#">Blog</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guests <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">RSVP</a></li>
          <li><a href="#">Getting here</a></li>
          <li><a href="#">Registration</a></li>
          <li class="divider"></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- connect -->
		<li class="">
			<a href="https://twitter.com/markandhaley" target="blank"><img src="img/Twitter_logo_white.png" alt="twitter" class="pull-right img-responsive" style="width: 32px; margin-right: .5em;"></a>
		</li>
    </ul>

  </div><!-- /.navbar-collapse -->
</nav>




    </footer>

</article> 

      </div>
    </div>
  </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<?php get_footer(); ?>