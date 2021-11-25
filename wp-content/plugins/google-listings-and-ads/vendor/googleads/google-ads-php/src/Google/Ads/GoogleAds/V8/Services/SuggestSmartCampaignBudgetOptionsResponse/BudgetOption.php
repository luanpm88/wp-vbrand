<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/smart_campaign_suggest_service.proto

namespace Google\Ads\GoogleAds\V8\Services\SuggestSmartCampaignBudgetOptionsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Smart Campaign budget option.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.SuggestSmartCampaignBudgetOptionsResponse.BudgetOption</code>
 */
class BudgetOption extends \Google\Protobuf\Internal\Message
{
    /**
     * The amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>int64 daily_amount_micros = 1;</code>
     */
    protected $daily_amount_micros = 0;
    /**
     * Metrics pertaining to the suggested budget, could be empty if there is
     * not enough information to derive the estimates.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.services.SuggestSmartCampaignBudgetOptionsResponse.Metrics metrics = 2;</code>
     */
    protected $metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $daily_amount_micros
     *           The amount of the budget, in the local currency for the account.
     *           Amount is specified in micros, where one million is equivalent to one
     *           currency unit.
     *     @type \Google\Ads\GoogleAds\V8\Services\SuggestSmartCampaignBudgetOptionsResponse\Metrics $metrics
     *           Metrics pertaining to the suggested budget, could be empty if there is
     *           not enough information to derive the estimates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\SmartCampaignSuggestService::initOnce();
        parent::__construct($data);
    }

    /**
     * The amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>int64 daily_amount_micros = 1;</code>
     * @return int|string
     */
    public function getDailyAmountMicros()
    {
        return $this->daily_amount_micros;
    }

    /**
     * The amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>int64 daily_amount_micros = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDailyAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->daily_amount_micros = $var;

        return $this;
    }

    /**
     * Metrics pertaining to the suggested budget, could be empty if there is
     * not enough information to derive the estimates.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.services.SuggestSmartCampaignBudgetOptionsResponse.Metrics metrics = 2;</code>
     * @return \Google\Ads\GoogleAds\V8\Services\SuggestSmartCampaignBudgetOptionsResponse\Metrics|null
     */
    public function getMetrics()
    {
        return isset($this->metrics) ? $this->metrics : null;
    }

    public function hasMetrics()
    {
        return isset($this->metrics);
    }

    public function clearMetrics()
    {
        unset($this->metrics);
    }

    /**
     * Metrics pertaining to the suggested budget, could be empty if there is
     * not enough information to derive the estimates.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.services.SuggestSmartCampaignBudgetOptionsResponse.Metrics metrics = 2;</code>
     * @param \Google\Ads\GoogleAds\V8\Services\SuggestSmartCampaignBudgetOptionsResponse\Metrics $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Services\SuggestSmartCampaignBudgetOptionsResponse\Metrics::class);
        $this->metrics = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BudgetOption::class, \Google\Ads\GoogleAds\V8\Services\SuggestSmartCampaignBudgetOptionsResponse_BudgetOption::class);

