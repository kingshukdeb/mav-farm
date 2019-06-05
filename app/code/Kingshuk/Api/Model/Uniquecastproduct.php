<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Kingshuk\Api\Model;
use Kingshuk\Api\Api\UniquecastproductInterface;
use \Magento\Sales\Model\ResourceModel\Order\CollectionFactory;

class Uniquecastproduct implements UniquecastproductInterface
{
	protected $_orderCollectionFactory;
	protected $collection;
	
	public function __construct(
		CollectionFactory $orderCollectionFactory
	) {
		$this->_orderCollectionFactory = $orderCollectionFactory;
	}
	
    public function getUniqueProducts($custid) {
        $collection = $this->_orderCollectionFactory->create()->addFieldToFilter('customer_id', $custid);
		$name = array(); 
		foreach ($collection as $order) {
			$items = $order->getAllItems();
			foreach($items as $item){
				$name[] = $item->getName();
			}
		}
		return array_unique($name);
    }
}