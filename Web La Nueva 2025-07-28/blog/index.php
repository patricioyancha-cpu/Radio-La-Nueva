<?php require_once("../res/x5engine.php"); ?>
<?php
$blog = new imBlog();
$data = $blog->parseUrlArray(@$_GET);
if (!$data['valid']) {
	header('Location: index.php', true, 302);
}
?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title><?php echo $blog->pageTitle('Personal Trainer Blog - Radio La Nueva FM Ambato', ' - '); ?></title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Genial Compu" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2023.1.5 - www.websitex5.com" />
		<meta name="description" content="<?php echo $blog->pageDescription(); ?>" />
		<meta name="keywords" content="<?php echo $blog->pageKeywords(); ?>" />
		<meta property="og:locale" content="es" />
<?php if (isset($data['id'])) { echo $blog->getOpengraphTags($data['id'], "\t\t"); } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../style/reset.css?2023-1-5-0" media="screen,print" />
		<link rel="stylesheet" href="../style/print.css?2023-1-5-0" media="print" />
		<link rel="stylesheet" href="../style/style.css?2023-1-5-0" media="screen,print" />
		<link rel="stylesheet" href="../style/template.css?2023-1-5-0" media="screen" />
		
		<link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_07/custom.css" media="screen, print" /><link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_14/custom.css" media="screen, print" />
		<link rel="stylesheet" href="../blog/style.css?2023-1-5-0-638892950863734145" media="screen,print" />
		<script src="../res/jquery.js?2023-1-5-0"></script>
		<script src="../res/x5engine.js?2023-1-5-0" data-files-version="2023-1-5-0"></script>
		
		<script src="../pluginAppObj/imFooter_pluginAppObj_07/main.js"></script><script src="../pluginAppObj/imFooter_pluginAppObj_14/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
			x5engine.settings.currentPath = '../';
			x5engine.utils.currentPagePath = 'blog/index.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="../favicon.png?2023-1-5-0-638892950863604245" type="image/png" />
		<link rel="alternate" type="application/rss+xml" title="Personal Trainer Blog" href="../blog/x5feed.php" />
<?php
$blogBaseUrl = $imSettings['general']['url'] . 'blog';
$urlData = $blog->parseUrlArray(@$_GET);
$numPosts = $blog->getPostsCount();
$pagStart = array_key_exists("start", $urlData) ? $urlData['start'] : 0;
$pagLength = $imSettings['blog']['home_posts_number'];
$isPostPage = false;
if (array_key_exists('slug', $urlData)) {
	$isPostPage = true;
	$href = $blogBaseUrl . '/?' . $urlData['slug'];
}
else if (array_key_exists('id', $urlData)) {
	$isPostPage = true;
	$href = $blogBaseUrl . '/' . $blog->getSlugUrl($urlData['id']);
}
else if (array_key_exists('category', $urlData)) {
	$category = $blog->getUnescapedCategory($urlData['category']);
	if ($category !== NULL) {
		$href = $blogBaseUrl . '/?category=' . urlencode(str_replace(' ', '_', $category));
	}
}
else if (array_key_exists('author', $urlData)) {
	$author = $blog->getUnescapedAuthor($urlData['author']);
	if ($author !== NULL) {
		$href = $blogBaseUrl . '/?author=' . urlencode(str_replace(' ', '_', $author));
	}
}
else if (array_key_exists('tag', $urlData)) {
	$href = $blogBaseUrl . '/?tag=' . urlencode($urlData['tag']);
}
else if (array_key_exists('month', $urlData)) {
	$href = $blogBaseUrl . '/?month=' . urlencode($urlData['month']);
}
else {
	$href = $blogBaseUrl;
}
if ($isPostPage || $pagStart == 0) {
	echo '<link rel="canonical" href="'. $href. '"/>' . PHP_EOL;
}
if (!$isPostPage && $numPosts > $pagLength) {
	if ($pagStart - $pagLength >= 0) {
		$prev = 'start=' . ($pagStart - $pagLength) . '&length=' . $pagLength;
		$prev = ($href == $blogBaseUrl) ? '?' . $prev : '&' . $prev;
		echo '<link rel="prev" href="' . $href . $prev . '"/>' . PHP_EOL;
	}
	if ($pagStart + $pagLength < $numPosts) {
		$next = 'start=' . ($pagStart + $pagLength) . '&length=' . $pagLength;
		$next = ($href == $blogBaseUrl) ? '?' . $next : '&' . $next;
		echo '<link rel="next" href="' . $href . $next . '"/>' . PHP_EOL;
	}
}
$rich_data_string = $blog->getRichDataType();
if (!is_null($rich_data_string)) {
	echo '		<script type="application/ld+json">
' . $rich_data_string . '
		</script>
';
}
?>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden"><?php echo $blog->pageHeaderTitle('Personal Trainer Blog - Radio La Nueva FM Ambato', ' - '); ?></h1>
						<div id="imHeaderObjects"><div id="imHeader_imHTMLObject_08_wrapper" class="template-object-wrapper"><div id="imHeader_imHTMLObject_08" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="250px" height="140px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="https://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=https://sonicpanel.zonaradio.net/8296/stream&fondo=00&formato=mpeg&color=5&titulo=2&autoStart=1&vol=10&tipo=23&nombre=Radio+La+Nueva+90.9+FM&botonPlay=1&imagen=https://www.radiolanuevafmambato.com/images/La-nueva-logo-00.png"></iframe></div></div><div id="imHeader_imMenuObject_02_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_02"><div id="imHeader_imMenuObject_02_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
