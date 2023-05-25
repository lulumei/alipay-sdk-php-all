<?php
/**
 * InvoiceItem
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
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'itemName' => 'string',
        'itemNo' => 'string',
        'price' => 'string',
        'quantity' => 'string',
        'rowType' => 'int',
        'specification' => 'string',
        'sumPrice' => 'string',
        'tax' => 'string',
        'taxRate' => 'string',
        'unit' => 'string',
        'zeroRateFlag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'itemName' => null,
        'itemNo' => null,
        'price' => null,
        'quantity' => null,
        'rowType' => null,
        'specification' => null,
        'sumPrice' => null,
        'tax' => null,
        'taxRate' => null,
        'unit' => null,
        'zeroRateFlag' => null
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
        'amount' => 'amount',
        'itemName' => 'item_name',
        'itemNo' => 'item_no',
        'price' => 'price',
        'quantity' => 'quantity',
        'rowType' => 'row_type',
        'specification' => 'specification',
        'sumPrice' => 'sum_price',
        'tax' => 'tax',
        'taxRate' => 'tax_rate',
        'unit' => 'unit',
        'zeroRateFlag' => 'zero_rate_flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'itemName' => 'setItemName',
        'itemNo' => 'setItemNo',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'rowType' => 'setRowType',
        'specification' => 'setSpecification',
        'sumPrice' => 'setSumPrice',
        'tax' => 'setTax',
        'taxRate' => 'setTaxRate',
        'unit' => 'setUnit',
        'zeroRateFlag' => 'setZeroRateFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'itemName' => 'getItemName',
        'itemNo' => 'getItemNo',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'rowType' => 'getRowType',
        'specification' => 'getSpecification',
        'sumPrice' => 'getSumPrice',
        'tax' => 'getTax',
        'taxRate' => 'getTaxRate',
        'unit' => 'getUnit',
        'zeroRateFlag' => 'getZeroRateFlag'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['itemName'] = $data['itemName'] ?? null;
        $this->container['itemNo'] = $data['itemNo'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['rowType'] = $data['rowType'] ?? null;
        $this->container['specification'] = $data['specification'] ?? null;
        $this->container['sumPrice'] = $data['sumPrice'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['taxRate'] = $data['taxRate'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['zeroRateFlag'] = $data['zeroRateFlag'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 含税总金额 (等于sum_price和tax之和)， 单位：元，格式为2位小数，精度2位小数
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets itemName
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName
     *
     * @param string|null $itemName 发票项目名称（或商品名称）
     *
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets itemNo
     *
     * @return string|null
     */
    public function getItemNo()
    {
        return $this->container['itemNo'];
    }

    /**
     * Sets itemNo
     *
     * @param string|null $itemNo 发票项目编号（或商品编号）
     *
     * @return self
     */
    public function setItemNo($itemNo)
    {
        $this->container['itemNo'] = $itemNo;

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
     * @param string|null $price 单价（不含税），格式为2位小数。最大支持6位小数，不足2位小数时需转化为2位小数格式。 折扣行此参数不能传
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string|null $quantity 数量，须大于0，最多6位小数。 折扣行此参数不能传
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets rowType
     *
     * @return int|null
     */
    public function getRowType()
    {
        return $this->container['rowType'];
    }

    /**
     * Sets rowType
     *
     * @param int|null $rowType 发票行性质。0表示正常行，1表示折扣行，2表示被折扣行。 比如充电器单价100元，折扣10元，则明细为2行，充电器行性质为2，折扣行性质为1。如果充电器没有折扣，则值应为0。
     *
     * @return self
     */
    public function setRowType($rowType)
    {
        $this->container['rowType'] = $rowType;

        return $this;
    }

    /**
     * Gets specification
     *
     * @return string|null
     */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
     * Sets specification
     *
     * @param string|null $specification 规格型号
     *
     * @return self
     */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;

        return $this;
    }

    /**
     * Gets sumPrice
     *
     * @return string|null
     */
    public function getSumPrice()
    {
        return $this->container['sumPrice'];
    }

    /**
     * Sets sumPrice
     *
     * @param string|null $sumPrice 不含税总金额，格式为2位小数 单位：元，精度2位小数
     *
     * @return self
     */
    public function setSumPrice($sumPrice)
    {
        $this->container['sumPrice'] = $sumPrice;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string|null $tax 税额， 格式为2位小数
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param string|null $taxRate 税率。格式为2位小数，如：0.00, 0.03, 0.13等等
     *
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit 单位，折扣行不能传
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets zeroRateFlag
     *
     * @return string|null
     */
    public function getZeroRateFlag()
    {
        return $this->container['zeroRateFlag'];
    }

    /**
     * Sets zeroRateFlag
     *
     * @param string|null $zeroRateFlag 0税率标识，只有税率为0的情况才有值，0=出口零税率，1=免税，2=不征收，3=普通零税率
     *
     * @return self
     */
    public function setZeroRateFlag($zeroRateFlag)
    {
        $this->container['zeroRateFlag'] = $zeroRateFlag;

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


