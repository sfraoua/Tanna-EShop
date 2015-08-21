<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ORM\Query\Expr\Base;
use Tanna\ProductBundle\Model\Product as BaseProduct;


/**
 * @MongoDB\Document
 */
class Product extends BaseProduct implements \Serializable
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

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
       return array(
           'id'=>$this->id,
           'name'=>$this->name
       );
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized)
    {
        $this->name = $serialized->name;
    }
}
