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
				$script1 = 'document.write(unescape("%3Cscript id=%27pap_x2s6df8d%27 src=%27" + (("https:" == document.location.protocol) ? "https://" : "http://") + "partnerji.afforma.si/scripts/trackjs.js%27 type=%27text/javascript%27%3E%3C/script%3E")); ';
				$script2 = 'PostAffTracker.setAccountId(\'5990ce3d\')'
        					. 'var sale = PostAffTracker.createAction(\'CMRegistracija\');';
				$doc->addScriptDeclaration($script1);
				$doc->addScriptDeclaration($script2);
			}
			
			else {
				// do nothing
			}
		}	
	
}
