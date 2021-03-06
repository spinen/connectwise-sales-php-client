# Spinen\ConnectWise\Clients\Sales\OrdersApi
Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrdersCountGet**](OrdersApi.md#salesOrdersCountGet) | **GET** /sales/orders/count | 
[**salesOrdersGet**](OrdersApi.md#salesOrdersGet) | **GET** /sales/orders | 
[**salesOrdersIdDelete**](OrdersApi.md#salesOrdersIdDelete) | **DELETE** /sales/orders/{id} | 
[**salesOrdersIdGet**](OrdersApi.md#salesOrdersIdGet) | **GET** /sales/orders/{id} | 
[**salesOrdersIdPatch**](OrdersApi.md#salesOrdersIdPatch) | **PATCH** /sales/orders/{id} | 
[**salesOrdersIdPut**](OrdersApi.md#salesOrdersIdPut) | **PUT** /sales/orders/{id} | 
[**salesOrdersPost**](OrdersApi.md#salesOrdersPost) | **POST** /sales/orders | 


# **salesOrdersCountGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Count salesOrdersCountGet($conditions, $custom_field_conditions)



Get Sales Orders Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$conditions = "conditions_example"; // string | 
$custom_field_conditions = "custom_field_conditions_example"; // string | 

try {
    $result = $api_instance->salesOrdersCountGet($conditions, $custom_field_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **custom_field_conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrdersGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Order[] salesOrdersGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Sales Orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->salesOrdersGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Sales\Model\Order[]**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrdersIdDelete**
> salesOrdersIdDelete($id)



Delete Sales Order By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$id = 56; // int | 

try {
    $api_instance->salesOrdersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **salesOrdersIdGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Order salesOrdersIdGet($id)



Get Sales Order By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$id = 56; // int | 

try {
    $result = $api_instance->salesOrdersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrdersIdPatch**
> \Spinen\ConnectWise\Clients\Sales\Model\Order salesOrdersIdPatch($id, $operations)



Update Sales Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] | 

try {
    $result = $api_instance->salesOrdersIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrdersIdPut**
> \Spinen\ConnectWise\Clients\Sales\Model\Order salesOrdersIdPut($id, $order)



Replace Sales Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$id = 56; // int | 
$order = new \Spinen\ConnectWise\Clients\Sales\Model\Order(); // \Spinen\ConnectWise\Clients\Sales\Model\Order | 

try {
    $result = $api_instance->salesOrdersIdPut($id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **order** | [**\Spinen\ConnectWise\Clients\Sales\Model\Order**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\Order.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrdersPost**
> \Spinen\ConnectWise\Clients\Sales\Model\Order[] salesOrdersPost($order)



Create Sales Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OrdersApi();
$order = new \Spinen\ConnectWise\Clients\Sales\Model\Order(); // \Spinen\ConnectWise\Clients\Sales\Model\Order | 

try {
    $result = $api_instance->salesOrdersPost($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->salesOrdersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Spinen\ConnectWise\Clients\Sales\Model\Order**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\Order.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Order[]**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

