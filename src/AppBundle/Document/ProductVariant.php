<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ORM\Query\Expr\Base;
use Tanna\ProductBundle\Model\ProductVariant as BaseProduct;


/**
 * @MongoDB\Document
 */
class ProductVariant extends BaseProduct
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
