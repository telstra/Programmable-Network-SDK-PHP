# tpn\UsersApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountUser**](UsersApi.md#accountUser) | **GET** /1.0.0/account/{customeruuid}/user | List users


# **accountUser**
> \tpn\Model\User[] accountUser($customeruuid)

List users

List all users associated with the specified customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customeruuid = 'customeruuid_example'; // string | Unique identifier representing a specific customer

try {
    $result = $apiInstance->accountUser($customeruuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->accountUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customeruuid** | **string**| Unique identifier representing a specific customer |

### Return type

[**\tpn\Model\User[]**](../Model/User.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

