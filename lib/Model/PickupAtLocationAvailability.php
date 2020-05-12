<?php
/**
 * PickupAtLocationAvailability
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
 * PickupAtLocationAvailability Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify/indicate the quantity of the inventory item that is available for an In-Store Pickup order at the merchant&#39;s physical store (specified by the merchantLocationKey field).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PickupAtLocationAvailability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupAtLocationAvailability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availability_type' => 'string',
        'fulfillment_time' => '\OpenAPI\Client\Model\TimeDuration',
        'merchant_location_key' => 'string',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'availability_type' => null,
        'fulfillment_time' => null,
        'merchant_location_key' => null,
        'quantity' => 'int32'
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
        'availability_type' => 'availabilityType',
        'fulfillment_time' => 'fulfillmentTime',
        'merchant_location_key' => 'merchantLocationKey',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_type' => 'setAvailabilityType',
        'fulfillment_time' => 'setFulfillmentTime',
        'merchant_location_key' => 'setMerchantLocationKey',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_type' => 'getAvailabilityType',
        'fulfillment_time' => 'getFulfillmentTime',
        'merchant_location_key' => 'getMerchantLocationKey',
        'quantity' => 'getQuantity'
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
        $this->container['availability_type'] = isset($data['availability_type']) ? $data['availability_type'] : null;
        $this->container['fulfillment_time'] = isset($data['fulfillment_time']) ? $data['fulfillment_time'] : null;
        $this->container['merchant_location_key'] = isset($data['merchant_location_key']) ? $data['merchant_location_key'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
     * Gets availability_type
     *
     * @return string|null
     */
    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type
     *
     * @param string|null $availability_type The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the pickupAtLocationAvailability.merchantLocationKey field. This field is required if the pickupAtLocationAvailability container is used, and is always returned with the pickupAtLocationAvailability container. See AvailabilityTypeEnum for more information about how/when you use each enumeration value. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/inventory/types/AvailabilityTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAvailabilityType($availability_type)
    {
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    /**
     * Gets fulfillment_time
     *
     * @return \OpenAPI\Client\Model\TimeDuration|null
     */
    public function getFulfillmentTime()
    {
        return $this->container['fulfillment_time'];
    }

    /**
     * Sets fulfillment_time
     *
     * @param \OpenAPI\Client\Model\TimeDuration|null $fulfillment_time fulfillment_time
     *
     * @return $this
     */
    public function setFulfillmentTime($fulfillment_time)
    {
        $this->container['fulfillment_time'] = $fulfillment_time;

        return $this;
    }

    /**
     * Gets merchant_location_key
     *
     * @return string|null
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key
     *
     * @param string|null $merchant_location_key The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the availabilityType value should be SHIP_TO_STORE. This field is required if the pickupAtLocationAvailability container is used, and is always returned with the pickupAtLocationAvailability container. Max length: 36
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the merchantLocationKey value. The value of quantity should be an integer value greater than 0, unless the inventory item is out of stock. This field is required if the pickupAtLocationAvailability container is used, and is always returned with the pickupAtLocationAvailability container.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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


