<?php
defined('_JEXEC') or die;
$app  = JFactory::getApplication();
$user = JFactory::getUser();
$this->setHtml5(true);
$params = $app->getTemplate(true)->params;
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Use of Google Font
if ($this->params->get('googleFont'))
{
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
    <meta name="viewport" content="width=1280px, initial-scale=1.0, user-scalable=yes" />
    <jdoc:include type="head" />
    <link rel="stylesheet" href="/templates/bjz/css/style.css">
</head>
<body>
<header class="container container_column">
    <div class="menu_top head_wrapper">
        <jdoc:include type="modules" name="menu-top" style="xhtml" />
    </div>
    <div class="head head_wrapper">
        <div class="container_big">
            <div class="phone">
                <div class="hot-line"></div>
                <div class="number"></div>
            </div>
            <div class="logo"></div>
            <div class="search">
                <jdoc:include type="modules" name="mod_search" style="xhtml" />
            </div>
        </div>
    </div>
    <div class="menu_bottom head_wrapper">
        <jdoc:include type="modules" name="menu_bottom" style="xhtml" />
    </div>
</header>
<main class="container">
    <div class="container_ltl">
        <jdoc:include type="component" />
    </div>
</main>
<footer class="container"></footer>
</body>
</html>