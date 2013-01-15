<?php

// no direct access
defined('_JEXEC') or die;

class  plgSystemAngular extends JPlugin
{
	function onBeforeRender()
	{
        $document=JFactory::getDocument();
        $template=&$document->get('_template');
        require_once('ganon.php');
        $html=str_get_dom($template,false);
		$root=$html('head');
		$root[0]->parent->addAttribute('ng-app','');
        $document->set('_template',(string)$html);

	}
}
