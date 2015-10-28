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

<article class="results row col-sm-12">
	<?php
	$as = new Area('Food1');
	$as->display($c);
	?>
			<div class="food-list">
				<?php
		$as = new Area('Main');
		$as->display($c);
		?>
			</div>
			<?php
	$as = new Area('Food2');
	$as->display($c);
	?>
			<div class="food-list">
				<?php
		$as = new Area('Food3');
		$as->display($c);
		?>
		</div>
		<?php
	$as = new Area('Food4');
	$as->display($c);
	?>
			<div class="food-list">
				<?php
			$as = new Area('Food5');
			$as->display($c);
			?>
			</div>
			<?php
		$as = new Area('Food6');
		$as->display($c);
		?>
			<div class="food-list">
				<?php
			$as = new Area('Food7');
			$as->display($c);
			?>
		</div>
		<?php
$as = new Area('Food8');
$as->display($c);
?>
			<div class="food-list">
				<?php
		$as = new Area('Food9');
		$as->display($c);
		?>
		</div>
		<?php
$as = new Area('Food10');
$as->display($c);
?>
			<div class="food-list">
				<?php
		$as = new Area('Food11');
		$as->display($c);
		?>
		</div>
		<?php
$as = new Area('Food12');
$as->display($c);
?>
			<div class="food-list">
				<?php
			$as = new Area('Food12');
			$as->display($c);
			?>
		</div>
		<?php
$as = new Area('Food13');
$as->display($c);
?>
			<div class="food-list">
				<?php
			$as = new Area('Food14');
			$as->display($c);
			?>
		</div>
		<?php
		$as = new Area('Food15');
		$as->display($c);
		?>
			<div class="food-list">
				<?php
		$as = new Area('Main');
		$as->display($c);
		?>
		</div>
		<?php
	$as->display($c);
	$as = new Area('Food16');
	?>
			<div class="food-list">
				<?php
				$as = new Area('Food17');
				$as->display($c);
				?>
		</div>
		<?php
	$as = new Area('Food18');
	$as->display($c);
	?>
			<div class="food-list">
				<?php
			$as = new Area('Food19');
			$as->display($c);
			?></div>
			<?php
		$as = new Area('Food20');
		$as->display($c);
		?>
			<div class="food-list">
				<?php
			$as = new Area('Food21');
			$as->display($c);
			?>	</div>
			<?php
	$as = new Area('Food22');
	$as->display($c);
	?>
	<div class="recipe-pages">
		<?php
$as = new Area('Food23');
$as->display($c);
?>
	</div>

</article>

</main>

<?php $this->inc('elements/footer.php'); ?>
</body>
</html>
