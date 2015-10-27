<!--goes on top of every page to prevent people from accessing our files directly-->
<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!--Calls the header.php file from the elements folder to be added to the top of our pages-->
<?php $this->inc('elements/header.php'); ?>

<!--Inserted between the quotes of the lang attribute to enable C5 pull the right language for the page content-->
<?php echo Localization::activeLanguage()?>

<!--Makes sure the C5 in-site editing toolbar is included-->
<?php Loader::element('header_required'); ?>

<!--Creates a relative path so C5 can find the links referenced in our html.
Images and stylesheets must have relative paths. Use the getThemePath call-->
<?php echo $this->getThemePath(); ?>

<!--example-->
<img alt="apple" src="<?php echo $this->getThemePath(); ?>/images/apple.jpg" />

<!--Serves as a placeholder for code snippets we can specify in the C5 dashboard-->
<?php  Loader::element('footer_required'); ?>

<!--Calls the footer.php file from the elements folder to be added to the bottom of our pages-->
<?php $this->inc('elements/footer.php'); ?>

<!-- insert a global editable region with the name “header nav”.
Anything you paste in a GlobalArea will show up everywhere on your site.
Good for navigations, headers, and footer elements that stay the same from page to page. -->
<?php
$ga = new GlobalArea('Header Nav');
$ga->display();
?>

<!-- Insert an editable region with the name “Main”. Note: the name could be anything. -->
<?php
$a = new Area('Main');
$a->display($c);
?>
