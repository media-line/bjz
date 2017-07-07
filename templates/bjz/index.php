<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$user = JFactory::getUser();
$this->setHtml5(true);
$params = $app->getTemplate(true)->params;
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Use of Google Font
if ($this->params->get('googleFont')) {
    JHtml::_('stylesheet', '//fonts.googleapis.com/css?family=' . $this->params->get('googleFontName'));
    $this->addStyleDeclaration("
	h1, h2, h3, h4, h5, h6, .site-title {
		font-family: '" . str_replace('+', ' ', $this->params->get('googleFontName')) . "', sans-serif;
	}");
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=1280px, initial-scale=1.0, user-scalable=yes"/>
    <jdoc:include type="head"/>
    <link rel="stylesheet" href="/templates/bjz/css/style.css">
</head>
<body>
<header class="container container_column">
    <div class="container allWidth menu_top">
        <jdoc:include type="modules" name="menu-top" style="xhtml"/>
    </div>
    <div class="container allWidth head">
        <div class="container_big sbetween">
            <jdoc:include type="modules" name="mod_phones" style="xhtml"/>
            <div class="logo">
                <img class="logo_img" src="/templates/bjz/images/logo.png"/>
            </div>
            <div class="search">
                <jdoc:include type="modules" name="mod_search" style="xhtml"/>
            </div>
        </div>
    </div>
    <div class="menu_bottom allWidth container">
        <jdoc:include type="modules" name="menu_bottom" style="xhtml"/>
    </div>
</header>
<main class="container">
    <div class="container_big">
        <jdoc:include type="modules" name="brcr" style="xhtml"/>
        <div class="container_ltl">
            <jdoc:include type="component"/>
        </div>
    </div>
</main>
<footer class="container footer">
    <div class="portallink container_big">
        <a href="/">
            <img src="/templates/bjz/images/link_portals/president.jpg">
        </a>
        <a href="/">
            <img src="/templates/bjz/images/link_portals/moik.jpg">
        </a>
        <a href="/">
            <img src="/templates/bjz/images/link_portals/pravo.jpg">
        </a>
        <a href="/">
            <img src="/templates/bjz/images/link_portals/butb.jpg">
        </a>
    </div>
    <div class="container container_big bottomfooter">
        <div class="copyright">
            &copy; 2017 Гомельский белково-жировой комбинат
        </div>
        <div class="developer">
            Разработка сайта - <a href="http://www.medialine.by">Медиа Лайн</a>
        </div>
    </div>
</footer>
</body>
</html>