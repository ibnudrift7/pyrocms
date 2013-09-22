<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> 		   <![endif]-->

<head>
	<meta charset="utf-8">

	<!-- You can use .htaccess and remove these lines to avoid edge case issues. -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $template['title'].' - '.lang('cp:admin_title') ?></title>

	<base href="<?php echo base_url(); ?>" />

	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- Load up some favicons -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" href="apple-touch-icon-114x114-precomposed.png">

	<!-- metadata needs to load before some stuff -->
	<?php file_partial('metadata'); ?>

</head>

<body>

	<main class="horizontal-box stretch">

		<?php file_partial('sidebar'); ?>

		<section id="content">
		<section class="vertical-box">
			<header class="header bg-white border-bottom border-gray-lighter animated-zing fadeInDown">
				Hi!
			</header>

			<div class="padding">
				<?php $this->load->view('admin/partials/notices') ?>
			</div>

		</section>
		</section>

	</main>

	
	<?php Asset::js('build.min.js', null, 'deferred'); ?>

	<?php echo Asset::render_js('deferred') ?>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>
