<article>
	<header>
		<h2>The Title Goes Here</h2>	
	</header>
	
	<aside>
		This is aside text lorem ipsum dolor sit amet consectetur adipisicing.
	</aside>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <a href="#">nostrud exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <a href="#">tempor incididunt</a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
	<footer>
		Posted August 22, 2011
	</footer>
</article>


<?php get_header(); ?>

<!-- smaller header -->



<div class="row landing-contain-small hidden-xs">
  <div class="col-md-4"></div>
    <a href=""><div class="col-md-1 circle-small mhsmall">Mark</div></a>
  <div class="col-md-2 ampersand-small hidden-xs">&</div>
    <a href=""><div class="col-md-1 circle-small mhsmall">Haley</div></a>
  <div class="col-md-4"></div>
</div>


<!-- mobile -->

<div class="row landing-contain visible-xs">
  <div class="col-xs-3"></div>
  <a href=""><div class="col-xs-2 circle-xsmall mhxsmall">Mark</div></a>
  <div class="col-xs-2 ampersand-xsmall">&</div>
  <a href=""><div class="col-xs-2 circle-xsmall mhxsmall">Haley</div></a>
  <div class="col-xs-3"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel">


              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article class="article-custom" itemtype="http://schema.org/BlogPosting">

              <img src="<?php echo get_the_post_thumbnail($post_id, array(140,140) ); ?>" alt="" class="img-circl">

                <header>

                  <h1><?php the_title(); ?></h1>
                </header>
<hr>
                <section class="">
                  <?php the_content(); ?>
              </section>

                <footer class="article-footer">
                  <?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

                </footer>

              </article>

              <?php endwhile; else : ?>

                  <article>
                    <header>
                      <h1><?php _e( 'Oops, Post Not Found!' ); ?></h1>
                    </header>
                    <section>
                      <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer>
                        <p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
                    </footer>
                  </article>

              <?php endif; ?>
        </div>
      </div>
    
  </div>
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
      <li class=""><?php $page_id = 4; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Mark</a>';?></li>  
      <li class=""><?php $page_id = 8; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Haley</a>';?></li>
      <li class=""><?php $page_id = 10; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Story</a>';?></li>
      <li><?php $page_id = 21; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Groomsmen</a>';?></li>
      <li><?php $page_id = 14; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Bridesmaids</a>';?></li>
      <li><?php $page_id = 17; $uri = get_page_uri($page_id); echo '<a href="'. $uri .'">Blog</a>';?></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guests<b class="caret"></b></a>
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
			<a href="https://twitter.com/markandhaley" target="blank"><img src="../wp-content/themes/M+H/img/Twitter_logo_white.png" alt="twitter" class="pull-right img-responsive" style="width: 32px; margin-right: .5em;"></a>
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
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<?php get_footer(); ?>