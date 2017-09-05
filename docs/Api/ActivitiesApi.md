# Spinen\ConnectWise\Clients\Sales\ActivitiesApi
Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesActivitiesCountGet**](ActivitiesApi.md#salesActivitiesCountGet) | **GET** /sales/activities/count | 
[**salesActivitiesGet**](ActivitiesApi.md#salesActivitiesGet) | **GET** /sales/activities | 
[**salesActivitiesIdDelete**](ActivitiesApi.md#salesActivitiesIdDelete) | **DELETE** /sales/activities/{id} | 
[**salesActivitiesIdGet**](ActivitiesApi.md#salesActivitiesIdGet) | **GET** /sales/activities/{id} | 
[**salesActivitiesIdPatch**](ActivitiesApi.md#salesActivitiesIdPatch) | **PATCH** /sales/activities/{id} | 
[**salesActivitiesIdPut**](ActivitiesApi.md#salesActivitiesIdPut) | **PUT** /sales/activities/{id} | 
[**salesActivitiesPost**](ActivitiesApi.md#salesActivitiesPost) | **POST** /sales/activities | 


# **salesActivitiesCountGet**
> \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Count salesActivitiesCountGet($conditions, $custom_field_conditions)



Get Activities Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$conditions = "conditions_example"; // string | 
$custom_field_conditions = "custom_field_conditions_example"; // string | 

try {
    $result = $api_instance->salesActivitiesCountGet($conditions, $custom_field_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **custom_field_conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesGet**
> \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity[] salesActivitiesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->salesActivitiesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity[]**](../Model/Activity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesIdDelete**
> salesActivitiesIdDelete($id)



Delete Activity By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$id = 56; // int | 

try {
    $api_instance->salesActivitiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **salesActivitiesIdGet**
> \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity salesActivitiesIdGet($id)



Get Activity By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$id = 56; // int | 

try {
    $result = $api_instance->salesActivitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity**](../Model/Activity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesIdPatch**
> \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity salesActivitiesIdPatch($id, $operations)



Update Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] | 

try {
    $result = $api_instance->salesActivitiesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity**](../Model/Activity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesIdPut**
> \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity salesActivitiesIdPut($id, $activity)



Replace Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$id = 56; // int | 
$activity = new \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity(); // \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity | 

try {
    $result = $api_instance->salesActivitiesIdPut($id, $activity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **activity** | [**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity**](../Model/\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity**](../Model/Activity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesActivitiesPost**
> \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity salesActivitiesPost($activity)



Create Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$activity = new \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity(); // \Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity | 

try {
    $result = $api_instance->salesActivitiesPost($activity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity** | [**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity**](../Model/\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Model\Activity**](../Model/Activity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
