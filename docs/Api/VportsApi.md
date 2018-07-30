# tpn\VportsApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryRegularvport**](VportsApi.md#inventoryRegularvport) | **POST** /1.0.0/inventory/regularvport | Create VPort for physical endpoint
[**inventoryVnfVport**](VportsApi.md#inventoryVnfVport) | **POST** /1.0.0/inventory/vnf/vport | Create VNF VPort
[**inventoryVport**](VportsApi.md#inventoryVport) | **GET** /1.0.0/inventory/vport/{vportuuid} | Get information about the specified VPort


# **inventoryRegularvport**
> SuccessFragment inventoryRegularvport($regvportrequest)

Create VPort for physical endpoint

Create VPort representing a VLAN on a Physical Ethernet Port

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$regvportrequest = new \tpn\Model\Regvportrequest(); // \tpn\Model\Regvportrequest | 

try {
    $result = $apiInstance->inventoryRegularvport($regvportrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VportsApi->inventoryRegularvport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regvportrequest** | [**\tpn\Model\Regvportrequest**](../Model/Regvportrequest.md)|  | [optional]

### Return type

[**SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryVnfVport**
> \tpn\Model\InlineResponse2008 inventoryVnfVport($vportrequest)

Create VNF VPort

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vportrequest = new \tpn\Model\Vportrequest(); // \tpn\Model\Vportrequest | 

try {
    $result = $apiInstance->inventoryVnfVport($vportrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VportsApi->inventoryVnfVport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vportrequest** | [**\tpn\Model\Vportrequest**](../Model/Vportrequest.md)|  | [optional]

### Return type

[**\tpn\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryVport**
> \tpn\Model\EndpointPort inventoryVport($vportuuid)

Get information about the specified VPort

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vportuuid = 'vportuuid_example'; // string | Unique identifier representing a specific virtual port

try {
    $result = $apiInstance->inventoryVport($vportuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VportsApi->inventoryVport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vportuuid** | **string**| Unique identifier representing a specific virtual port |

### Return type

[**\tpn\Model\EndpointPort**](../Model/EndpointPort.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

