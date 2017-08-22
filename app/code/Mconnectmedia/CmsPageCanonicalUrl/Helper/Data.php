<?php
namespace Mconnectmedia\CmsPageCanonicalUrl\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper 
{		
		 
	public function getConfig($configPath) {
		return $this->scopeConfig->getValue(
			$configPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}
		
		
		
}