<?php
/**
 * AlipayOpenMiniInnerversionInfoQueryResponseModel
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
 * AlipayOpenMiniInnerversionInfoQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerversionInfoQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerversionInfoQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appVersion' => 'string',
        'buildSource' => 'string',
        'bundleId' => 'string',
        'createTime' => 'string',
        'description' => 'string',
        'extJson' => 'string',
        'gmtModified' => 'string',
        'grayStartTime' => 'string',
        'grayStrategy' => 'string',
        'miniAppId' => 'string',
        'offlineTime' => 'string',
        'packageUrl' => 'string',
        'pluginRefs' => '\Alipay\OpenAPISDK\Model\MiniAppPluginInfo[]',
        'processTaskId' => 'string',
        'rejectReason' => 'string',
        'rollbackTime' => 'string',
        'scanResult' => 'string',
        'screenShotList' => 'string',
        'shelfTime' => 'string',
        'sourceUrl' => 'string',
        'status' => 'string',
        'templateExtra' => 'string',
        'templateVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appVersion' => null,
        'buildSource' => null,
        'bundleId' => null,
        'createTime' => null,
        'description' => null,
        'extJson' => null,
        'gmtModified' => null,
        'grayStartTime' => null,
        'grayStrategy' => null,
        'miniAppId' => null,
        'offlineTime' => null,
        'packageUrl' => null,
        'pluginRefs' => null,
        'processTaskId' => null,
        'rejectReason' => null,
        'rollbackTime' => null,
        'scanResult' => null,
        'screenShotList' => null,
        'shelfTime' => null,
        'sourceUrl' => null,
        'status' => null,
        'templateExtra' => null,
        'templateVersion' => null
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
        'appVersion' => 'app_version',
        'buildSource' => 'build_source',
        'bundleId' => 'bundle_id',
        'createTime' => 'create_time',
        'description' => 'description',
        'extJson' => 'ext_json',
        'gmtModified' => 'gmt_modified',
        'grayStartTime' => 'gray_start_time',
        'grayStrategy' => 'gray_strategy',
        'miniAppId' => 'mini_app_id',
        'offlineTime' => 'offline_time',
        'packageUrl' => 'package_url',
        'pluginRefs' => 'plugin_refs',
        'processTaskId' => 'process_task_id',
        'rejectReason' => 'reject_reason',
        'rollbackTime' => 'rollback_time',
        'scanResult' => 'scan_result',
        'screenShotList' => 'screen_shot_list',
        'shelfTime' => 'shelf_time',
        'sourceUrl' => 'source_url',
        'status' => 'status',
        'templateExtra' => 'template_extra',
        'templateVersion' => 'template_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appVersion' => 'setAppVersion',
        'buildSource' => 'setBuildSource',
        'bundleId' => 'setBundleId',
        'createTime' => 'setCreateTime',
        'description' => 'setDescription',
        'extJson' => 'setExtJson',
        'gmtModified' => 'setGmtModified',
        'grayStartTime' => 'setGrayStartTime',
        'grayStrategy' => 'setGrayStrategy',
        'miniAppId' => 'setMiniAppId',
        'offlineTime' => 'setOfflineTime',
        'packageUrl' => 'setPackageUrl',
        'pluginRefs' => 'setPluginRefs',
        'processTaskId' => 'setProcessTaskId',
        'rejectReason' => 'setRejectReason',
        'rollbackTime' => 'setRollbackTime',
        'scanResult' => 'setScanResult',
        'screenShotList' => 'setScreenShotList',
        'shelfTime' => 'setShelfTime',
        'sourceUrl' => 'setSourceUrl',
        'status' => 'setStatus',
        'templateExtra' => 'setTemplateExtra',
        'templateVersion' => 'setTemplateVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appVersion' => 'getAppVersion',
        'buildSource' => 'getBuildSource',
        'bundleId' => 'getBundleId',
        'createTime' => 'getCreateTime',
        'description' => 'getDescription',
        'extJson' => 'getExtJson',
        'gmtModified' => 'getGmtModified',
        'grayStartTime' => 'getGrayStartTime',
        'grayStrategy' => 'getGrayStrategy',
        'miniAppId' => 'getMiniAppId',
        'offlineTime' => 'getOfflineTime',
        'packageUrl' => 'getPackageUrl',
        'pluginRefs' => 'getPluginRefs',
        'processTaskId' => 'getProcessTaskId',
        'rejectReason' => 'getRejectReason',
        'rollbackTime' => 'getRollbackTime',
        'scanResult' => 'getScanResult',
        'screenShotList' => 'getScreenShotList',
        'shelfTime' => 'getShelfTime',
        'sourceUrl' => 'getSourceUrl',
        'status' => 'getStatus',
        'templateExtra' => 'getTemplateExtra',
        'templateVersion' => 'getTemplateVersion'
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
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['buildSource'] = $data['buildSource'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['extJson'] = $data['extJson'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['grayStartTime'] = $data['grayStartTime'] ?? null;
        $this->container['grayStrategy'] = $data['grayStrategy'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['offlineTime'] = $data['offlineTime'] ?? null;
        $this->container['packageUrl'] = $data['packageUrl'] ?? null;
        $this->container['pluginRefs'] = $data['pluginRefs'] ?? null;
        $this->container['processTaskId'] = $data['processTaskId'] ?? null;
        $this->container['rejectReason'] = $data['rejectReason'] ?? null;
        $this->container['rollbackTime'] = $data['rollbackTime'] ?? null;
        $this->container['scanResult'] = $data['scanResult'] ?? null;
        $this->container['screenShotList'] = $data['screenShotList'] ?? null;
        $this->container['shelfTime'] = $data['shelfTime'] ?? null;
        $this->container['sourceUrl'] = $data['sourceUrl'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['templateExtra'] = $data['templateExtra'] ?? null;
        $this->container['templateVersion'] = $data['templateVersion'] ?? null;
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
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion 版本号
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets buildSource
     *
     * @return string|null
     */
    public function getBuildSource()
    {
        return $this->container['buildSource'];
    }

    /**
     * Sets buildSource
     *
     * @param string|null $buildSource 版本构建类型
     *
     * @return self
     */
    public function setBuildSource($buildSource)
    {
        $this->container['buildSource'] = $buildSource;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 端信息
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 版本创建时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 版本描述
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extJson
     *
     * @return string|null
     */
    public function getExtJson()
    {
        return $this->container['extJson'];
    }

    /**
     * Sets extJson
     *
     * @param string|null $extJson 实例化模板参数
     *
     * @return self
     */
    public function setExtJson($extJson)
    {
        $this->container['extJson'] = $extJson;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 版本更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets grayStartTime
     *
     * @return string|null
     */
    public function getGrayStartTime()
    {
        return $this->container['grayStartTime'];
    }

    /**
     * Sets grayStartTime
     *
     * @param string|null $grayStartTime 版本灰度时间
     *
     * @return self
     */
    public function setGrayStartTime($grayStartTime)
    {
        $this->container['grayStartTime'] = $grayStartTime;

        return $this;
    }

    /**
     * Gets grayStrategy
     *
     * @return string|null
     */
    public function getGrayStrategy()
    {
        return $this->container['grayStrategy'];
    }

    /**
     * Sets grayStrategy
     *
     * @param string|null $grayStrategy 小程序灰度比例值
     *
     * @return self
     */
    public function setGrayStrategy($grayStrategy)
    {
        $this->container['grayStrategy'] = $grayStrategy;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets offlineTime
     *
     * @return string|null
     */
    public function getOfflineTime()
    {
        return $this->container['offlineTime'];
    }

    /**
     * Sets offlineTime
     *
     * @param string|null $offlineTime 版本下架时间
     *
     * @return self
     */
    public function setOfflineTime($offlineTime)
    {
        $this->container['offlineTime'] = $offlineTime;

        return $this;
    }

    /**
     * Gets packageUrl
     *
     * @return string|null
     */
    public function getPackageUrl()
    {
        return $this->container['packageUrl'];
    }

    /**
     * Sets packageUrl
     *
     * @param string|null $packageUrl 包地址
     *
     * @return self
     */
    public function setPackageUrl($packageUrl)
    {
        $this->container['packageUrl'] = $packageUrl;

        return $this;
    }

    /**
     * Gets pluginRefs
     *
     * @return \Alipay\OpenAPISDK\Model\MiniAppPluginInfo[]|null
     */
    public function getPluginRefs()
    {
        return $this->container['pluginRefs'];
    }

    /**
     * Sets pluginRefs
     *
     * @param \Alipay\OpenAPISDK\Model\MiniAppPluginInfo[]|null $pluginRefs 引用插件信息
     *
     * @return self
     */
    public function setPluginRefs($pluginRefs)
    {
        $this->container['pluginRefs'] = $pluginRefs;

        return $this;
    }

    /**
     * Gets processTaskId
     *
     * @return string|null
     */
    public function getProcessTaskId()
    {
        return $this->container['processTaskId'];
    }

    /**
     * Sets processTaskId
     *
     * @param string|null $processTaskId 流程id
     *
     * @return self
     */
    public function setProcessTaskId($processTaskId)
    {
        $this->container['processTaskId'] = $processTaskId;

        return $this;
    }

    /**
     * Gets rejectReason
     *
     * @return string|null
     */
    public function getRejectReason()
    {
        return $this->container['rejectReason'];
    }

    /**
     * Sets rejectReason
     *
     * @param string|null $rejectReason 审核失败原因
     *
     * @return self
     */
    public function setRejectReason($rejectReason)
    {
        $this->container['rejectReason'] = $rejectReason;

        return $this;
    }

    /**
     * Gets rollbackTime
     *
     * @return string|null
     */
    public function getRollbackTime()
    {
        return $this->container['rollbackTime'];
    }

    /**
     * Sets rollbackTime
     *
     * @param string|null $rollbackTime 版本回滚时间
     *
     * @return self
     */
    public function setRollbackTime($rollbackTime)
    {
        $this->container['rollbackTime'] = $rollbackTime;

        return $this;
    }

    /**
     * Gets scanResult
     *
     * @return string|null
     */
    public function getScanResult()
    {
        return $this->container['scanResult'];
    }

    /**
     * Sets scanResult
     *
     * @param string|null $scanResult 安全扫描结果
     *
     * @return self
     */
    public function setScanResult($scanResult)
    {
        $this->container['scanResult'] = $scanResult;

        return $this;
    }

    /**
     * Gets screenShotList
     *
     * @return string|null
     */
    public function getScreenShotList()
    {
        return $this->container['screenShotList'];
    }

    /**
     * Sets screenShotList
     *
     * @param string|null $screenShotList 小程序版本截图，多个截图以逗号隔开
     *
     * @return self
     */
    public function setScreenShotList($screenShotList)
    {
        $this->container['screenShotList'] = $screenShotList;

        return $this;
    }

    /**
     * Gets shelfTime
     *
     * @return string|null
     */
    public function getShelfTime()
    {
        return $this->container['shelfTime'];
    }

    /**
     * Sets shelfTime
     *
     * @param string|null $shelfTime 版本上架时间
     *
     * @return self
     */
    public function setShelfTime($shelfTime)
    {
        $this->container['shelfTime'] = $shelfTime;

        return $this;
    }

    /**
     * Gets sourceUrl
     *
     * @return string|null
     */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
     * Sets sourceUrl
     *
     * @param string|null $sourceUrl 源码包地址
     *
     * @return self
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;

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
     * @param string|null $status 版本状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets templateExtra
     *
     * @return string|null
     */
    public function getTemplateExtra()
    {
        return $this->container['templateExtra'];
    }

    /**
     * Sets templateExtra
     *
     * @param string|null $templateExtra 模板构建参数
     *
     * @return self
     */
    public function setTemplateExtra($templateExtra)
    {
        $this->container['templateExtra'] = $templateExtra;

        return $this;
    }

    /**
     * Gets templateVersion
     *
     * @return string|null
     */
    public function getTemplateVersion()
    {
        return $this->container['templateVersion'];
    }

    /**
     * Sets templateVersion
     *
     * @param string|null $templateVersion 模板版本号
     *
     * @return self
     */
    public function setTemplateVersion($templateVersion)
    {
        $this->container['templateVersion'] = $templateVersion;

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


