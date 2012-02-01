<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>" /> 
<meta name="author" content="Arts and Sciences Technology Services Office" /> 
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State" /> 

<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
	
</head>
<body class="<?php print $body_classes ?>">

	<div class="container">
		<?php if ($drupalnav){ ?>
			<div><?php print $drupalnav ?></div><br/ style="clear:both">
	 	 <?php } ?>

		<?php require_once("./navbar/osu-navbar-b.html"); ?>

		<div id="header" class="span-23 prepend-1">
			<div class="logo">
				<?php if($logo) { ?>
					<a href="<?php global $base_url; print $base_url; ?>" title="Back to <?php print $site_name; ?> home"><img alt="<?php print $site_name; ?> Logo" src="<?php print $logo ?>"/></a>
				<?php } ?>
			</div><!-- .logo -->	

			<div class="secondarylinks">
				<?php if ($secondary_links){ ?>
			 		<?php print theme('links', $secondary_links, array('class' => 'links secondary_menu')) ?>
		 		<?php } ?>
			</div><!-- .secondarylinks -->
	
			<div id="navigation">
				<?php print $MainNav; ?>			
			</div><!-- #navigation -->
		</div> <!-- #header -->

		<a id="page-content"></a>
		<div class="span-17 prepend-1 colborder" id="leftcontent-nostyle">
			<?php if ($title != ""){ ?>
  				<h1 id="title"><?php print $title ?></h1>
			<?php } ?>

			<?php if ($tabs != ""){ ?>
				<?php print $tabs ?>
			<?php } ?>
			<?php if ($messages != ""){ ?>
				<div id="message"><?php print $messages ?></div>
			<?php } ?>

			<div class="content">
				<?php print $before_content ?>	
				<?php print $content ?>
			</div>
			
		</div><!-- #leftcontent-nostyle -->

		<div class="span-5 last" id="sidebar">
			<?php print $right; ?>
		</div> <!-- #sidebar -->

		<div id="footer">
			<div class="footer span-9 prepend-1 first">
					<img alt="OSU Logo" title="The Ohio State University" src="/sites/all/themes/osugeneric/images/logo.gif" />
			</div>
			<div class="footer span-13 append-1 last">
				<div class="contact">
					<?php print $footer; ?>
					<?php if(user_access('administer site configuration')) { ?>
						<ul class="tabs primary">
				 			<li class="active">
								<a class="active" href="<?=url();?>admin/settings/site-information">Edit Text</a>
							</li>
						</ul>
					<?php } ?>
			    		<?php print $footer_message; ?>
					<?php include("sites/all/files/icons/uicons.php"); ?>
				</div><!-- .contact -->		
			</div><!-- .footer -->
		</div><!-- #footer -->	

	</div><!-- .container -->
	

<?php print $closure;?>

</body>

</html>
