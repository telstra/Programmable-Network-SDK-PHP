# tpn\TopologiesApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endpointsAssignTopologyTag**](TopologiesApi.md#endpointsAssignTopologyTag) | **POST** /eis/1.0.0/endpoints/{endpointuuid}/assign_topology_tag | Assign an Endpoint to a Topology
[**endpointsTopologyTagUuid**](TopologiesApi.md#endpointsTopologyTagUuid) | **GET** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid} | List Endpoints for Topology
[**endpointsTopologyTagUuidEndpoint**](TopologiesApi.md#endpointsTopologyTagUuidEndpoint) | **DELETE** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid}/endpoint/{endpointuuid} | Remove Endpoint from a Topology
[**topologyTagGet**](TopologiesApi.md#topologyTagGet) | **GET** /ttms/1.0.0/topology_tag | List all topology tags
[**topologyTagObjects**](TopologiesApi.md#topologyTagObjects) | **GET** /ttms/1.0.0/topology_tag/{topotaguuid}/objects/ | List objects for Topology
[**topologyTagPost**](TopologiesApi.md#topologyTagPost) | **POST** /ttms/1.0.0/topology_tag | Create a named topology tag
[**topologyTagUuidDelete**](TopologiesApi.md#topologyTagUuidDelete) | **DELETE** /ttms/1.0.0/topology_tag/{topotaguuid}/ | Delete a topology tag
[**topologyTagUuidGet**](TopologiesApi.md#topologyTagUuidGet) | **GET** /ttms/1.0.0/topology_tag/{topotaguuid}/ | Get information about the specified topology tag
[**topologyTagUuidPut**](TopologiesApi.md#topologyTagUuidPut) | **PUT** /ttms/1.0.0/topology_tag/{topotaguuid}/ | Update a topology tag&#39;s name and/or description


# **endpointsAssignTopologyTag**
> \tpn\Model\SuccessFragment endpointsAssignTopologyTag($endpointuuid, $assigntopotagrequest)

Assign an Endpoint to a Topology

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint
$assigntopotagrequest = new \tpn\Model\Assigntopotagrequest(); // \tpn\Model\Assigntopotagrequest | 

try {
    $result = $apiInstance->endpointsAssignTopologyTag($endpointuuid, $assigntopotagrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->endpointsAssignTopologyTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |
 **assigntopotagrequest** | [**\tpn\Model\Assigntopotagrequest**](../Model/Assigntopotagrequest.md)|  | [optional]

### Return type

[**\tpn\Model\SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsTopologyTagUuid**
> \tpn\Model\InlineResponse20014 endpointsTopologyTagUuid($topotaguuid)

List Endpoints for Topology

List all Endpoints associated with the topology tag.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotaguuid = 'topotaguuid_example'; // string | Unique identifier representing a specific topology tag

try {
    $result = $apiInstance->endpointsTopologyTagUuid($topotaguuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->endpointsTopologyTagUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotaguuid** | **string**| Unique identifier representing a specific topology tag |

### Return type

[**\tpn\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsTopologyTagUuidEndpoint**
> endpointsTopologyTagUuidEndpoint($topotaguuid, $endpointuuid)

Remove Endpoint from a Topology

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotaguuid = 'topotaguuid_example'; // string | Unique identifier representing a specific topology tag
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint

try {
    $apiInstance->endpointsTopologyTagUuidEndpoint($topotaguuid, $endpointuuid);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->endpointsTopologyTagUuidEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotaguuid** | **string**| Unique identifier representing a specific topology tag |
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topologyTagGet**
> \tpn\Model\Topology[] topologyTagGet()

List all topology tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->topologyTagGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->topologyTagGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\Topology[]**](../Model/Topology.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topologyTagObjects**
> \tpn\Model\InlineResponse20013 topologyTagObjects($topotaguuid)

List objects for Topology

List all objects (Endpoints, Links, VPorts, etc.) associated with the topology tag.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotaguuid = 'topotaguuid_example'; // string | Unique identifier representing a specific topology tag

try {
    $result = $apiInstance->topologyTagObjects($topotaguuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->topologyTagObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotaguuid** | **string**| Unique identifier representing a specific topology tag |

### Return type

[**\tpn\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topologyTagPost**
> \tpn\Model\Topology topologyTagPost($topotagcreaterequest)

Create a named topology tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotagcreaterequest = new \tpn\Model\Topotagcreaterequest(); // \tpn\Model\Topotagcreaterequest | 

try {
    $result = $apiInstance->topologyTagPost($topotagcreaterequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->topologyTagPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotagcreaterequest** | [**\tpn\Model\Topotagcreaterequest**](../Model/Topotagcreaterequest.md)|  | [optional]

### Return type

[**\tpn\Model\Topology**](../Model/Topology.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topologyTagUuidDelete**
> topologyTagUuidDelete($topotaguuid)

Delete a topology tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotaguuid = 'topotaguuid_example'; // string | Unique identifier representing a specific topology tag

try {
    $apiInstance->topologyTagUuidDelete($topotaguuid);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->topologyTagUuidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotaguuid** | **string**| Unique identifier representing a specific topology tag |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topologyTagUuidGet**
> \tpn\Model\Topology topologyTagUuidGet($topotaguuid)

Get information about the specified topology tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotaguuid = 'topotaguuid_example'; // string | Unique identifier representing a specific topology tag

try {
    $result = $apiInstance->topologyTagUuidGet($topotaguuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->topologyTagUuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotaguuid** | **string**| Unique identifier representing a specific topology tag |

### Return type

[**\tpn\Model\Topology**](../Model/Topology.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topologyTagUuidPut**
> \tpn\Model\Topology topologyTagUuidPut($topotaguuid, $topotagupdateresponse)

Update a topology tag's name and/or description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\TopologiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topotaguuid = 'topotaguuid_example'; // string | Unique identifier representing a specific topology tag
$topotagupdateresponse = new \tpn\Model\Topotagupdateresponse(); // \tpn\Model\Topotagupdateresponse | 

try {
    $result = $apiInstance->topologyTagUuidPut($topotaguuid, $topotagupdateresponse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologiesApi->topologyTagUuidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topotaguuid** | **string**| Unique identifier representing a specific topology tag |
 **topotagupdateresponse** | [**\tpn\Model\Topotagupdateresponse**](../Model/Topotagupdateresponse.md)|  | [optional]

### Return type

[**\tpn\Model\Topology**](../Model/Topology.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

