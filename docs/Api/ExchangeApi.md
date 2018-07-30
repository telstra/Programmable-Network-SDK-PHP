# tpn\ExchangeApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountProfileExchange**](ExchangeApi.md#accountProfileExchange) | **GET** /1.0.0/account/profile/exchange | Get the current account&#39;s Exchange profile
[**exchange**](ExchangeApi.md#exchange) | **GET** /1.0.0/exchange | List all Exchange providers, with POPs
[**exchangeExprovuuid**](ExchangeApi.md#exchangeExprovuuid) | **GET** /1.0.0/exchange/{exprovuuid} | Exchange provider details
[**visitcard**](ExchangeApi.md#visitcard) | **GET** /1.0.0/visitcard | Get list of Visit Cards
[**visitcardUuidGet**](ExchangeApi.md#visitcardUuidGet) | **GET** /1.0.0/visitcard/{visitcarduuid} | View details of the specified Visit Card
[**visitcardUuidPut**](ExchangeApi.md#visitcardUuidPut) | **PUT** /1.0.0/visitcard/{visitcarduuid} | Update details of the specified Visit Card


# **accountProfileExchange**
> \tpn\Model\InlineResponse20012 accountProfileExchange()

Get the current account's Exchange profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountProfileExchange();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->accountProfileExchange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exchange**
> \tpn\Model\ExchangeProvider[] exchange()

List all Exchange providers, with POPs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exchange();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->exchange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\ExchangeProvider[]**](../Model/ExchangeProvider.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exchangeExprovuuid**
> \tpn\Model\ExchangeProvider exchangeExprovuuid($exprovuuid)

Exchange provider details

Get information about the specified Exchange provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exprovuuid = 'exprovuuid_example'; // string | Unique identifier representing a specific exchange provider

try {
    $result = $apiInstance->exchangeExprovuuid($exprovuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->exchangeExprovuuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exprovuuid** | **string**| Unique identifier representing a specific exchange provider |

### Return type

[**\tpn\Model\ExchangeProvider**](../Model/ExchangeProvider.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitcard**
> \tpn\Model\Visitcard[] visitcard()

Get list of Visit Cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->visitcard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->visitcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\Visitcard[]**](../Model/Visitcard.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitcardUuidGet**
> \tpn\Model\Visitcard visitcardUuidGet($visitcarduuid)

View details of the specified Visit Card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$visitcarduuid = 'visitcarduuid_example'; // string | Unique identifier representing a specific exchange visit card (provider description)

try {
    $result = $apiInstance->visitcardUuidGet($visitcarduuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->visitcardUuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **visitcarduuid** | **string**| Unique identifier representing a specific exchange visit card (provider description) |

### Return type

[**\tpn\Model\Visitcard**](../Model/Visitcard.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visitcardUuidPut**
> \tpn\Model\Visitcard visitcardUuidPut($visitcarduuid, $unknown_base_type)

Update details of the specified Visit Card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$visitcarduuid = 'visitcarduuid_example'; // string | Unique identifier representing a specific exchange visit card (provider description)
$unknown_base_type = new \tpn\Model\UNKNOWN_BASE_TYPE(); // \tpn\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->visitcardUuidPut($visitcarduuid, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->visitcardUuidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **visitcarduuid** | **string**| Unique identifier representing a specific exchange visit card (provider description) |
 **unknown_base_type** | [**\tpn\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\tpn\Model\Visitcard**](../Model/Visitcard.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

