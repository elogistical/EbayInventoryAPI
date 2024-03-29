<?php
/**
 * EbayOfferDetailsWithAll
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
 * EbayOfferDetailsWithAll Class Doc Comment
 *
 * @category Class
 * @description This type provides details of an offer, and is used by the response payloads of the getOffer and the getOffers calls.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EbayOfferDetailsWithAll implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EbayOfferDetailsWithAll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_quantity' => 'int',
        'category_id' => 'string',
        'charity' => '\OpenAPI\Client\Model\Charity',
        'format' => 'string',
        'include_catalog_product_details' => 'bool',
        'listing' => '\OpenAPI\Client\Model\ListingDetails',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\OpenAPI\Client\Model\ListingPolicies',
        'lot_size' => 'int',
        'marketplace_id' => 'string',
        'merchant_location_key' => 'string',
        'offer_id' => 'string',
        'pricing_summary' => '\OpenAPI\Client\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'sku' => 'string',
        'status' => 'string',
        'store_category_names' => 'string[]',
        'tax' => '\OpenAPI\Client\Model\Tax'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'available_quantity' => 'int32',
        'category_id' => null,
        'charity' => null,
        'format' => null,
        'include_catalog_product_details' => null,
        'listing' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'lot_size' => 'int32',
        'marketplace_id' => null,
        'merchant_location_key' => null,
        'offer_id' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => 'int32',
        'sku' => null,
        'status' => null,
        'store_category_names' => null,
        'tax' => null
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
        'available_quantity' => 'availableQuantity',
        'category_id' => 'categoryId',
        'charity' => 'charity',
        'format' => 'format',
        'include_catalog_product_details' => 'includeCatalogProductDetails',
        'listing' => 'listing',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'lot_size' => 'lotSize',
        'marketplace_id' => 'marketplaceId',
        'merchant_location_key' => 'merchantLocationKey',
        'offer_id' => 'offerId',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'sku' => 'sku',
        'status' => 'status',
        'store_category_names' => 'storeCategoryNames',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_quantity' => 'setAvailableQuantity',
        'category_id' => 'setCategoryId',
        'charity' => 'setCharity',
        'format' => 'setFormat',
        'include_catalog_product_details' => 'setIncludeCatalogProductDetails',
        'listing' => 'setListing',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'lot_size' => 'setLotSize',
        'marketplace_id' => 'setMarketplaceId',
        'merchant_location_key' => 'setMerchantLocationKey',
        'offer_id' => 'setOfferId',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'sku' => 'setSku',
        'status' => 'setStatus',
        'store_category_names' => 'setStoreCategoryNames',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_quantity' => 'getAvailableQuantity',
        'category_id' => 'getCategoryId',
        'charity' => 'getCharity',
        'format' => 'getFormat',
        'include_catalog_product_details' => 'getIncludeCatalogProductDetails',
        'listing' => 'getListing',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'lot_size' => 'getLotSize',
        'marketplace_id' => 'getMarketplaceId',
        'merchant_location_key' => 'getMerchantLocationKey',
        'offer_id' => 'getOfferId',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'sku' => 'getSku',
        'status' => 'getStatus',
        'store_category_names' => 'getStoreCategoryNames',
        'tax' => 'getTax'
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
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['charity'] = isset($data['charity']) ? $data['charity'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['include_catalog_product_details'] = isset($data['include_catalog_product_details']) ? $data['include_catalog_product_details'] : null;
        $this->container['listing'] = isset($data['listing']) ? $data['listing'] : null;
        $this->container['listing_description'] = isset($data['listing_description']) ? $data['listing_description'] : null;
        $this->container['listing_duration'] = isset($data['listing_duration']) ? $data['listing_duration'] : null;
        $this->container['listing_policies'] = isset($data['listing_policies']) ? $data['listing_policies'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['merchant_location_key'] = isset($data['merchant_location_key']) ? $data['merchant_location_key'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['pricing_summary'] = isset($data['pricing_summary']) ? $data['pricing_summary'] : null;
        $this->container['quantity_limit_per_buyer'] = isset($data['quantity_limit_per_buyer']) ? $data['quantity_limit_per_buyer'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['store_category_names'] = isset($data['store_category_names']) ? $data['store_category_names'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
     * Gets available_quantity
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int|null $available_quantity This integer value indicates the quantity of the inventory item (specified by the sku value) that will be available for purchase by buyers shopping on the eBay site specified in the marketplaceId field. For unpublished offers where the available quantity has yet to be set, the availableQuantity value is set to 0.
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id The unique identifier of the primary eBay category that the inventory item is listed under. This field is always returned for published offers, but is only returned if set for unpublished offers.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets charity
     *
     * @return \OpenAPI\Client\Model\Charity|null
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity
     *
     * @param \OpenAPI\Client\Model\Charity|null $charity charity
     *
     * @return $this
     */
    public function setCharity($charity)
    {
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format This enumerated value indicates the listing format of the offer. Currently, the only supported value for this field is FIXED_PRICE. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/inventory/types/FormatTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets include_catalog_product_details
     *
     * @return bool|null
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['include_catalog_product_details'];
    }

    /**
     * Sets include_catalog_product_details
     *
     * @param bool|null $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of true indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in createOrReplaceInventoryItem. Note: Though the includeCatalogProductDetails parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.
     *
     * @return $this
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing
     *
     * @return \OpenAPI\Client\Model\ListingDetails|null
     */
    public function getListing()
    {
        return $this->container['listing'];
    }

    /**
     * Sets listing
     *
     * @param \OpenAPI\Client\Model\ListingDetails|null $listing listing
     *
     * @return $this
     */
    public function setListing($listing)
    {
        $this->container['listing'] = $listing;

        return $this;
    }

    /**
     * Gets listing_description
     *
     * @return string|null
     */
    public function getListingDescription()
    {
        return $this->container['listing_description'];
    }

    /**
     * Sets listing_description
     *
     * @param string|null $listing_description The description of the eBay listing that is part of the unpublished or published offer. This field is always returned for published offers, but is only returned if set for unpublished offers. Max Length: 500000 (which includes HTML markup/tags)
     *
     * @return $this
     */
    public function setListingDescription($listing_description)
    {
        $this->container['listing_description'] = $listing_description;

        return $this;
    }

    /**
     * Gets listing_duration
     *
     * @return string|null
     */
    public function getListingDuration()
    {
        return $this->container['listing_duration'];
    }

    /**
     * Sets listing_duration
     *
     * @param string|null $listing_duration This field indicates the number of days that the listing will be active. 'GTC' (Good 'til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing. Note: This field is always returned and its value is always GTC since the Inventory API currently only supports fixed-price listings, and the only supported listing duration for fixed-price listings is 'GTC'. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/inventory/types/ListingDurationEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingDuration($listing_duration)
    {
        $this->container['listing_duration'] = $listing_duration;

        return $this;
    }

    /**
     * Gets listing_policies
     *
     * @return \OpenAPI\Client\Model\ListingPolicies|null
     */
    public function getListingPolicies()
    {
        return $this->container['listing_policies'];
    }

    /**
     * Sets listing_policies
     *
     * @param \OpenAPI\Client\Model\ListingPolicies|null $listing_policies listing_policies
     *
     * @return $this
     */
    public function setListingPolicies($listing_policies)
    {
        $this->container['listing_policies'] = $listing_policies;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return int|null
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int|null $lot_size This field is only applicable and returned if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same product. An example would be a set of four identical car tires. The integer value in this field is the number of identical items being sold through the lot listing.
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id This enumeration value is the unique identifier of the eBay site on which the offer is available, or will be made available. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/inventory/types/MarketplaceEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @param string|null $merchant_location_key The unique identifier of the inventory location. This identifier is set up by the merchant when the inventory location is first created with the createInventoryLocation call. Once this value is set for an inventory location, it can not be modified. To get more information about this inventory location, the getInventoryLocation call can be used, passing in this value at the end of the call URI. This field is always returned for published offers, but is only returned if set for unpublished offers. Max length: 36
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string|null $offer_id The unique identifier of the offer. This identifier is used in many offer-related calls, and it is also used in the bulkUpdatePriceQuantity call.
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \OpenAPI\Client\Model\PricingSummary|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \OpenAPI\Client\Model\PricingSummary|null $pricing_summary pricing_summary
     *
     * @return $this
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets quantity_limit_per_buyer
     *
     * @return int|null
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantity_limit_per_buyer'];
    }

    /**
     * Sets quantity_limit_per_buyer
     *
     * @param int|null $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity of an inventory item per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceed the quantity in this field. So, if this field's value is 5, each buyer may purchase a quantity of the inventory item between one and five, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.
     *
     * @return $this
     */
    public function setQuantityLimitPerBuyer($quantity_limit_per_buyer)
    {
        $this->container['quantity_limit_per_buyer'] = $quantity_limit_per_buyer;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku This is the seller-defined SKU value of the product in the offer. Max Length: 50
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The enumeration value in this field specifies the status of the offer - either PUBLISHED or UNPUBLISHED. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/inventory/types/OfferStatusEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets store_category_names
     *
     * @return string[]|null
     */
    public function getStoreCategoryNames()
    {
        return $this->container['store_category_names'];
    }

    /**
     * Sets store_category_names
     *
     * @param string[]|null $store_category_names This container is returned if the seller chose to place the inventory item into one or two eBay store categories that the seller has set up for their eBay store. The string value(s) in this container will be the full path(s) to the eBay store categories, as shown below: &quot;storeCategoryNames&quot;: [  &quot;/Fashion/Men/Shirts&quot;,  &quot;/Fashion/Men/Accessories&quot; ],
     *
     * @return $this
     */
    public function setStoreCategoryNames($store_category_names)
    {
        $this->container['store_category_names'] = $store_category_names;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\Client\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\Client\Model\Tax|null $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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


