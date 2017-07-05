<?php
// No direct access
    defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';


$hotLine = $params->get('hotline', '');
$number = $params->get('number', '');


require JModuleHelper::getLayoutPath('mod_phones');