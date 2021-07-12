<!doctype html>
<html class="h-100" lang="ja">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="<?= get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet" >
	<link href="<?= get_template_directory_uri() ?>/css/simplemint.css" rel="stylesheet" >

	<title><?php bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
</head>
<body class="d-flex flex-column h-100">

	<header class="navbar fixed-top navbar-light bg-light">
		<div class="container-fluid">
			<h1 class="mb-0  fs-6">
				<a class="navbar-brand py-0" href="<?=home_url() ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<span class="navbar-text d-none d-sm-block py-0">
				<?php bloginfo( 'description' ); ?>
			</span>
		</div>
	</header>
