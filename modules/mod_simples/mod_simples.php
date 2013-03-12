<?php
    defined('_JEXEC') or die('access restricted');
    require_once(dirname(__FILE__).DS.'helper.php');
    $conf = modSimpleHelper::getparam($params);
    $document = &JFactory::getDocument();
    $document->addScript('modules/mod_simples/js/jquery-1.8.2.js');
    $document->addScript('modules/mod_simples/js/jquery-ui-1.9.1.custom.js');
    $document->addScript('modules/mod_simples/js/slides.js');
    
    $rows=modSimpleHelper::getHtml($params);
	require(JModuleHelper::getLayoutPath('mod_simples'));
?>