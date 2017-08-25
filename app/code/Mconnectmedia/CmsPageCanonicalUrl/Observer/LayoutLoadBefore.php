<?php
namespace Mconnectmedia\CmsPageCanonicalUrl\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

class LayoutLoadBefore implements ObserverInterface
{	
	public function __construct(
		\Magento\Framework\View\Page\Config $page,
		\Magento\Framework\UrlInterface $urlInterface,
		\Mconnectmedia\CmsPageCanonicalUrl\Helper\Data $helper,
		\Psr\Log\LoggerInterface $logger
	)
	{

		$this->page          = $page;
		$this->urlInterface = $urlInterface;
		$this->helper = $helper;
		$this->logger        = $logger;
	}
    
	public function execute(\Magento\Framework\Event\Observer $observer)
    { 
		$active=$this->helper->getConfig('mconnectmedia_cpcu/general/active');
		if($active){		
			$action = $observer->getEvent()->getFullActionName();		
			
			if ($action == 'cms_page_view' || $action == 'cms_index_index') {	

				$canonicalUrl= $this->urlInterface->getCurrentUrl();
				$trailing_slash=$this->helper->getConfig('mconnectmedia_cpcu/general/trailing_slash');
					if($trailing_slash){
						$canonicalUrl=rtrim($canonicalUrl,'/');	
					}				
					
				$this->page->addRemotePageAsset(
					$canonicalUrl,
					'canonical',
					['attributes' => ['rel' => 'canonical']]
				);			
			}	
			
			return $this;
		}
    }   
   
}
