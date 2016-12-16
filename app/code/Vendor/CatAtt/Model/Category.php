<?php

namespace Vendor\CatAtt\Model;

class Category extends \Magento\Catalog\Model\Category
{
    public function getCatBg()
    {            
        return $this->getCustomAttribute('cat_bgimg');            
    }
}
