# tpn\LinksApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryLink**](LinksApi.md#inventoryLink) | **POST** /1.0.0/inventory/link | Create Link and initial Contract
[**inventoryLinks**](LinksApi.md#inventoryLinks) | **GET** /1.0.0/inventory/links/{linkid} | Get details of specified link
[**inventoryLinksCustomer**](LinksApi.md#inventoryLinksCustomer) | **GET** /1.0.0/inventory/links/customer/{customeruuid} | Get active Links
[**inventoryLinksHistory**](LinksApi.md#inventoryLinksHistory) | **GET** /1.0.0/inventory/links/history/{linkid} | Get Link history
[**inventoryLinksStatsFlow**](LinksApi.md#inventoryLinksStatsFlow) | **GET** /1.0.0/inventory/links-stats/flow/{linkid}/{startdate}/{enddate} | Get statistics for flow


# **inventoryLink**
> SuccessFragment inventoryLink($createlinkrequest)

Create Link and initial Contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createlinkrequest = new \tpn\Model\Createlinkrequest(); // \tpn\Model\Createlinkrequest | 

try {
    $result = $apiInstance->inventoryLink($createlinkrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->inventoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createlinkrequest** | [**\tpn\Model\Createlinkrequest**](../Model/Createlinkrequest.md)|  | [optional]

### Return type

[**SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinks**
> \tpn\Model\InlineResponse2007 inventoryLinks($linkid)

Get details of specified link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkid = 'linkid_example'; // string | Unique identifier representing a specific link

try {
    $result = $apiInstance->inventoryLinks($linkid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->inventoryLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkid** | **string**| Unique identifier representing a specific link |

### Return type

[**\tpn\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinksCustomer**
> \tpn\Model\Link[] inventoryLinksCustomer($customeruuid)

Get active Links

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customeruuid = 'customeruuid_example'; // string | Unique identifier representing a specific customer

try {
    $result = $apiInstance->inventoryLinksCustomer($customeruuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->inventoryLinksCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customeruuid** | **string**| Unique identifier representing a specific customer |

### Return type

[**\tpn\Model\Link[]**](../Model/Link.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinksHistory**
> \tpn\Model\InlineResponse2005 inventoryLinksHistory($linkid)

Get Link history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkid = 'linkid_example'; // string | Unique identifier representing a specific link

try {
    $result = $apiInstance->inventoryLinksHistory($linkid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->inventoryLinksHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkid** | **string**| Unique identifier representing a specific link |

### Return type

[**\tpn\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

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

$apiInstance = new tpn\Api\LinksApi(
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
    echo 'Exception when calling LinksApi->inventoryLinksStatsFlow: ', $e->getMessage(), PHP_EOL;
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

