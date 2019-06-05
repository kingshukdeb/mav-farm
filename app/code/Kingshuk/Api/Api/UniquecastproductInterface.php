<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Kingshuk\Api\Api;

interface UniquecastproductInterface
{
    /**
     * Return array data of all unique product names.
     *
     * @api
     * @param int $custid.
     * @return array of all product names.
     */
    public function getUniqueProducts($custid);
}