# tpn\ContractsApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryLinksContract**](ContractsApi.md#inventoryLinksContract) | **POST** /1.0.0/inventory/links/{linkid}/contract | Create new Contract on specified link
[**inventoryLinksContractGet**](ContractsApi.md#inventoryLinksContractGet) | **GET** /1.0.0/inventory/links/{linkid}/contract/{contractid} | Get active Contract by ContractID
[**inventoryLinksContractPut**](ContractsApi.md#inventoryLinksContractPut) | **PUT** /1.0.0/inventory/links/{linkid}/contract/{contractid} | Update active Contract by ContractID


# **inventoryLinksContract**
> SuccessFragment inventoryLinksContract($linkid, $createcontractrequest)

Create new Contract on specified link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkid = 'linkid_example'; // string | Unique identifier representing a specific link
$createcontractrequest = new \tpn\Model\Createcontractrequest(); // \tpn\Model\Createcontractrequest | 

try {
    $result = $apiInstance->inventoryLinksContract($linkid, $createcontractrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->inventoryLinksContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkid** | **string**| Unique identifier representing a specific link |
 **createcontractrequest** | [**\tpn\Model\Createcontractrequest**](../Model/Createcontractrequest.md)|  | [optional]

### Return type

[**SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinksContractGet**
> \tpn\Model\InlineResponse2006 inventoryLinksContractGet($linkid, $contractid)

Get active Contract by ContractID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkid = 'linkid_example'; // string | Unique identifier representing a specific link
$contractid = 'contractid_example'; // string | Unique identifier representing a specific contract

try {
    $result = $apiInstance->inventoryLinksContractGet($linkid, $contractid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->inventoryLinksContractGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkid** | **string**| Unique identifier representing a specific link |
 **contractid** | **string**| Unique identifier representing a specific contract |

### Return type

[**\tpn\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLinksContractPut**
> SuccessFragment inventoryLinksContractPut($linkid, $contractid, $body)

Update active Contract by ContractID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkid = 'linkid_example'; // string | Unique identifier representing a specific link
$contractid = 'contractid_example'; // string | Unique identifier representing a specific contract
$body = new \tpn\Model\Body(); // \tpn\Model\Body | 

try {
    $result = $apiInstance->inventoryLinksContractPut($linkid, $contractid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->inventoryLinksContractPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkid** | **string**| Unique identifier representing a specific link |
 **contractid** | **string**| Unique identifier representing a specific contract |
 **body** | [**\tpn\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

