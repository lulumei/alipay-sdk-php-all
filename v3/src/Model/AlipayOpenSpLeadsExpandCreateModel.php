<?php
/**
 * AlipayOpenSpLeadsExpandCreateModel
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
 * AlipayOpenSpLeadsExpandCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSpLeadsExpandCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSpLeadsExpandCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'cityCode' => 'string',
        'cityName' => 'string',
        'districtCode' => 'string',
        'districtName' => 'string',
        'email' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'mcc' => 'string',
        'merchantPid' => 'string',
        'name' => 'string',
        'outBizNo' => 'string',
        'phone' => 'string',
        'provinceCode' => 'string',
        'provinceName' => 'string',
        'scene' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'cityCode' => null,
        'cityName' => null,
        'districtCode' => null,
        'districtName' => null,
        'email' => null,
        'latitude' => null,
        'longitude' => null,
        'mcc' => null,
        'merchantPid' => null,
        'name' => null,
        'outBizNo' => null,
        'phone' => null,
        'provinceCode' => null,
        'provinceName' => null,
        'scene' => null
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
        'address' => 'address',
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'districtCode' => 'district_code',
        'districtName' => 'district_name',
        'email' => 'email',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'mcc' => 'mcc',
        'merchantPid' => 'merchant_pid',
        'name' => 'name',
        'outBizNo' => 'out_biz_no',
        'phone' => 'phone',
        'provinceCode' => 'province_code',
        'provinceName' => 'province_name',
        'scene' => 'scene'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'cityCode' => 'setCityCode',
        'cityName' => 'setCityName',
        'districtCode' => 'setDistrictCode',
        'districtName' => 'setDistrictName',
        'email' => 'setEmail',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'mcc' => 'setMcc',
        'merchantPid' => 'setMerchantPid',
        'name' => 'setName',
        'outBizNo' => 'setOutBizNo',
        'phone' => 'setPhone',
        'provinceCode' => 'setProvinceCode',
        'provinceName' => 'setProvinceName',
        'scene' => 'setScene'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'cityCode' => 'getCityCode',
        'cityName' => 'getCityName',
        'districtCode' => 'getDistrictCode',
        'districtName' => 'getDistrictName',
        'email' => 'getEmail',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'mcc' => 'getMcc',
        'merchantPid' => 'getMerchantPid',
        'name' => 'getName',
        'outBizNo' => 'getOutBizNo',
        'phone' => 'getPhone',
        'provinceCode' => 'getProvinceCode',
        'provinceName' => 'getProvinceName',
        'scene' => 'getScene'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['cityName'] = $data['cityName'] ?? null;
        $this->container['districtCode'] = $data['districtCode'] ?? null;
        $this->container['districtName'] = $data['districtName'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['mcc'] = $data['mcc'] ?? null;
        $this->container['merchantPid'] = $data['merchantPid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
        $this->container['provinceName'] = $data['provinceName'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 拓展助手商机地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 拓展助手商机地址市code
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets cityName
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['cityName'];
    }

    /**
     * Sets cityName
     *
     * @param string|null $cityName 拓展助手商机地址市名称
     *
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->container['cityName'] = $cityName;

        return $this;
    }

    /**
     * Gets districtCode
     *
     * @return string|null
     */
    public function getDistrictCode()
    {
        return $this->container['districtCode'];
    }

    /**
     * Sets districtCode
     *
     * @param string|null $districtCode 拓展助手商机地址区code
     *
     * @return self
     */
    public function setDistrictCode($districtCode)
    {
        $this->container['districtCode'] = $districtCode;

        return $this;
    }

    /**
     * Gets districtName
     *
     * @return string|null
     */
    public function getDistrictName()
    {
        return $this->container['districtName'];
    }

    /**
     * Sets districtName
     *
     * @param string|null $districtName 拓展助手商机地址区名称
     *
     * @return self
     */
    public function setDistrictName($districtName)
    {
        $this->container['districtName'] = $districtName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 拓展助手商机邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude 拓展助手商机地址纬度
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude 拓展助手商机地址经度
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string|null
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string|null $mcc mcc行业
     *
     * @return self
     */
    public function setMcc($mcc)
    {
        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets merchantPid
     *
     * @return string|null
     */
    public function getMerchantPid()
    {
        return $this->container['merchantPid'];
    }

    /**
     * Sets merchantPid
     *
     * @param string|null $merchantPid 2088账号
     *
     * @return self
     */
    public function setMerchantPid($merchantPid)
    {
        $this->container['merchantPid'] = $merchantPid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 拓展助手商机名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 外部幂等唯一键
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone 拓展助手商机联系电话
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 拓展助手商机地址省code
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

        return $this;
    }

    /**
     * Gets provinceName
     *
     * @return string|null
     */
    public function getProvinceName()
    {
        return $this->container['provinceName'];
    }

    /**
     * Sets provinceName
     *
     * @param string|null $provinceName 拓展助手商机地址省名称
     *
     * @return self
     */
    public function setProvinceName($provinceName)
    {
        $this->container['provinceName'] = $provinceName;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return string|null
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param string|null $scene 拓展助手场景，参数约定
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

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


