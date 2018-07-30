# tpn\VnfsApi

All URIs are relative to *https://penapi.pacnetconnect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bmsBackup**](VnfsApi.md#bmsBackup) | **POST** /bms/1.0.0/backup | Create backup of specified VNF
[**bmsBackupDelete**](VnfsApi.md#bmsBackupDelete) | **DELETE** /bms/1.0.0/backup/{backupuuid} | Delete specified backup
[**bmsBackupGet**](VnfsApi.md#bmsBackupGet) | **GET** /bms/1.0.0/backup/{backupuuid} | Get information about the specified backup
[**bmsBackupRestore**](VnfsApi.md#bmsBackupRestore) | **POST** /bms/1.0.0/backup/{backupuuid}/restore | Restore VNF from backup
[**bmsBackupVnf**](VnfsApi.md#bmsBackupVnf) | **GET** /bms/1.0.0/backup/vnf/{vnfuuid} | List backups
[**bmsBackupVnfDelete**](VnfsApi.md#bmsBackupVnfDelete) | **POST** /bms/1.0.0/backup/vnf/{vnfuuid}/delete | Delete multiple backups
[**inventoryVnfVport**](VnfsApi.md#inventoryVnfVport) | **POST** /1.0.0/inventory/vnf/vport | Create VNF VPort
[**inventoryVnfendpoint**](VnfsApi.md#inventoryVnfendpoint) | **POST** /1.0.0/inventory/vnfendpoint | Instantiate Virtual Network Function
[**marketplaceImage**](VnfsApi.md#marketplaceImage) | **GET** /1.0.0/marketplace/image | List images in the Marketplace
[**marketplaceImageAdd**](VnfsApi.md#marketplaceImageAdd) | **POST** /1.0.0/marketplace/image/{imageid}/add_to_my_images/ | Add specified image to \&quot;My Images\&quot;
[**marketplaceImageImageid**](VnfsApi.md#marketplaceImageImageid) | **GET** /1.0.0/marketplace/image/{imageid}/ | Get information about the specified image
[**marketplaceImageMyImages**](VnfsApi.md#marketplaceImageMyImages) | **GET** /1.0.0/marketplace/image/my_images/ | List images in \&quot;My Images\&quot;
[**marketplaceImageRemove**](VnfsApi.md#marketplaceImageRemove) | **POST** /1.0.0/marketplace/image/{imageid}/remove_from_my_images/ | Remove specified image from \&quot;My Images\&quot;
[**vnf**](VnfsApi.md#vnf) | **GET** /vnfds/1.0.0/vnf/{vnfuuid}/ | Get status information about the specified VNF
[**vnfReboot**](VnfsApi.md#vnfReboot) | **POST** /vnfds/1.0.0/vnf/{vnfuuid}/reboot | Reboot the specified VNF
[**vnfResume**](VnfsApi.md#vnfResume) | **POST** /vnfds/1.0.0/vnf/{vnfuuid}/resume | Resume the specified VNF
[**vnfSuspend**](VnfsApi.md#vnfSuspend) | **POST** /vnfds/1.0.0/vnf/{vnfuuid}/suspend | Suspend the specified VNF
[**vnfendpointVnfuuid**](VnfsApi.md#vnfendpointVnfuuid) | **GET** /eis/1.0.0/vnfendpoint/vnfuuid/{vnfuuid} | Get details of a specific VNF


# **bmsBackup**
> \tpn\Model\Backup bmsBackup($backuprequest)

Create backup of specified VNF

'Note: if a second backup creation is attempted while one is already active, an error will be returned indicating that the VNF is invalid. If replace_backup_uuid is provided, this backup is deleted once the new backup is successfully completed'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backuprequest = new \tpn\Model\Backuprequest(); // \tpn\Model\Backuprequest | 

try {
    $result = $apiInstance->bmsBackup($backuprequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->bmsBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backuprequest** | [**\tpn\Model\Backuprequest**](../Model/Backuprequest.md)|  | [optional]

### Return type

[**\tpn\Model\Backup**](../Model/Backup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bmsBackupDelete**
> \tpn\Model\Backup bmsBackupDelete($backupuuid)

Delete specified backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backupuuid = 'backupuuid_example'; // string | Unique identifier representing a specific VNF backup

try {
    $result = $apiInstance->bmsBackupDelete($backupuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->bmsBackupDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backupuuid** | **string**| Unique identifier representing a specific VNF backup |

### Return type

[**\tpn\Model\Backup**](../Model/Backup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bmsBackupGet**
> \tpn\Model\Backup bmsBackupGet($backupuuid)

Get information about the specified backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backupuuid = 'backupuuid_example'; // string | Unique identifier representing a specific VNF backup

try {
    $result = $apiInstance->bmsBackupGet($backupuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->bmsBackupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backupuuid** | **string**| Unique identifier representing a specific VNF backup |

### Return type

[**\tpn\Model\Backup**](../Model/Backup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bmsBackupRestore**
> \tpn\Model\Backup bmsBackupRestore($backupuuid)

Restore VNF from backup

Restore VNF from specified backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backupuuid = 'backupuuid_example'; // string | Unique identifier representing a specific VNF backup

try {
    $result = $apiInstance->bmsBackupRestore($backupuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->bmsBackupRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backupuuid** | **string**| Unique identifier representing a specific VNF backup |

### Return type

[**\tpn\Model\Backup**](../Model/Backup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bmsBackupVnf**
> \tpn\Model\Backup[] bmsBackupVnf($vnfuuid)

List backups

List available backups for the specified VNF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function

try {
    $result = $apiInstance->bmsBackupVnf($vnfuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->bmsBackupVnf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |

### Return type

[**\tpn\Model\Backup[]**](../Model/Backup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bmsBackupVnfDelete**
> \tpn\Model\InlineResponse202 bmsBackupVnfDelete($vnfuuid)

Delete multiple backups

Delete list of backups associated with specified VNF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function

try {
    $result = $apiInstance->bmsBackupVnfDelete($vnfuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->bmsBackupVnfDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |

### Return type

[**\tpn\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
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

$apiInstance = new tpn\Api\VnfsApi(
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
    echo 'Exception when calling VnfsApi->inventoryVnfVport: ', $e->getMessage(), PHP_EOL;
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

# **inventoryVnfendpoint**
> SuccessFragment inventoryVnfendpoint($vnfendpointrequest)

Instantiate Virtual Network Function

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
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
    echo 'Exception when calling VnfsApi->inventoryVnfendpoint: ', $e->getMessage(), PHP_EOL;
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

# **marketplaceImage**
> \tpn\Model\InlineResponse2009 marketplaceImage()

List images in the Marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketplaceImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->marketplaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplaceImageAdd**
> \tpn\Model\InlineResponse20010 marketplaceImageAdd($imageid, $unknown_base_type)

Add specified image to \"My Images\"

Note that trailing / is required, body must be {}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$imageid = 56; // int | Identifier representing a specific VNF image
$unknown_base_type = new \tpn\Model\UNKNOWN_BASE_TYPE(); // \tpn\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->marketplaceImageAdd($imageid, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->marketplaceImageAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imageid** | **int**| Identifier representing a specific VNF image |
 **unknown_base_type** | [**\tpn\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\tpn\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplaceImageImageid**
> \tpn\Model\Image marketplaceImageImageid($imageid)

Get information about the specified image

Note that trailing / is required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$imageid = 56; // int | Identifier representing a specific VNF image

try {
    $result = $apiInstance->marketplaceImageImageid($imageid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->marketplaceImageImageid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imageid** | **int**| Identifier representing a specific VNF image |

### Return type

[**\tpn\Model\Image**](../Model/Image.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplaceImageMyImages**
> \tpn\Model\InlineResponse2009 marketplaceImageMyImages()

List images in \"My Images\"

Note that trailing / is required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketplaceImageMyImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->marketplaceImageMyImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\tpn\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketplaceImageRemove**
> \tpn\Model\InlineResponse20010 marketplaceImageRemove($imageid, $unknown_base_type)

Remove specified image from \"My Images\"

Note that trailing / is required, body must be {}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$imageid = 56; // int | Identifier representing a specific VNF image
$unknown_base_type = new \tpn\Model\UNKNOWN_BASE_TYPE(); // \tpn\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->marketplaceImageRemove($imageid, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->marketplaceImageRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imageid** | **int**| Identifier representing a specific VNF image |
 **unknown_base_type** | [**\tpn\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\tpn\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vnf**
> \tpn\Model\InlineResponse20011 vnf($vnfuuid)

Get status information about the specified VNF

'Possible return values:   ACTIVE,   BUILD,   SHUTOFF,   VERIFY_RESIZE,   PAUSED,   SUSPENDED,   RESCUE,   ERROR,   DELETED,   SOFT_DELETED,   SHELVED,   SHELVED_OFFLOADED'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function

try {
    $result = $apiInstance->vnf($vnfuuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->vnf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |

### Return type

[**\tpn\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vnfReboot**
> vnfReboot($vnfuuid, $rebootrequest)

Reboot the specified VNF

reboot_type is 'warm' or 'cold'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function
$rebootrequest = new \tpn\Model\Rebootrequest(); // \tpn\Model\Rebootrequest | 

try {
    $apiInstance->vnfReboot($vnfuuid, $rebootrequest);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->vnfReboot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |
 **rebootrequest** | [**\tpn\Model\Rebootrequest**](../Model/Rebootrequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vnfResume**
> vnfResume($vnfuuid)

Resume the specified VNF

Note that body must be {}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function

try {
    $apiInstance->vnfResume($vnfuuid);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->vnfResume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vnfSuspend**
> vnfSuspend($vnfuuid)

Suspend the specified VNF

Note that body must be {}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2
$config = tpn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new tpn\Api\VnfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vnfuuid = 'vnfuuid_example'; // string | Unique identifier representing a specific virtual network function

try {
    $apiInstance->vnfSuspend($vnfuuid);
} catch (Exception $e) {
    echo 'Exception when calling VnfsApi->vnfSuspend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vnfuuid** | **string**| Unique identifier representing a specific virtual network function |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

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

$apiInstance = new tpn\Api\VnfsApi(
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
    echo 'Exception when calling VnfsApi->vnfendpointVnfuuid: ', $e->getMessage(), PHP_EOL;
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

