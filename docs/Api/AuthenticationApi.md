# tpn\AuthenticationApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateToken**](AuthenticationApi.md#generateToken) | **POST** /1.0.0/auth/generatetoken | Create an authentication token
[**validateToken**](AuthenticationApi.md#validateToken) | **GET** /1.0.0/auth/validatetoken | Validate authentication token


# **generateToken**
> \tpn\Model\InlineResponse20015 generateToken($grant_type, $username, $password)

Create an authentication token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new tpn\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'password'; // string | 
$username = 'username_example'; // string | 
$password = 'password_example'; // string | 

try {
    $result = $apiInstance->generateToken($grant_type, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  | [default to &#39;password&#39;]
 **username** | **string**|  |
 **password** | **string**|  |

### Return type

[**\tpn\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateToken**
> \tpn\Model\InlineResponse20016 validateToken()

Validate authentication token

Validate the authentication token and get information about the user (roles, permissions, etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->validateToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->validateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

