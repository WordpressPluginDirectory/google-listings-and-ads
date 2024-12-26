<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/shareable_preview_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of the generate shareable preview.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.ShareablePreviewOrError</code>
 */
class ShareablePreviewOrError extends \Google\Protobuf\Internal\Message
{
    /**
     * The asset group of the shareable preview.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.AssetGroupIdentifier asset_group_identifier = 3;</code>
     */
    protected $asset_group_identifier = null;
    protected $generate_shareable_preview_response;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V18\Services\AssetGroupIdentifier $asset_group_identifier
     *           The asset group of the shareable preview.
     *     @type \Google\Ads\GoogleAds\V18\Services\ShareablePreviewResult $shareable_preview_result
     *           The shareable preview result.
     *     @type \Google\Rpc\Status $partial_failure_error
     *           The shareable preview partial failure error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\ShareablePreviewService::initOnce();
        parent::__construct($data);
    }

    /**
     * The asset group of the shareable preview.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.AssetGroupIdentifier asset_group_identifier = 3;</code>
     * @return \Google\Ads\GoogleAds\V18\Services\AssetGroupIdentifier|null
     */
    public function getAssetGroupIdentifier()
    {
        return $this->asset_group_identifier;
    }

    public function hasAssetGroupIdentifier()
    {
        return isset($this->asset_group_identifier);
    }

    public function clearAssetGroupIdentifier()
    {
        unset($this->asset_group_identifier);
    }

    /**
     * The asset group of the shareable preview.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.AssetGroupIdentifier asset_group_identifier = 3;</code>
     * @param \Google\Ads\GoogleAds\V18\Services\AssetGroupIdentifier $var
     * @return $this
     */
    public function setAssetGroupIdentifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Services\AssetGroupIdentifier::class);
        $this->asset_group_identifier = $var;

        return $this;
    }

    /**
     * The shareable preview result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.ShareablePreviewResult shareable_preview_result = 1;</code>
     * @return \Google\Ads\GoogleAds\V18\Services\ShareablePreviewResult|null
     */
    public function getShareablePreviewResult()
    {
        return $this->readOneof(1);
    }

    public function hasShareablePreviewResult()
    {
        return $this->hasOneof(1);
    }

    /**
     * The shareable preview result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.ShareablePreviewResult shareable_preview_result = 1;</code>
     * @param \Google\Ads\GoogleAds\V18\Services\ShareablePreviewResult $var
     * @return $this
     */
    public function setShareablePreviewResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Services\ShareablePreviewResult::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The shareable preview partial failure error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getPartialFailureError()
    {
        return $this->readOneof(2);
    }

    public function hasPartialFailureError()
    {
        return $this->hasOneof(2);
    }

    /**
     * The shareable preview partial failure error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setPartialFailureError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getGenerateShareablePreviewResponse()
    {
        return $this->whichOneof("generate_shareable_preview_response");
    }

}

