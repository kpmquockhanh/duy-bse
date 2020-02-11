<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<meta charset="UTF-8" />
	<title><?= get_bloginfo('name') . " - " . get_bloginfo('description') ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	<style type="text/css" media="all" id="siteorigin-panels-layouts-head">
		/* Layout 27 */
		#pgc-27-0-0 , #pgc-27-1-0 , #pgc-27-2-0 , #pgc-27-3-0 , #pgc-27-4-0 , #pgc-27-5-0 , #pgc-27-6-0 , #pgc-27-7-0 , #pgc-27-8-0 { width:100%;width:calc(100% - ( 0 * 30px ) ) }
		#pl-27 #panel-27-0-0-0 , #pl-27 #panel-27-1-0-0 , #pl-27 #panel-27-2-0-0 , #pl-27 #panel-27-3-0-0 , #pl-27 #panel-27-4-0-0 , #pl-27 #panel-27-4-0-1 , #pl-27 #panel-27-5-0-0 , #pl-27 #panel-27-6-0-0 , #pl-27 #panel-27-7-0-0 , #pl-27 #panel-27-7-0-1 , #pl-27 #panel-27-8-0-0 {  } #pg-27-0 , #pg-27-1 , #pg-27-2 , #pg-27-3 , #pg-27-4 , #pg-27-5 , #pg-27-6 , #pg-27-7 , #pl-27 .so-panel , #pl-27 .so-panel:last-child { margin-bottom:0px }
		#pg-27-0.panel-no-style, #pg-27-0.panel-has-style > .panel-row-style , #pg-27-1.panel-no-style, #pg-27-1.panel-has-style > .panel-row-style , #pg-27-2.panel-no-style, #pg-27-2.panel-has-style > .panel-row-style , #pg-27-3.panel-no-style, #pg-27-3.panel-has-style > .panel-row-style , #pg-27-4.panel-no-style, #pg-27-4.panel-has-style > .panel-row-style , #pg-27-5.panel-no-style, #pg-27-5.panel-has-style > .panel-row-style , #pg-27-6.panel-no-style, #pg-27-6.panel-has-style > .panel-row-style , #pg-27-7.panel-no-style, #pg-27-7.panel-has-style > .panel-row-style , #pg-27-8.panel-no-style, #pg-27-8.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start }
		#pg-27-5 > .panel-row-style { background-color:#f7f7f7 }
		@media (max-width:780px){ #pg-27-0.panel-no-style, #pg-27-0.panel-has-style > .panel-row-style , #pg-27-1.panel-no-style, #pg-27-1.panel-has-style > .panel-row-style , #pg-27-2.panel-no-style, #pg-27-2.panel-has-style > .panel-row-style , #pg-27-3.panel-no-style, #pg-27-3.panel-has-style > .panel-row-style , #pg-27-4.panel-no-style, #pg-27-4.panel-has-style > .panel-row-style , #pg-27-5.panel-no-style, #pg-27-5.panel-has-style > .panel-row-style , #pg-27-6.panel-no-style, #pg-27-6.panel-has-style > .panel-row-style , #pg-27-7.panel-no-style, #pg-27-7.panel-has-style > .panel-row-style , #pg-27-8.panel-no-style, #pg-27-8.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-27-0 > .panel-grid-cell , #pg-27-0 > .panel-row-style > .panel-grid-cell , #pg-27-1 > .panel-grid-cell , #pg-27-1 > .panel-row-style > .panel-grid-cell , #pg-27-2 > .panel-grid-cell , #pg-27-2 > .panel-row-style > .panel-grid-cell , #pg-27-3 > .panel-grid-cell , #pg-27-3 > .panel-row-style > .panel-grid-cell , #pg-27-4 > .panel-grid-cell , #pg-27-4 > .panel-row-style > .panel-grid-cell , #pg-27-5 > .panel-grid-cell , #pg-27-5 > .panel-row-style > .panel-grid-cell , #pg-27-6 > .panel-grid-cell , #pg-27-6 > .panel-row-style > .panel-grid-cell , #pg-27-7 > .panel-grid-cell , #pg-27-7 > .panel-row-style > .panel-grid-cell , #pg-27-8 > .panel-grid-cell , #pg-27-8 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pl-27 .panel-grid-cell { padding:0 } #pl-27 .panel-grid .panel-grid-cell-empty { display:none } #pl-27 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  }
	</style>
	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<style type="text/css" media="all"
		   id="siteorigin-panels-layouts-footer">/* Layout 38 */
		#pgc-38-0-0 {
			width: 100%;
			width: calc(100% - (0 * 30px))
		}

		#pl-38 #panel-38-0-0-0, #pl-38 #panel-38-1-0-0, #pl-38 #panel-38-1-1-0 {
		}

		#pg-38-0, #pl-38 .so-panel, #pl-38 .so-panel:last-child {
			margin-bottom: 0px
		}

		#pgc-38-1-0 {
			width: 70%;
			width: calc(70% - (0.3 * 30px))
		}

		#pgc-38-1-1 {
			width: 30%;
			width: calc(30% - (0.7 * 30px))
		}

		#pg-38-0.panel-no-style, #pg-38-0.panel-has-style > .panel-row-style, #pg-38-1.panel-no-style, #pg-38-1.panel-has-style > .panel-row-style {
			-webkit-align-items: flex-start;
			align-items: flex-start
		}

		#pgc-38-1-0, #pgc-38-1-1 {
			align-self: auto
		}

		@media (max-width: 780px) {
			#pg-38-0.panel-no-style, #pg-38-0.panel-has-style > .panel-row-style, #pg-38-1.panel-no-style, #pg-38-1.panel-has-style > .panel-row-style {
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column
			}

			#pg-38-0 > .panel-grid-cell, #pg-38-0 > .panel-row-style > .panel-grid-cell, #pg-38-1 > .panel-grid-cell, #pg-38-1 > .panel-row-style > .panel-grid-cell {
				width: 100%;
				margin-right: 0
			}

			#pgc-38-1-0, #pl-38 .panel-grid .panel-grid-cell-mobile-last {
				margin-bottom: 0px
			}

			#pl-38 .panel-grid-cell {
				padding: 0
			}

			#pl-38 .panel-grid .panel-grid-cell-empty {
				display: none
			}
		} </style>

	<style type="text/css">
		@font-face{font-family:'FontAwesome';src:url('<?= get_bloginfo('url') ?>/wp-content/themes/duy/assets/fonts/fontawesome-webfont.eot?v=4.7.0');src:url('<?= get_bloginfo('url') ?>/wp-content/themes/duy/assets/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0')format('embedded-opentype'),url('<?= get_bloginfo('url') ?>/wp-content/themes/duy/assets/fonts/fontawesome-webfont.woff2?v=4.7.0')format('woff2'),url('<?= get_bloginfo('url') ?>/wp-content/themes/duy/assets/fonts/fontawesome-webfont.woff?v=4.7.0')format('woff'),url('<?= get_bloginfo('url') ?>/wp-content/themes/duy/assets/fonts/fontawesome-webfont.ttf?v=4.7.0')format('truetype'),url('<?= get_bloginfo('url') ?>/wp-content/themes/duy/assets/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular')format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-facebook-f:before, .fa-facebook:before {content: "\f09a";}.fa-twitter:before {content: "\f099";}.fa-youtube-play:before {content: "\f16a";}.fa-google-plus:before {content: "\f0d5";}.fa-youtube:before {content: "\f167";}.fa-instagram:before {content: "\f16d";}.fa-navicon:before, .fa-reorder:before, .fa-bars:before {content: "\f0c9";}.fa-pinterest:before {content: "\f0d2";}.fa-pinterest-p:before {content: "\f231";}.fa-tag:before {content: "\f02b";}.fa-remove:before, .fa-close:before, .fa-times:before {content: "\f00d";}.fa-envelope:before {content: "\f0e0";}.fa-phone:before {content: "\f095";}.fa-map-marker:before {content: "\f041";}.fa-question-circle:before {content: "\f059";}.fa-globe:before {content: "\f0ac";}.fa-mail-forward:before, .fa-share:before {content: "\f064";}.fa-mail-reply:before, .fa-reply:before {content: "\f112";}.fa-youtube-play:before {content: "\f16a";}
	</style>
	<style>
		#breadcrumbs, #breadcrumbs a, #breadcrumbs .breadcrumb_last {
			color: white;
		}
		.has_thumbnail img {
			max-height: 300px;
		}
	</style>
</head>