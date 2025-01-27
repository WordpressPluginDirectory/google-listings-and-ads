<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/common/extensions.proto

namespace Google\Ads\GoogleAds\V18\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a hotel callout extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.common.HotelCalloutFeedItem</code>
 */
class HotelCalloutFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>optional string text = 3;</code>
     */
    protected $text = null;
    /**
     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>optional string language_code = 4;</code>
     */
    protected $language_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           The callout text.
     *           The length of this string should be between 1 and 25, inclusive.
     *     @type string $language_code
     *           The language of the hotel callout text.
     *           IETF BCP 47 compliant language code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>optional string text = 3;</code>
     * @return string
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>optional string text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>optional string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return isset($this->language_code) ? $this->language_code : '';
    }

    public function hasLanguageCode()
    {
        return isset($this->language_code);
    }

    public function clearLanguageCode()
    {
        unset($this->language_code);
    }

    /**
     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>optional string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

