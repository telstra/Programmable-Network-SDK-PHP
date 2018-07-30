# tpn\EndpointsApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endpointEndpointuuidGet**](EndpointsApi.md#endpointEndpointuuidGet) | **GET** /eis/1.0.0/endpoint/endpointuuid/{endpointuuid} | Get Endpoint name and status
[**endpointEndpointuuidPut**](EndpointsApi.md#endpointEndpointuuidPut) | **PUT** /eis/1.0.0/endpoint/endpointuuid/{endpointuuid} | Update Endpoint name
[**endpointsAssignTopologyTag**](EndpointsApi.md#endpointsAssignTopologyTag) | **POST** /eis/1.0.0/endpoints/{endpointuuid}/assign_topology_tag | Assign an Endpoint to a Topology
[**endpointsTopologyTagUuid**](EndpointsApi.md#endpointsTopologyTagUuid) | **GET** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid} | List Endpoints for Topology
[**endpointsTopologyTagUuidEndpoint**](EndpointsApi.md#endpointsTopologyTagUuidEndpoint) | **DELETE** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid}/endpoint/{endpointuuid} | Remove Endpoint from a Topology
[**inventoryEndpoint**](EndpointsApi.md#inventoryEndpoint) | **GET** /1.0.0/inventory/endpoint/{endpointuuid} | Get information about the specified endpoint
[**inventoryEndpointsCustomeruuid**](EndpointsApi.md#inventoryEndpointsCustomeruuid) | **GET** /1.0.0/inventory/endpoints/customeruuid/{customeruuid} | Get list of endpoints for a customer
[**inventoryLinksStatsEndpoint**](EndpointsApi.md#inventoryLinksStatsEndpoint) | **GET** /1.0.0/inventory/links-stats/endpoint/{endpointuuid}/{startdate}/{enddate} | Get statistics for endpoint
[**inventoryLinksStatsEndpointstate**](EndpointsApi.md#inventoryLinksStatsEndpointstate) | **GET** /1.0.0/inventory/links-stats/endpointstate/{endpointuuid}/{startdate}/{enddate} | Get state statistics for endpoint
[**inventoryRegularendpoint**](EndpointsApi.md#inventoryRegularendpoint) | **POST** /1.0.0/inventory/regularendpoint | Create Physical (Port) Endpoint
[**inventoryRegularvport**](EndpointsApi.md#inventoryRegularvport) | **POST** /1.0.0/inventory/regularvport | Create VPort for physical endpoint
[**inventoryVnfendpoint**](EndpointsApi.md#inventoryVnfendpoint) | **POST** /1.0.0/inventory/vnfendpoint | Instantiate Virtual Network Function
[**vnfendpointVnfuuid**](EndpointsApi.md#vnfendpointVnfuuid) | **GET** /eis/1.0.0/vnfendpoint/vnfuuid/{vnfuuid} | Get details of a specific VNF


# **endpointEndpointuuidGet**
> \tpn\Model\InlineResponse2004 endpointEndpointuuidGet($endpointuuid)

Get Endpoint name and status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint

try {
    $result = $apiInstance->endpointEndpointuuidGet($endpointuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointEndpointuuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |

### Return type

[**\tpn\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointEndpointuuidPut**
> \tpn\Model\SuccessFragment endpointEndpointuuidPut($endpointuuid, $endpointupdaterequest)

Update Endpoint name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint
$endpointupdaterequest = new \tpn\Model\Endpointupdaterequest(); // \tpn\Model\Endpointupdaterequest | 

try {
    $result = $apiInstance->endpointEndpointuuidPut($endpointuuid, $endpointupdaterequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointEndpointuuidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |
 **endpointupdaterequest** | [**\tpn\Model\Endpointupdaterequest**](../Model/Endpointupdaterequest.md)|  | [optional]

### Return type

[**\tpn\Model\SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsAssignTopologyTag**
> \tpn\Model\SuccessFragment endpointsAssignTopologyTag($endpointuuid, $assigntopotagrequest)

Assign an Endpoint to a Topology

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
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
    echo 'Exception when calling EndpointsApi->endpointsAssignTopologyTag: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new tpn\Api\EndpointsApi(
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
    echo 'Exception when calling EndpointsApi->endpointsTopologyTagUuid: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new tpn\Api\EndpointsApi(
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
    echo 'Exception when calling EndpointsApi->endpointsTopologyTagUuidEndpoint: ', $e->getMessage(), PHP_EOL;
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

# **inventoryEndpoint**
> \tpn\Model\InlineResponse2002 inventoryEndpoint($endpointuuid)

Get information about the specified endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpointuuid = 'endpointuuid_example'; // string | Unique identifier representing a specific endpoint

try {
    $result = $apiInstance->inventoryEndpoint($endpointuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->inventoryEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpointuuid** | **string**| Unique identifier representing a specific endpoint |

### Return type

[**\tpn\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryEndpointsCustomeruuid**
> \tpn\Model\InlineResponse2001 inventoryEndpointsCustomeruuid($customeruuid)

Get list of endpoints for a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customeruuid = 'customeruuid_example'; // string | Unique identifier representing a specific customer

try {
    $result = $apiInstance->inventoryEndpointsCustomeruuid($customeruuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->inventoryEndpointsCustomeruuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customeruuid** | **string**| Unique identifier representing a specific customer |

### Return type

[**\tpn\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new tpn\Api\EndpointsApi(
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
    echo 'Exception when calling EndpointsApi->inventoryLinksStatsEndpoint: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new tpn\Api\EndpointsApi(
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
    echo 'Exception when calling EndpointsApi->inventoryLinksStatsEndpointstate: ', $e->getMessage(), PHP_EOL;
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

# **inventoryRegularendpoint**
> SuccessFragment inventoryRegularendpoint($regendpointrequest)

Create Physical (Port) Endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$regendpointrequest = new \tpn\Model\Regendpointrequest(); // \tpn\Model\Regendpointrequest | 

try {
    $result = $apiInstance->inventoryRegularendpoint($regendpointrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->inventoryRegularendpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regendpointrequest** | [**\tpn\Model\Regendpointrequest**](../Model/Regendpointrequest.md)|  | [optional]

### Return type

[**SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new tpn\Api\EndpointsApi(
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
    echo 'Exception when calling EndpointsApi->inventoryRegularvport: ', $e->getMessage(), PHP_EOL;
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

# **inventoryVnfendpoint**
> SuccessFragment inventoryVnfendpoint($vnfendpointrequest)

Instantiate Virtual Network Function

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfendpointrequest = new \tpn\Model\Vnfendpointrequest(); // \tpn\Model\Vnfendpointrequest | 

try {
    $result = $apiInstance->inventoryVnfendpoint($vnfendpointrequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->inventoryVnfendpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfendpointrequest** | [**\tpn\Model\Vnfendpointrequest**](../Model/Vnfendpointrequest.md)|  | [optional]

### Return type

[**SuccessFragment**](../Model/SuccessFragment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vnfendpointVnfuuid**
> \tpn\Model\InlineResponse2003 vnfendpointVnfuuid($vnfuuid)

Get details of a specific VNF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function

try {
    $result = $apiInstance->vnfendpointVnfuuid($vnfuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->vnfendpointVnfuuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |

### Return type

[**\tpn\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