INICIO		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">NOSOTROS</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/quienes-somos.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../quienes-somos.html">
Quienes Somos		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/mision.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../mision.html">
Misión		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/vision.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../vision.html">
Visión		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/codigo-de-etica.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../codigo-de-etica.html">
Código de Ética		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">PROGRAMACIÓN</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/programas.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../programas.html">
Programas		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/informativo-transparencia.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../informativo-transparencia.html">
Informativo Transparencia		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">RENDICIÓN DE CUENTAS</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/rendicion-de-cuentas-2020.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../rendicion-de-cuentas-2020.html">
Rendición de Cuentas 2020		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/rendicion-de-cuentas-2021.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../rendicion-de-cuentas-2021.html">
Rendición de Cuentas 2021		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/rendicion-de-cuentas-2022.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../rendicion-de-cuentas-2022.html">
Rendición de Cuentas 2022		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnLast imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">UBÍCANOS</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/red-social.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../red-social.html">
Red Social		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/direccion.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../direccion.html">
Dirección		</a>
</div>
</div>
	</li></ul></li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_02_settings = {
	'menuId': 'imHeader_imMenuObject_02',
	'responsiveMenuEffect': 'push',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_02_settings)});
$(function () {$('#imHeader_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div><div id="imHeader_imObjectImage_04_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_04"><div id="imHeader_imObjectImage_04_container"><a href="../files/La_Nueva_V2_5.apk"><img src="../images/apk-icon5.png" title="" alt="" width="51" height="51" />
</a></div></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imMenuObject_01_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_01"><div id="imStickyBar_imMenuObject_01_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
INICIO		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">NOSOTROS</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/quienes-somos.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../quienes-somos.html">
Quienes Somos		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/mision.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../mision.html">
Misión		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/vision.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../vision.html">
Visión		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/codigo-de-etica.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../codigo-de-etica.html">
Código de Ética		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">PROGRAMACIÓN</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/programas.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../programas.html">
Programas		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/informativo-transparencia.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../informativo-transparencia.html">
Informativo Transparencia		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">RENDICIÓN DE CUENTAS</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/rendicion-de-cuentas-2020.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../rendicion-de-cuentas-2020.html">
Rendición de Cuentas 2020		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/rendicion-de-cuentas-2021.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../rendicion-de-cuentas-2021.html">
Rendición de Cuentas 2021		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/rendicion-de-cuentas-2022.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../rendicion-de-cuentas-2022.html">
Rendición de Cuentas 2022		</a>
</div>
</div>
	</li></ul></li><li class="imMnMnLast imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">UBÍCANOS</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imPage" data-link-paths=",/red-social.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../red-social.html">
Red Social		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/direccion.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../direccion.html">
Dirección		</a>
</div>
</div>
	</li></ul></li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_01_settings = {
	'menuId': 'imStickyBar_imMenuObject_01',
	'responsiveMenuEffect': 'push',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_01_settings)});
$(function () {$('#imStickyBar_imMenuObject_01_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_01_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_01_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imBlogPage" class="<?php echo (isset($data['id']) ? 'imBlogArticle' : 'imBlogHome'); ?>"><<?php echo (isset($data['id']) ? 'article' : 'div'); ?> id="imBlogContent"><?php
						$blog->setCommentsPerPage(10);
						if(isset($data['id']))
							$blog->showPost($data['id'],1);
						else if(isset($data['category']))
							$blog->showCategory($data['category']);
						else if(isset($data['author']))
							$blog->showAuthor($data['author']);
						else if(isset($data['tag']))
							$blog->showTag($data['tag']);
						else if(isset($data['month']))
							$blog->showMonth($data['month']);
						else if(isset($data['search']))
							$blog->showSearch($data['search']);
						else
							$blog->showLast(12);
						?>
						</<?php echo (isset($data['id']) ? 'article' : 'div'); ?>>
						<aside id="imBlogSidebar">
							<div class="imBlogBlock" id="imBlogBlock0">
								<div>
									<div class="imBlogBlockTitle">Artículos recientes</div>
						<?php $blog->showBlockLast(4) ?>
								</div>
							</div>
							<div class="imBlogBlock" id="imBlogBlock1">
								<div>
									<div class="imBlogBlockTitle">Artículos mensuales</div>
						<?php $blog->showBlockMonths(4) ?>
								</div>
							</div>
						</aside>
						<script>
							x5engine.boot.push(function () { 
								x5engine.blogSidebarScroll({ enabledBreakpoints: ['ea2f0ee4d5cbb25e1ee6c7c4378fee7b', 'd2f9bff7f63c0d6b7c7d55510409c19b'] });
								var postHeightAtDesktop = 300,
									postWidthAtDesktop = 880;
								if ($('#imBlogPage').hasClass('imBlogArticle')) {
									var coverResizeTo = null,
										coverWidth = 0;
									x5engine.utils.onElementResize($('.imBlogPostCover')[0], function (rect, target) {
										if (coverWidth == rect.width) {
											return;
										}
										coverWidth = rect.width;
										if (!!coverResizeTo) {
											clearTimeout(coverResizeTo);
										}
										coverResizeTo = setTimeout(function() {
											$('.imBlogPostCover').height(postHeightAtDesktop * coverWidth / postWidthAtDesktop + 'px');
										}, 50);
									});
								}
							});
						</script>
						</div>
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_pluginAppObj_07_wrapper" class="template-object-wrapper"><!-- Social Icons v.19 --><div id="imFooter_pluginAppObj_07">
            <div id="soc_imFooter_pluginAppObj_07">
                <div class="wrapper horizontal flat shake">
                	<div class='social-icon flat'><a href='https://www.facebook.com/lanuevafmambato' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_07();
                </script>
        </div></div><div id="imFooter_imTextObject_08_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_08">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_08_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div class="imTALeft"><div data-line-height="1"><b class="fs12lh1-5"><span class="fs11lh1-5 cf1 ff1">Dir</span></b><span class="fs11lh1-5 cf1 ff1">: Izamba Ciudadela La Merced, Ocho Ríos entre Tampico y Alberto Cobo</span></div><div data-line-height="1"><div><span class="fs11lh1-5 cf1 ff1">Ambato - Tungurahua - Ecuador</span></div></div><div data-line-height="1"><b class="fs12lh1-5 cf1"><span class="fs11lh1-5 ff1">Telfs</span></b><span class="fs11lh1-5 cf1 ff1">.: &nbsp;(593) 962894996 / (03)-2510251</span><br></div><div data-line-height="1"><span class="cf1"><b><span class="fs11lh1-5 ff1">email</span></b><span class="fs11lh1-5 ff1">: radiolanuevafm@gmail.com</span></span></div><div data-line-height="1"><blockquote><blockquote><blockquote><div></div><div></div></blockquote></blockquote></blockquote></div></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imObjectImage_09_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectImage_09"><div id="imFooter_imObjectImage_09_container"><img src="../images/Genial-Compu-2020-4.png" title="" alt="" width="166" height="69" />
</div></div></div><div id="imFooter_imTextObject_10_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_10">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_10_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div class="imTALeft"><div data-line-height="1"><div data-line-height="1"><b><span class="fs11lh1-5 cf1 ff1">Dir</span></b><span class="fs11lh1-5 cf1 ff1">: Izamba Ciudadela La Merced, Ocho Ríos entre Tampico y Alberto Cobo</span></div><div><span class="fs11lh1-5 cf1 ff1">Ambato - Tungurahua - Ecuador</span></div><div data-line-height="1"><b><span class="fs11lh1-5 cf1 ff1">Telfs</span></b><span class="fs11lh1-5 cf1 ff1">.: &nbsp;(593) 962894996 / (03)-2510251</span><br></div><div data-line-height="1"><b><span class="fs11lh1-5 cf1 ff1">email</span></b><span class="fs11lh1-5 cf1 ff1">: radiolanuevafm@gmail.com</span></div></div><div data-line-height="1"><blockquote><blockquote><blockquote><div></div><div></div></blockquote></blockquote></blockquote></div></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imObjectImage_11_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectImage_11"><div id="imFooter_imObjectImage_11_container"><img src="../images/La-nueva-logo-00.png" title="" alt="" width="90" height="75" />
</div></div></div><div id="imFooter_pluginAppObj_14_wrapper" class="template-object-wrapper"><!-- Social Icons v.19 --><div id="imFooter_pluginAppObj_14">
            <div id="soc_imFooter_pluginAppObj_14">
                <div class="wrapper horizontal flat shake">
                	<div class='social-icon flat'><a href='https://www.facebook.com/lanuevafmambato' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_14();
                </script>
        </div></div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div></noscript>
	</body>
</html>
