<?php 

/*

Plumrocket Inc.

NOTICE OF LICENSE

This source file is subject to the End-user License Agreement
that is available through the world-wide-web at this URL:
http://wiki.plumrocket.net/wiki/EULA
If you are unable to obtain it through the world-wide-web, please
send an email to support@plumrocket.com so we can send you a copy immediately.

@package	Plumrocket_Base-v1.x.x
@copyright	Copyright (c) 2014 Plumrocket Inc. (http://www.plumrocket.com)
@license	http://wiki.plumrocket.net/wiki/EULA  End-user License Agreement
 
*/ 

class Plumrocket_Base_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function isAdminNotificationEnabled()
	{
		return (($module = Mage::getConfig()->getModuleConfig('Mage_AdminNotification')) 
			&& ($module->is('active', 'true')) 
			&& !Mage::getStoreConfig('advanced/modules_disable_output/Mage_AdminNotification'));
	}
}
	 