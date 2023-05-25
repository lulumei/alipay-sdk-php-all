<?php
/**
 * PaymentVoucherDisplayInfo
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
 * PaymentVoucherDisplayInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentVoucherDisplayInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentVoucherDisplayInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brandName' => 'string',
        'customerServiceMobile' => 'string',
        'voucherDescription' => 'string',
        'voucherDetailImages' => 'string[]',
        'voucherImage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brandName' => null,
        'customerServiceMobile' => null,
        'voucherDescription' => null,
        'voucherDetailImages' => null,
        'voucherImage' => null
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
        'brandName' => 'brand_name',
        'customerServiceMobile' => 'customer_service_mobile',
        'voucherDescription' => 'voucher_description',
        'voucherDetailImages' => 'voucher_detail_images',
        'voucherImage' => 'voucher_image'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandName' => 'setBrandName',
        'customerServiceMobile' => 'setCustomerServiceMobile',
        'voucherDescription' => 'setVoucherDescription',
        'voucherDetailImages' => 'setVoucherDetailImages',
        'voucherImage' => 'setVoucherImage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandName' => 'getBrandName',
        'customerServiceMobile' => 'getCustomerServiceMobile',
        'voucherDescription' => 'getVoucherDescription',
        'voucherDetailImages' => 'getVoucherDetailImages',
        'voucherImage' => 'getVoucherImage'
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
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['customerServiceMobile'] = $data['customerServiceMobile'] ?? null;
        $this->container['voucherDescription'] = $data['voucherDescription'] ?? null;
        $this->container['voucherDetailImages'] = $data['voucherDetailImages'] ?? null;
        $this->container['voucherImage'] = $data['voucherImage'] ?? null;
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
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 商户品牌名称。 如果不设置品牌名称，则默认使用支付宝商家系统中维护的商家别名。 如果没有维护商家别名，则使用默认名称： 商家优惠。 用户领取优惠券后，品牌名称会对用户进行展示
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets customerServiceMobile
     *
     * @return string|null
     */
    public function getCustomerServiceMobile()
    {
        return $this->container['customerServiceMobile'];
    }

    /**
     * Sets customerServiceMobile
     *
     * @param string|null $customerServiceMobile 商家客服电话，会展示在支付宝卡包券详情页。
     *
     * @return self
     */
    public function setCustomerServiceMobile($customerServiceMobile)
    {
        $this->container['customerServiceMobile'] = $customerServiceMobile;

        return $this;
    }

    /**
     * Gets voucherDescription
     *
     * @return string|null
     */
    public function getVoucherDescription()
    {
        return $this->container['voucherDescription'];
    }

    /**
     * Sets voucherDescription
     *
     * @param string|null $voucherDescription 用于说明详细的活动规则，会展示在支付宝卡包券详情页。
     *
     * @return self
     */
    public function setVoucherDescription($voucherDescription)
    {
        $this->container['voucherDescription'] = $voucherDescription;

        return $this;
    }

    /**
     * Gets voucherDetailImages
     *
     * @return string[]|null
     */
    public function getVoucherDetailImages()
    {
        return $this->container['voucherDetailImages'];
    }

    /**
     * Sets voucherDetailImages
     *
     * @param string[]|null $voucherDetailImages 券详细图列表，会展示在用户支付宝卡包券详情页 需要通过 alipay.marketing.material.image.upload接口上传图片，指定file_key为PROMO_VOUCHER_DETAIL_IMAGE ,接口返回的resource_id即为该参数的值 上传图片尺寸600*600，支持格式：png、jpg、jpeg、bmp，大小不超过2MB 限制 1.voucher_image填入，该值才能填入； 2.最多3张；
     *
     * @return self
     */
    public function setVoucherDetailImages($voucherDetailImages)
    {
        $this->container['voucherDetailImages'] = $voucherDetailImages;

        return $this;
    }

    /**
     * Gets voucherImage
     *
     * @return string|null
     */
    public function getVoucherImage()
    {
        return $this->container['voucherImage'];
    }

    /**
     * Sets voucherImage
     *
     * @param string|null $voucherImage 券详情页封面图，会展示在用户支付宝卡包券详情页 需要通过 alipay.marketing.material.image.upload接口上传图片，指定file_key为PROMO_VOUCHER_IMAGE，接口返回的resource_id即为该参数的值 限制: 该字段在兑换券场景下必传 上传图片尺寸670*335，支持格式：png、jpg、jpeg、bmp，大小不超过2MB 限制: 1.指定可核销商品(available_goods)时必传
     *
     * @return self
     */
    public function setVoucherImage($voucherImage)
    {
        $this->container['voucherImage'] = $voucherImage;

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


