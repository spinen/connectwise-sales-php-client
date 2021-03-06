# Spinen\ConnectWise\Clients\Sales\ActivityTypesApi
Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesActivitiesTypesCountGet**](ActivityTypesApi.md#salesActivitiesTypesCountGet) | **GET** /sales/activities/types/count | 
[**salesActivitiesTypesGet**](ActivityTypesApi.md#salesActivitiesTypesGet) | **GET** /sales/activities/types | 
[**salesActivitiesTypesIdDelete**](ActivityTypesApi.md#salesActivitiesTypesIdDelete) | **DELETE** /sales/activities/types/{id} | 
[**salesActivitiesTypesIdGet**](ActivityTypesApi.md#salesActivitiesTypesIdGet) | **GET** /sales/activities/types/{id} | 
[**salesActivitiesTypesIdPatch**](ActivityTypesApi.md#salesActivitiesTypesIdPatch) | **PATCH** /sales/activities/types/{id} | 
[**salesActivitiesTypesIdPut**](ActivityTypesApi.md#salesActivitiesTypesIdPut) | **PUT** /sales/activities/types/{id} | 
[**salesActivitiesTypesPost**](ActivityTypesApi.md#salesActivitiesTypesPost) | **POST** /sales/activities/types | 


# **salesActivitiesTypesCountGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Count salesActivitiesTypesCountGet($conditions)



Get Activity Types Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->salesActivitiesTypesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesTypesGet**
> \Spinen\ConnectWise\Clients\Sales\Model\ActivityType[] salesActivitiesTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Activity Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->salesActivitiesTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType[]**](../Model/ActivityType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesTypesIdDelete**
> salesActivitiesTypesIdDelete($id)



Delete Activity Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$id = 56; // int | 

try {
    $api_instance->salesActivitiesTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesTypesIdGet**
> \Spinen\ConnectWise\Clients\Sales\Model\ActivityType salesActivitiesTypesIdGet($id)



Get Activity Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$id = 56; // int | 

try {
    $result = $api_instance->salesActivitiesTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType**](../Model/ActivityType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesTypesIdPatch**
> \Spinen\ConnectWise\Clients\Sales\Model\ActivityType salesActivitiesTypesIdPatch($id, $operations)



Update Activity Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] | 

try {
    $result = $api_instance->salesActivitiesTypesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType**](../Model/ActivityType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesTypesIdPut**
> \Spinen\ConnectWise\Clients\Sales\Model\ActivityType salesActivitiesTypesIdPut($id, $activity_type)



Replace Activity Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$id = 56; // int | 
$activity_type = new \Spinen\ConnectWise\Clients\Sales\Model\ActivityType(); // \Spinen\ConnectWise\Clients\Sales\Model\ActivityType | 

try {
    $result = $api_instance->salesActivitiesTypesIdPut($id, $activity_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **activity_type** | [**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\ActivityType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType**](../Model/ActivityType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesTypesPost**
> \Spinen\ConnectWise\Clients\Sales\Model\ActivityType salesActivitiesTypesPost($activity_type)



Create Activity Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivityTypesApi();
$activity_type = new \Spinen\ConnectWise\Clients\Sales\Model\ActivityType(); // \Spinen\ConnectWise\Clients\Sales\Model\ActivityType | 

try {
    $result = $api_instance->salesActivitiesTypesPost($activity_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityTypesApi->salesActivitiesTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_type** | [**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\ActivityType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\ActivityType**](../Model/ActivityType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

