<?php
 
 class modSimpleHelper
 { 
   
    function getHtml($params)
	{
	   $item=$params->get('item',10);
	   $db=&JFactory::getDBO();
	   $result=null;
	   $query='SELECT * FROM #__bannerimg_detail where state=1';
	   $db->setQuery($query,0,$items);
	    $rows=$db->loadObjectList();
	   if($db->getErrorNum())
	   {
	   JError::raiseWarning(500,$db->stderr(true));
        
	   }
	      
	   	  return  $rows;
		  
	} 
	function getparam($params)
	{
		$var = array();

		$var['moduleclass_sfx'] = $params->get('moduleclass_sfx');

		$var['banners']			= $params->get('banners', '');
		$var['categories']		= $params->get('categories', '');
		$var['clients']			= $params->get('clients', '');
		$var['type'] 			= $params->get('type', 1);

		$var['effect']			= $params->get('effect', 'fade');

		$var['width']			= $params->get('width', 180);
		$var['height']			= $params->get('height', 150);
		$var['delay']			= $params->get('delay', 3000);

		$var['random']			= $params->get('random', 1);
		
		$var['resize']			= $params->get('resize', 0);
		$var['center']			= $params->get('center', 0);
		
		$var['window']			= $params->get('window', 1);
		$var['impress']			= $params->get('track_impressions', 0);

		return $var;
	}
	
	
	
	
	function renderHtml(&$html,&$params)
	{
	
       $link=JRoute::_('index.php?option=mod_simples&id='.$html->id.'&task=view');
	   require(JModuleHelper::getLayoutPath('mod_simples','htmlv'));
	}
	
	
 }
?>
 