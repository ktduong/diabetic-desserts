<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>


<!DOCTYPE html>
	<!--[if IE 8]> <html class="ie8 ie_old" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html lang="<?php echo Localization::activeLanguage()?>"> <!--<![endif]-->

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	    <link href="<?php echo $this->getThemePath(); ?>/css/styles.css" rel="stylesheet" type="text/css">
			<?php Loader::element('header_required'); ?>
	    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700,400' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
