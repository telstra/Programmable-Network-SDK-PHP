# tpn\StatisticsApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryLinksStatsEndpoint**](StatisticsApi.md#inventoryLinksStatsEndpoint) | **GET** /1.0.0/inventory/links-stats/endpoint/{endpointuuid}/{startdate}/{enddate} | Get statistics for endpoint
[**inventoryLinksStatsEndpointstate**](StatisticsApi.md#inventoryLinksStatsEndpointstate) | **GET** /1.0.0/inventory/links-stats/endpointstate/{endpointuuid}/{startdate}/{enddate} | Get state statistics for endpoint
[**inventoryLinksStatsFlow**](StatisticsApi.md#inventoryLinksStatsFlow) | **GET** /1.0.0/inventory/links-stats/flow/{linkid}/{startdate}/{enddate} | Get statistics for flow


# **inventoryLinksStatsEndpoint**
> \tpn\Model\InlineResponse20018[] inventoryLinksStatsEndpoint($endpointuuid, $startdate, $enddate)

Get statistics for endpoint

Get statistics related to the specified endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint
$startdate = 'startdate_example'; // string | Start date for statistics query
$enddate = 'enddate_example'; // string | End date for statistics query

try {
    $result = $apiInstance->inventoryLinksStatsEndpoint($endpointuuid, $startdate, $enddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->inventoryLinksStatsEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |
 **startdate** | **string**| Start date for statistics query |
 **enddate** | **string**| End date for statistics query |

### Return type

[**\tpn\Model\InlineResponse20018[]**](../Model/InlineResponse20018.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinksStatsEndpointstate**
> \tpn\Model\InlineResponse20020[] inventoryLinksStatsEndpointstate($endpointuuid, $startdate, $enddate)

Get state statistics for endpoint

Get statistics related to the state of the specified endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint
$startdate = 'startdate_example'; // string | Start date for statistics query
$enddate = 'enddate_example'; // string | End date for statistics query

try {
    $result = $apiInstance->inventoryLinksStatsEndpointstate($endpointuuid, $startdate, $enddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->inventoryLinksStatsEndpointstate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |
 **startdate** | **string**| Start date for statistics query |
 **enddate** | **string**| End date for statistics query |

### Return type

[**\tpn\Model\InlineResponse20020[]**](../Model/InlineResponse20020.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinksStatsFlow**
> \tpn\Model\InlineResponse20019[] inventoryLinksStatsFlow($linkid, $startdate, $enddate)

Get statistics for flow

Get statistics related to the specified flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkid = 'linkid_example'; // string | Unique identifier representing a specific link
$startdate = 'startdate_example'; // string | Start date for statistics query
$enddate = 'enddate_example'; // string | End date for statistics query

try {
    $result = $apiInstance->inventoryLinksStatsFlow($linkid, $startdate, $enddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->inventoryLinksStatsFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkid** | **string**| Unique identifier representing a specific link |
 **startdate** | **string**| Start date for statistics query |
 **enddate** | **string**| End date for statistics query |

### Return type

[**\tpn\Model\InlineResponse20019[]**](../Model/InlineResponse20019.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

