<html <?php language_attributes(); ?>>
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?><?php  wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <script src="/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/gridfolio.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/gridfolio.js"></script>
	</head>
	<body >
		<div id="content">
			
