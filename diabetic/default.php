<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>
</head>

<body>
	<div class="<?php echo $c->getPageWrapperClass()?>">
	<main class="col-xs-10 col-xs-offset-1">

		<header class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-sm-offseet-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
			<?php
				$ga = new GlobalArea('Header');
				$ga->display();
			?>
			<img class="hidden-lg col-md-offset-1" src="<?php echo $this->getThemePath(); ?>/images/deco-line.png" alt="decorated line">

		</header>
		<nav class="row">
			<div class="navbar-header col-xs-offset-2 col-md-8 col-md-offset-2 pull-left">
    				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
   						<span class="sr-only">Toggle navigation</span>
   						<span class="glyphicon glyphicon-menu-hamburger pull-left"><b>MENU & SEARCH</b></span>
    				</button>
    	</div>
			<div class="collapse navbar-collapse navbar-left pull-left col-xs-12" id="bs-example-navbar-collapse-1">

					<div class="col-sm-8">
						<?php
						$ga = new GlobalArea('Nav');
						$ga->display();
					?>
				</div>

					<div class="col-sm-4 pull-right input-group">
						<?php
						$ga = new GlobalArea('search');
						$ga->display();
					?>
				</div>
				    <!--<form class="pull-right col-xs-12 col-sm-4 col-sm-offset-8 col-md-offset-6 col-md-5" action="results.html">
				  <div class="input-append">
 				<input class="span2" id="appendedInputButtons" placeholder="Search..." type="text">
 				<button class="btn glyphicon glyphicon-search" type="button"></button>
				  </div>
				</form><!-->
        </div>
		</nav>
<div class="row">
<aside class="bannerific col-xs-12">
	<div class="row">
		<div class="banner pull-left">
			<img class="hidden-md hidden-lg" src="<?php echo $this->getThemePath(); ?>/images/banner.png" alt="banner">
			<img class="hidden-xs hidden-sm" src="<?php echo $this->getThemePath(); ?>/images/banner2.png" alt="banner">
		</div>
		<div class="banner-text">
			<h3 class="col-sm-12">
				Simple.
				<br>
				Delicious.
				<br>
				Healthy.
				<br>
				Easy.
			</h3>
			<h4>Desserts anyone can enjoy.</h4>
		</div>
	</div>
<br>
</aside>
<div><br></div>
<article class="main col-xs-12 pull-left col-sm-10 col-sm-offset-1">
	<ul class="list-unstyled">
<li class="col-sm-6"><a href="details.html"><h5 id="UP">FRENCH MACARON</h5></a>
	<h6>submitted by <a href="results.html">Kim Duong</a></h6>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>

	<?php
	$a = new Area('Macaron');
	$a->display($c);
	?>
  <br>
	<br>
</li>
<li class="col-sm-6"><a href="details.html"><h5>BERRY CAKE-<br class="visible-sm">ROLL</h5></a>
	<h6>submitted by <a href="results.html">Kim Duong</a></h6>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<span class="glyphicon glyphicon-star"></span>
	<a href="#comments">(37)</a>
	<?php
	$a = new Area('Berry');
	$a->display($c);
	 ?>

	<br>
</li>
</ul>
	<div class="pages">
		<ul class="pagination">
			<li><a href="index.html">&lt;</a></li>
			<li class="active"><a href="index.html">1</a></li>
			<li><a href="index.html">2</a></li>
			<li><a href="index.html">3</a></li>
			<li class="hidden-xs"><a href="index.html">4</a></li>
			<li class="hidden-xs"><a href="index.html">5</a></li>
			<li><a href="index.html">></a></li>
		</ul>
	</div>


	<div class="most-popular pull-left">
		<a href="recipes.html">Most Popular</a>
	</div>
	<div class="most-popular-pics">
		<ul class="list-unstyled">
			<li class="col-xs-6 col-lg-3">
			<?php
			$a = new Area('Maccaron');
			$a->display($c);
			?>
			</li>
			<li class="col-xs-6 col-lg-3">
				<?php
				$a = new Area('Pop2');
				$a->display($c);
				?>
			</li>
			<li class="col-xs-6 col-lg-3">
				<?php
				$a = new Area('Pop3');
				$a->display($c);
				?>
			</li>
			<li class="col-xs-6 col-lg-3">
				<?php
				$a = new Area('Pop4');
				$a->display($c);
				?>
			</li>
		</ul>
	</div>

	<div class="how-to pull-right">
		<a href="recipes.html">Helpful How-To's</a>
	</div>
	<div class="how-tos-pics">
		<ul class="list-unstyled">
			<li class="col-xs-6 col-lg-3">
				<?php
				$a = new Area('How1');
				$a->display($c);
				?>
			</li>
			<li class="col-xs-6 col-lg-3">
				<?php
				$a = new Area('How2');
				$a->display($c);
				?>
			</li>
			<li class="col-xs-6 col-lg-3">
				<img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/images/deco-cake.jpg" alt="decoration">
				<a href="details.html">Best Decoration</a>
			</li>
			<li class="col-xs-6 col-lg-3">
				<img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/images/peach-fast.jpg" alt="portion plate">
				<a href="details.html">Portioning</a>
			</li>
		</ul>
	</div>
</article>
</div>

</main>

<?php $this->inc('elements/footer.php'); ?>

</body>
</html>
