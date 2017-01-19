# Spinen\ConnectWise\Clients\Sales\OpportunitiesApi
Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOpportunitiesCountGet**](OpportunitiesApi.md#salesOpportunitiesCountGet) | **GET** /sales/opportunities/count | 
[**salesOpportunitiesGet**](OpportunitiesApi.md#salesOpportunitiesGet) | **GET** /sales/opportunities | 
[**salesOpportunitiesIdConvertToAgreementPost**](OpportunitiesApi.md#salesOpportunitiesIdConvertToAgreementPost) | **POST** /sales/opportunities/{id}/convertToAgreement | 
[**salesOpportunitiesIdConvertToProjectPost**](OpportunitiesApi.md#salesOpportunitiesIdConvertToProjectPost) | **POST** /sales/opportunities/{id}/convertToProject | 
[**salesOpportunitiesIdConvertToSalesOrderPost**](OpportunitiesApi.md#salesOpportunitiesIdConvertToSalesOrderPost) | **POST** /sales/opportunities/{id}/convertToSalesOrder | 
[**salesOpportunitiesIdConvertToServiceTicketPost**](OpportunitiesApi.md#salesOpportunitiesIdConvertToServiceTicketPost) | **POST** /sales/opportunities/{id}/convertToServiceTicket | 
[**salesOpportunitiesIdDelete**](OpportunitiesApi.md#salesOpportunitiesIdDelete) | **DELETE** /sales/opportunities/{id} | 
[**salesOpportunitiesIdGet**](OpportunitiesApi.md#salesOpportunitiesIdGet) | **GET** /sales/opportunities/{id} | 
[**salesOpportunitiesIdPatch**](OpportunitiesApi.md#salesOpportunitiesIdPatch) | **PATCH** /sales/opportunities/{id} | 
[**salesOpportunitiesIdPut**](OpportunitiesApi.md#salesOpportunitiesIdPut) | **PUT** /sales/opportunities/{id} | 
[**salesOpportunitiesPost**](OpportunitiesApi.md#salesOpportunitiesPost) | **POST** /sales/opportunities | 


# **salesOpportunitiesCountGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Count salesOpportunitiesCountGet($conditions, $custom_field_conditions)



Get Opportunities Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$conditions = "conditions_example"; // string | 
$custom_field_conditions = "custom_field_conditions_example"; // string | 

try {
    $result = $api_instance->salesOpportunitiesCountGet($conditions, $custom_field_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **salesOpportunitiesGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Opportunity[] salesOpportunitiesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Opportunities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->salesOpportunitiesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity[]**](../Model/Opportunity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdConvertToAgreementPost**
> \Spinen\ConnectWise\Clients\Sales\Model\Agreement salesOpportunitiesIdConvertToAgreementPost($id, $conversion)



Convert Opportunity To Agreement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 
$conversion = new \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToAgreementConversion(); // \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToAgreementConversion | 

try {
    $result = $api_instance->salesOpportunitiesIdConvertToAgreementPost($id, $conversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdConvertToAgreementPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conversion** | [**\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToAgreementConversion**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToAgreementConversion.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Agreement**](../Model/Agreement.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdConvertToProjectPost**
> \Spinen\ConnectWise\Clients\Sales\Model\Project salesOpportunitiesIdConvertToProjectPost($id, $conversion)



Convert Opportunity To Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 
$conversion = new \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToProjectConversion(); // \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToProjectConversion | 

try {
    $result = $api_instance->salesOpportunitiesIdConvertToProjectPost($id, $conversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdConvertToProjectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conversion** | [**\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToProjectConversion**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToProjectConversion.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Project**](../Model/Project.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdConvertToSalesOrderPost**
> \Spinen\ConnectWise\Clients\Sales\Model\Order salesOpportunitiesIdConvertToSalesOrderPost($id, $conversion)



Convert Opportunity To Sales Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 
$conversion = new \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToSalesOrderConversion(); // \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToSalesOrderConversion | 

try {
    $result = $api_instance->salesOpportunitiesIdConvertToSalesOrderPost($id, $conversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdConvertToSalesOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conversion** | [**\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToSalesOrderConversion**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToSalesOrderConversion.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdConvertToServiceTicketPost**
> \Spinen\ConnectWise\Clients\Sales\Model\Ticket salesOpportunitiesIdConvertToServiceTicketPost($id, $conversion)



Convert Opportunity To Service Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 
$conversion = new \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToServiceTicketConversion(); // \Spinen\ConnectWise\Clients\Sales\Model\OpportunityToServiceTicketConversion | 

try {
    $result = $api_instance->salesOpportunitiesIdConvertToServiceTicketPost($id, $conversion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdConvertToServiceTicketPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conversion** | [**\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToServiceTicketConversion**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\OpportunityToServiceTicketConversion.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Ticket**](../Model/Ticket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdDelete**
> salesOpportunitiesIdDelete($id)



Delete Opportunity By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 

try {
    $api_instance->salesOpportunitiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **salesOpportunitiesIdGet**
> \Spinen\ConnectWise\Clients\Sales\Model\Opportunity salesOpportunitiesIdGet($id)



Get Opportunity By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 

try {
    $result = $api_instance->salesOpportunitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdPatch**
> \Spinen\ConnectWise\Clients\Sales\Model\Opportunity salesOpportunitiesIdPatch($id, $operations)



Update Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] | 

try {
    $result = $api_instance->salesOpportunitiesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIdPut**
> \Spinen\ConnectWise\Clients\Sales\Model\Opportunity salesOpportunitiesIdPut($id, $opportunity)



Replace Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$id = 56; // int | 
$opportunity = new \Spinen\ConnectWise\Clients\Sales\Model\Opportunity(); // \Spinen\ConnectWise\Clients\Sales\Model\Opportunity | 

try {
    $result = $api_instance->salesOpportunitiesIdPut($id, $opportunity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **opportunity** | [**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\Opportunity.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesPost**
> \Spinen\ConnectWise\Clients\Sales\Model\Opportunity salesOpportunitiesPost($opportunity)



Create Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\OpportunitiesApi();
$opportunity = new \Spinen\ConnectWise\Clients\Sales\Model\Opportunity(); // \Spinen\ConnectWise\Clients\Sales\Model\Opportunity | 

try {
    $result = $api_instance->salesOpportunitiesPost($opportunity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->salesOpportunitiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **opportunity** | [**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity**](../Model/\Spinen\ConnectWise\Clients\Sales\Model\Opportunity.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Sales\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
