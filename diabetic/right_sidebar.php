<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>
</head>

<body>
	<div class="<?= $c->getPageWrapperClass() ?>">
	<main class="col-xs-10 col-xs-offset-1">

			<header class="col-xs-4 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
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

					<?php
						$ga = new GlobalArea('Nav');
						$ga->display();
					?>
					<?php
					$as = new Area('search');
					$as->display($c);
					?>
				    <!--<form class="pull-right col-xs-12 col-sm-4 col-sm-offset-5 col-md-offset-5 col-md-5" action="results.html">
				  <div class="input-append">
 				<input class="span2" id="appendedInputButtons" placeholder="Search..." type="text">
 				<button class="btn glyphicon glyphicon-search" type="button"></button>
				  </div>
				</form>-->
        </div>
		</nav>
		<article class="col-xs-12 col-sm-12 col-md-8">
			<?php
			$as = new Area('Main');
			$as->display($c);
			?>
	</article>
	<aside class="col-xs-12 col-sm-12 col-md-4 directions">
		<div class="directions-info">
			<div class="time">
				<?php
				$as = new Area('Time');
				$as->display($c);
				?>
			</div>
			<div class="serving">
				<?php
				$as = new Area('Serving');
				$as->display($c);
				?>
			</div>
	</div>

	<?php
	$as = new Area('Sub');
	$as->display($c);
	?>
		<div id="comments">
			<?php
			$as = new Area('Comments');
			$as->display($c);
			?>
		</div>
	</aside>

</main>

<?php $this->inc('elements/footer.php'); ?>
</body>
</html>
