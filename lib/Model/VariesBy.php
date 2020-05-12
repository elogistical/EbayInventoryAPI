<?php
/**
 * VariesBy
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.9.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * VariesBy Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the product aspect(s) where individual items of the group vary, as well as a list of the available variations of those aspects.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VariesBy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VariesBy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aspects_image_varies_by' => 'string[]',
        'specifications' => '\OpenAPI\Client\Model\Specification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'aspects_image_varies_by' => null,
        'specifications' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aspects_image_varies_by' => 'aspectsImageVariesBy',
        'specifications' => 'specifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspects_image_varies_by' => 'setAspectsImageVariesBy',
        'specifications' => 'setSpecifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspects_image_varies_by' => 'getAspectsImageVariesBy',
        'specifications' => 'getSpecifications'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['aspects_image_varies_by'] = isset($data['aspects_image_varies_by']) ? $data['aspects_image_varies_by'] : null;
        $this->container['specifications'] = isset($data['specifications']) ? $data['specifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets aspects_image_varies_by
     *
     * @return string[]|null
     */
    public function getAspectsImageVariesBy()
    {
        return $this->container['aspects_image_varies_by'];
    }

    /**
     * Sets aspects_image_varies_by
     *
     * @param string[]|null $aspects_image_varies_by This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the variations of the inventory item group vary, such as color. If Color is specified in this field, Color must also be one of the specifications.name values, and all available colors must appear in the corresponding specifications.values array. If the aspectsImageVariesBy container is used, links to images of each variation should be specified through the imageUrls container of the inventory item group, or the seller can choose to include those links to images in each inventory item record for the inventory items in the group.
     *
     * @return $this
     */
    public function setAspectsImageVariesBy($aspects_image_varies_by)
    {
        $this->container['aspects_image_varies_by'] = $aspects_image_varies_by;

        return $this;
    }

    /**
     * Gets specifications
     *
     * @return \OpenAPI\Client\Model\Specification[]|null
     */
    public function getSpecifications()
    {
        return $this->container['specifications'];
    }

    /**
     * Sets specifications
     *
     * @param \OpenAPI\Client\Model\Specification[]|null $specifications This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the first offer of the inventory item group is published. If a product aspect is specified in the aspectsImageVariesBy container, this product aspect (along with all variations of that product aspect) must be included in the specifications container. Before offers related to the inventory item group are published, the product aspects and values specified through the specifications container should be in synch with the name-value pairs specified through the product.aspects containers of the inventory items contained in the group. For example, if Color and Size are in this specifications container, each inventory item of the group should also have Color and Size as aspect names in their inventory item records. This container is always returned if one or more offers associated with the inventory item group have been published. For inventory item groups that have yet to have any published offers, this container is only returned if set.
     *
     * @return $this
     */
    public function setSpecifications($specifications)
    {
        $this->container['specifications'] = $specifications;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

