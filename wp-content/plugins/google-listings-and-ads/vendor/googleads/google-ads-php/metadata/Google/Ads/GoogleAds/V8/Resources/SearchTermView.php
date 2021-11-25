<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/search_term_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class SearchTermView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v8/enums/search_term_targeting_status.protogoogle.ads.googleads.v8.enums"�
SearchTermTargetingStatusEnum"p
SearchTermTargetingStatus
UNSPECIFIED 
UNKNOWN	
ADDED
EXCLUDED
ADDED_EXCLUDED
NONEB�
!com.google.ads.googleads.v8.enumsBSearchTermTargetingStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/resources/search_term_view.proto!google.ads.googleads.v8.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
SearchTermViewF
resource_name (	B/�A�A)
\'googleads.googleapis.com/SearchTermView
search_term (	B�AH �?
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupH�k
status (2V.google.ads.googleads.v8.enums.SearchTermTargetingStatusEnum.SearchTermTargetingStatusB�A:y�Av
\'googleads.googleapis.com/SearchTermViewKcustomers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{query}B
_search_termB
	_ad_groupB�
%com.google.ads.googleads.v8.resourcesBSearchTermViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

