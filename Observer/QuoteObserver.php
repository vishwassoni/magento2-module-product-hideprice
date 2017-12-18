<?php

namespace Vishwas\Hideprice\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Vishwas\Hideprice\Helper\Data as ProductAvailableHelper;
use Magento\Framework\Exception\LocalizedException;

/**
 * Quote Observer
 */
class QuoteObserver implements ObserverInterface
{
    /**
     * ProductAvailable Helper
     *
     * @var \Vishwas\Hideprice\Helper\Data
     */
    protected $_helper; 
	
    /**
     * Initialize Observer
     *
     * @param ProductAvailableHelper $helper
     */
    public function __construct(
		ProductAvailableHelper $helper
    ) {
		$this->_helper = $helper;
    }
	
    /**
     * Handler For Product Salable Event
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
		if (!$this->_helper->isAvailableAddToCart()) {
			throw new LocalizedException(
				__('You can not add products to cart.')
			);		
		}
    }
} 