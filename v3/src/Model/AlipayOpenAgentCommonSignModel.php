<?php
/**
 * AlipayOpenAgentCommonSignModel
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
 * AlipayOpenAgentCommonSignModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentCommonSignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAgentCommonSignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayLifeName' => 'string',
        'appName' => 'string',
        'batchNo' => 'string',
        'businessLicenseNo' => 'string',
        'dateLimitation' => 'string',
        'longTerm' => 'bool',
        'mccCode' => 'string',
        'productCode' => 'string',
        'webSites' => 'string[]',
        'webStatus' => 'string',
        'webTestAccount' => 'string',
        'webTestAccountPassword' => 'string',
        'wechatOfficialAccountName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayLifeName' => null,
        'appName' => null,
        'batchNo' => null,
        'businessLicenseNo' => null,
        'dateLimitation' => null,
        'longTerm' => null,
        'mccCode' => null,
        'productCode' => null,
        'webSites' => null,
        'webStatus' => null,
        'webTestAccount' => null,
        'webTestAccountPassword' => null,
        'wechatOfficialAccountName' => null
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
        'alipayLifeName' => 'alipay_life_name',
        'appName' => 'app_name',
        'batchNo' => 'batch_no',
        'businessLicenseNo' => 'business_license_no',
        'dateLimitation' => 'date_limitation',
        'longTerm' => 'long_term',
        'mccCode' => 'mcc_code',
        'productCode' => 'product_code',
        'webSites' => 'web_sites',
        'webStatus' => 'web_status',
        'webTestAccount' => 'web_test_account',
        'webTestAccountPassword' => 'web_test_account_password',
        'wechatOfficialAccountName' => 'wechat_official_account_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayLifeName' => 'setAlipayLifeName',
        'appName' => 'setAppName',
        'batchNo' => 'setBatchNo',
        'businessLicenseNo' => 'setBusinessLicenseNo',
        'dateLimitation' => 'setDateLimitation',
        'longTerm' => 'setLongTerm',
        'mccCode' => 'setMccCode',
        'productCode' => 'setProductCode',
        'webSites' => 'setWebSites',
        'webStatus' => 'setWebStatus',
        'webTestAccount' => 'setWebTestAccount',
        'webTestAccountPassword' => 'setWebTestAccountPassword',
        'wechatOfficialAccountName' => 'setWechatOfficialAccountName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayLifeName' => 'getAlipayLifeName',
        'appName' => 'getAppName',
        'batchNo' => 'getBatchNo',
        'businessLicenseNo' => 'getBusinessLicenseNo',
        'dateLimitation' => 'getDateLimitation',
        'longTerm' => 'getLongTerm',
        'mccCode' => 'getMccCode',
        'productCode' => 'getProductCode',
        'webSites' => 'getWebSites',
        'webStatus' => 'getWebStatus',
        'webTestAccount' => 'getWebTestAccount',
        'webTestAccountPassword' => 'getWebTestAccountPassword',
        'wechatOfficialAccountName' => 'getWechatOfficialAccountName'
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
        $this->container['alipayLifeName'] = $data['alipayLifeName'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['businessLicenseNo'] = $data['businessLicenseNo'] ?? null;
        $this->container['dateLimitation'] = $data['dateLimitation'] ?? null;
        $this->container['longTerm'] = $data['longTerm'] ?? null;
        $this->container['mccCode'] = $data['mccCode'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['webSites'] = $data['webSites'] ?? null;
        $this->container['webStatus'] = $data['webStatus'] ?? null;
        $this->container['webTestAccount'] = $data['webTestAccount'] ?? null;
        $this->container['webTestAccountPassword'] = $data['webTestAccountPassword'] ?? null;
        $this->container['wechatOfficialAccountName'] = $data['wechatOfficialAccountName'] ?? null;
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
     * Gets alipayLifeName
     *
     * @return string|null
     */
    public function getAlipayLifeName()
    {
        return $this->container['alipayLifeName'];
    }

    /**
     * Sets alipayLifeName
     *
     * @param string|null $alipayLifeName 支付宝生活号(原服务窗)名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
     *
     * @return self
     */
    public function setAlipayLifeName($alipayLifeName)
    {
        $this->container['alipayLifeName'] = $alipayLifeName;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 商户的APP应用名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets batchNo
     *
     * @return string|null
     */
    public function getBatchNo()
    {
        return $this->container['batchNo'];
    }

    /**
     * Sets batchNo
     *
     * @param string|null $batchNo 代商户操作事务编号，通过alipay.open.agent.create接口进行创建。
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets businessLicenseNo
     *
     * @return string|null
     */
    public function getBusinessLicenseNo()
    {
        return $this->container['businessLicenseNo'];
    }

    /**
     * Sets businessLicenseNo
     *
     * @param string|null $businessLicenseNo 营业执照号码
     *
     * @return self
     */
    public function setBusinessLicenseNo($businessLicenseNo)
    {
        $this->container['businessLicenseNo'] = $businessLicenseNo;

        return $this;
    }

    /**
     * Gets dateLimitation
     *
     * @return string|null
     */
    public function getDateLimitation()
    {
        return $this->container['dateLimitation'];
    }

    /**
     * Sets dateLimitation
     *
     * @param string|null $dateLimitation 营业期限
     *
     * @return self
     */
    public function setDateLimitation($dateLimitation)
    {
        $this->container['dateLimitation'] = $dateLimitation;

        return $this;
    }

    /**
     * Gets longTerm
     *
     * @return bool|null
     */
    public function getLongTerm()
    {
        return $this->container['longTerm'];
    }

    /**
     * Sets longTerm
     *
     * @param bool|null $longTerm 营业期限是否长期有效
     *
     * @return self
     */
    public function setLongTerm($longTerm)
    {
        $this->container['longTerm'] = $longTerm;

        return $this;
    }

    /**
     * Gets mccCode
     *
     * @return string|null
     */
    public function getMccCode()
    {
        return $this->container['mccCode'];
    }

    /**
     * Sets mccCode
     *
     * @param string|null $mccCode <a href=\"https://opendocs.alipay.com/common/02khjv\">商家经营类目</a> 中的“经营类目编码”
     *
     * @return self
     */
    public function setMccCode($mccCode)
    {
        $this->container['mccCode'] = $mccCode;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode isv要代商户签约产品码，产品码是支付宝内部对产品的唯一标识
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets webSites
     *
     * @return string[]|null
     */
    public function getWebSites()
    {
        return $this->container['webSites'];
    }

    /**
     * Sets webSites
     *
     * @param string[]|null $webSites 接入网址信息（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
     *
     * @return self
     */
    public function setWebSites($webSites)
    {
        $this->container['webSites'] = $webSites;

        return $this;
    }

    /**
     * Gets webStatus
     *
     * @return string|null
     */
    public function getWebStatus()
    {
        return $this->container['webStatus'];
    }

    /**
     * Sets webStatus
     *
     * @param string|null $webStatus 网站状态，枚举值为：已上线，未上线
     *
     * @return self
     */
    public function setWebStatus($webStatus)
    {
        $this->container['webStatus'] = $webStatus;

        return $this;
    }

    /**
     * Gets webTestAccount
     *
     * @return string|null
     */
    public function getWebTestAccount()
    {
        return $this->container['webTestAccount'];
    }

    /**
     * Sets webTestAccount
     *
     * @param string|null $webTestAccount 可以登录此网站的测试账户
     *
     * @return self
     */
    public function setWebTestAccount($webTestAccount)
    {
        $this->container['webTestAccount'] = $webTestAccount;

        return $this;
    }

    /**
     * Gets webTestAccountPassword
     *
     * @return string|null
     */
    public function getWebTestAccountPassword()
    {
        return $this->container['webTestAccountPassword'];
    }

    /**
     * Sets webTestAccountPassword
     *
     * @param string|null $webTestAccountPassword 可以登录此网站的账户的密码。对应web_test_account的登录密码
     *
     * @return self
     */
    public function setWebTestAccountPassword($webTestAccountPassword)
    {
        $this->container['webTestAccountPassword'] = $webTestAccountPassword;

        return $this;
    }

    /**
     * Gets wechatOfficialAccountName
     *
     * @return string|null
     */
    public function getWechatOfficialAccountName()
    {
        return $this->container['wechatOfficialAccountName'];
    }

    /**
     * Sets wechatOfficialAccountName
     *
     * @param string|null $wechatOfficialAccountName 微信公众号名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
     *
     * @return self
     */
    public function setWechatOfficialAccountName($wechatOfficialAccountName)
    {
        $this->container['wechatOfficialAccountName'] = $wechatOfficialAccountName;

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


