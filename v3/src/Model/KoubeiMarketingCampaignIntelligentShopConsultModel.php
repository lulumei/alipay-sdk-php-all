<?php
/**
 * KoubeiMarketingCampaignIntelligentShopConsultModel
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
 * KoubeiMarketingCampaignIntelligentShopConsultModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class KoubeiMarketingCampaignIntelligentShopConsultModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KoubeiMarketingCampaignIntelligentShopConsultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizScene' => 'string',
        'operatorContext' => '\Alipay\OpenAPISDK\Model\PromoOperatorInfo',
        'outRequestNo' => 'string',
        'pageIndex' => 'string',
        'pageSize' => 'string',
        'partnerId' => 'string',
        'planId' => 'string',
        'promoId' => 'string',
        'templateCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizScene' => null,
        'operatorContext' => null,
        'outRequestNo' => null,
        'pageIndex' => null,
        'pageSize' => null,
        'partnerId' => null,
        'planId' => null,
        'promoId' => null,
        'templateCode' => null
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
        'bizScene' => 'biz_scene',
        'operatorContext' => 'operator_context',
        'outRequestNo' => 'out_request_no',
        'pageIndex' => 'page_index',
        'pageSize' => 'page_size',
        'partnerId' => 'partner_id',
        'planId' => 'plan_id',
        'promoId' => 'promo_id',
        'templateCode' => 'template_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizScene' => 'setBizScene',
        'operatorContext' => 'setOperatorContext',
        'outRequestNo' => 'setOutRequestNo',
        'pageIndex' => 'setPageIndex',
        'pageSize' => 'setPageSize',
        'partnerId' => 'setPartnerId',
        'planId' => 'setPlanId',
        'promoId' => 'setPromoId',
        'templateCode' => 'setTemplateCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizScene' => 'getBizScene',
        'operatorContext' => 'getOperatorContext',
        'outRequestNo' => 'getOutRequestNo',
        'pageIndex' => 'getPageIndex',
        'pageSize' => 'getPageSize',
        'partnerId' => 'getPartnerId',
        'planId' => 'getPlanId',
        'promoId' => 'getPromoId',
        'templateCode' => 'getTemplateCode'
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
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['operatorContext'] = $data['operatorContext'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['pageIndex'] = $data['pageIndex'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['planId'] = $data['planId'] ?? null;
        $this->container['promoId'] = $data['promoId'] ?? null;
        $this->container['templateCode'] = $data['templateCode'] ?? null;
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
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 根据不同场景,过滤不同的门店数据,可参考值:CREATE_NORMAL:正常创建;RENEWAL_OLD:原方案续期;RENEWAL_NEW:新方案续期
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets operatorContext
     *
     * @return \Alipay\OpenAPISDK\Model\PromoOperatorInfo|null
     */
    public function getOperatorContext()
    {
        return $this->container['operatorContext'];
    }

    /**
     * Sets operatorContext
     *
     * @param \Alipay\OpenAPISDK\Model\PromoOperatorInfo|null $operatorContext operatorContext
     *
     * @return self
     */
    public function setOperatorContext($operatorContext)
    {
        $this->container['operatorContext'] = $operatorContext;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 外部业务id，请尽量保持足够的复杂，方便定位数据来源
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets pageIndex
     *
     * @return string|null
     */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
     * Sets pageIndex
     *
     * @param string|null $pageIndex 当前页码，默认：“1”
     *
     * @return self
     */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return string|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param string|null $pageSize 每页项数[1, 500]， 默认500
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 商户和支付宝交互时，用于代表支付宝分配给商户ID
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets planId
     *
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId
     *
     * @param string|null $planId 智能营销方案的方案id（template_code替代该值，无需传递）
     *
     * @return self
     */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets promoId
     *
     * @return string|null
     */
    public function getPromoId()
    {
        return $this->container['promoId'];
    }

    /**
     * Sets promoId
     *
     * @param string|null $promoId 结合biz_scene一起使用,值为RENEWAL_OLD:原方案续期、RENEWAL_NEW:新方案续期,要求必传
     *
     * @return self
     */
    public function setPromoId($promoId)
    {
        $this->container['promoId'] = $promoId;

        return $this;
    }

    /**
     * Gets templateCode
     *
     * @return string|null
     */
    public function getTemplateCode()
    {
        return $this->container['templateCode'];
    }

    /**
     * Sets templateCode
     *
     * @param string|null $templateCode 营销模板的编号，默认GENERAL_EXPERIENCE（不传值）  可选枚举：  GENERAL_EXPERIENCE：全场体验；  GENERAL_NORMAL：全场普通；  GENERAL_20171212：全场2017双12版；  CROWD_EXPERIENCE：千人千券体验；  CROWD_NORMAL：千人千券普通；  CROWD_20171212：千人千券2017双12版；
     *
     * @return self
     */
    public function setTemplateCode($templateCode)
    {
        $this->container['templateCode'] = $templateCode;

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


