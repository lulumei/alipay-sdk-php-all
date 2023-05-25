<?php
/**
 * OcrTaxiScanInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-03-14
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * OcrTaxiScanInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OcrTaxiScanInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OcrTaxiScanInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'getOffTime' => 'string',
        'getOnTime' => 'string',
        'invoiceCode' => 'string',
        'invoiceDate' => 'string',
        'invoiceNo' => 'string',
        'passenger' => 'string',
        'price' => 'string',
        'travelDist' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'getOffTime' => null,
        'getOnTime' => null,
        'invoiceCode' => null,
        'invoiceDate' => null,
        'invoiceNo' => null,
        'passenger' => null,
        'price' => null,
        'travelDist' => null
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
        'getOffTime' => 'get_off_time',
        'getOnTime' => 'get_on_time',
        'invoiceCode' => 'invoice_code',
        'invoiceDate' => 'invoice_date',
        'invoiceNo' => 'invoice_no',
        'passenger' => 'passenger',
        'price' => 'price',
        'travelDist' => 'travel_dist'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'getOffTime' => 'setGetOffTime',
        'getOnTime' => 'setGetOnTime',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceNo' => 'setInvoiceNo',
        'passenger' => 'setPassenger',
        'price' => 'setPrice',
        'travelDist' => 'setTravelDist'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'getOffTime' => 'getGetOffTime',
        'getOnTime' => 'getGetOnTime',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceNo' => 'getInvoiceNo',
        'passenger' => 'getPassenger',
        'price' => 'getPrice',
        'travelDist' => 'getTravelDist'
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
        $this->container['getOffTime'] = $data['getOffTime'] ?? null;
        $this->container['getOnTime'] = $data['getOnTime'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['passenger'] = $data['passenger'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['travelDist'] = $data['travelDist'] ?? null;
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
     * Gets getOffTime
     *
     * @return string|null
     */
    public function getGetOffTime()
    {
        return $this->container['getOffTime'];
    }

    /**
     * Sets getOffTime
     *
     * @param string|null $getOffTime 下车时间
     *
     * @return self
     */
    public function setGetOffTime($getOffTime)
    {
        $this->container['getOffTime'] = $getOffTime;

        return $this;
    }

    /**
     * Gets getOnTime
     *
     * @return string|null
     */
    public function getGetOnTime()
    {
        return $this->container['getOnTime'];
    }

    /**
     * Sets getOnTime
     *
     * @param string|null $getOnTime 上车时间
     *
     * @return self
     */
    public function setGetOnTime($getOnTime)
    {
        $this->container['getOnTime'] = $getOnTime;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 开票时间
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets passenger
     *
     * @return string|null
     */
    public function getPassenger()
    {
        return $this->container['passenger'];
    }

    /**
     * Sets passenger
     *
     * @param string|null $passenger 乘客人
     *
     * @return self
     */
    public function setPassenger($passenger)
    {
        $this->container['passenger'] = $passenger;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price 金额
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets travelDist
     *
     * @return string|null
     */
    public function getTravelDist()
    {
        return $this->container['travelDist'];
    }

    /**
     * Sets travelDist
     *
     * @param string|null $travelDist 乘车距离
     *
     * @return self
     */
    public function setTravelDist($travelDist)
    {
        $this->container['travelDist'] = $travelDist;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


