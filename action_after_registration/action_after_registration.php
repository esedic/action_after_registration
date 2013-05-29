<?php
defined( '_JEXEC' ) or die;
/**
* @version    		2.5.0
* @copyright  		Copyright (C) 2012 Spletodrom. All rights reserved.
* @license   		GNU/GPL, see LICENSE.php
* @autor      		Elvis Sedić
* @autor-email      esedic@gmail.com
*
*/
jimport('joomla.event.plugin');
jimport('joomla.application.application');

class plgUserActionAfterRegistration extends JPlugin
{
	public function onUserAfterSave($user, $isnew, $success, $msg)
		{

			if (!$succes) {
				return false;
			}
			
			if ($isnew) {
				// do something
				$doc = JFactory::getDocument();
				$doc->addCustomTag('<script id=\'pap_x2s6df8d\' src=\'" + (("https:" == document.location.protocol) ? "https://" : "http://") + "partnerji.afforma.si/scripts/trackjs.js\' type=\'text/javascript\'></script>');
				$script = 'PostAffTracker.setAccountId(\'5990ce3d\')'
        					. 'var sale = PostAffTracker.createAction(\'CMRegistracija\');';
				$doc->addScriptDeclaration($script);
			}

			else {
				// do nothing
			}
		}	
	
}
