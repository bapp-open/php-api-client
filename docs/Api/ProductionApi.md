# Swagger\Client\ProductionApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productionMachineCreate**](ProductionApi.md#productionMachineCreate) | **POST** /production/machine/ | 
[**productionMachineDelete**](ProductionApi.md#productionMachineDelete) | **DELETE** /production/machine/{id}/ | 
[**productionMachineList**](ProductionApi.md#productionMachineList) | **GET** /production/machine/ | 
[**productionMachinePartialUpdate**](ProductionApi.md#productionMachinePartialUpdate) | **PATCH** /production/machine/{id}/ | 
[**productionMachineRead**](ProductionApi.md#productionMachineRead) | **GET** /production/machine/{id}/ | 
[**productionMachineUpdate**](ProductionApi.md#productionMachineUpdate) | **PUT** /production/machine/{id}/ | 
[**productionMaterialConsumptionCreate**](ProductionApi.md#productionMaterialConsumptionCreate) | **POST** /production/material-consumption/ | 
[**productionMaterialConsumptionDelete**](ProductionApi.md#productionMaterialConsumptionDelete) | **DELETE** /production/material-consumption/{id}/ | 
[**productionMaterialConsumptionList**](ProductionApi.md#productionMaterialConsumptionList) | **GET** /production/material-consumption/ | 
[**productionMaterialConsumptionPdf**](ProductionApi.md#productionMaterialConsumptionPdf) | **POST** /production/material-consumption/{id}/pdf/ | 
[**productionMaterialConsumptionPdfSendToEmail**](ProductionApi.md#productionMaterialConsumptionPdfSendToEmail) | **POST** /production/material-consumption/{id}/send-to-email/ | 
[**productionMaterialConsumptionRead**](ProductionApi.md#productionMaterialConsumptionRead) | **GET** /production/material-consumption/{id}/ | 
[**productionMaterialConsumptionUpdate**](ProductionApi.md#productionMaterialConsumptionUpdate) | **PUT** /production/material-consumption/{id}/ | 
[**productionTimeConsumptionCreate**](ProductionApi.md#productionTimeConsumptionCreate) | **POST** /production/time-consumption/ | 
[**productionTimeConsumptionDelete**](ProductionApi.md#productionTimeConsumptionDelete) | **DELETE** /production/time-consumption/{id}/ | 
[**productionTimeConsumptionList**](ProductionApi.md#productionTimeConsumptionList) | **GET** /production/time-consumption/ | 
[**productionTimeConsumptionPartialUpdate**](ProductionApi.md#productionTimeConsumptionPartialUpdate) | **PATCH** /production/time-consumption/{id}/ | 
[**productionTimeConsumptionRead**](ProductionApi.md#productionTimeConsumptionRead) | **GET** /production/time-consumption/{id}/ | 
[**productionTimeConsumptionUpdate**](ProductionApi.md#productionTimeConsumptionUpdate) | **PUT** /production/time-consumption/{id}/ | 


# **productionMachineCreate**
> \Swagger\Client\Model\ProductionMachine productionMachineCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ProductionMachine(); // \Swagger\Client\Model\ProductionMachine | 

try {
    $result = $apiInstance->productionMachineCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMachineCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)|  |

### Return type

[**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMachineDelete**
> productionMachineDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this production machine.

try {
    $apiInstance->productionMachineDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMachineDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this production machine. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMachineList**
> object productionMachineList($q, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->productionMachineList($q, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMachineList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMachinePartialUpdate**
> \Swagger\Client\Model\ProductionMachine productionMachinePartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this production machine.
$data = new \Swagger\Client\Model\ProductionMachine(); // \Swagger\Client\Model\ProductionMachine | 

try {
    $result = $apiInstance->productionMachinePartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMachinePartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this production machine. |
 **data** | [**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)|  |

### Return type

[**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMachineRead**
> \Swagger\Client\Model\ProductionMachine productionMachineRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this production machine.

try {
    $result = $apiInstance->productionMachineRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMachineRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this production machine. |

### Return type

[**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMachineUpdate**
> \Swagger\Client\Model\ProductionMachine productionMachineUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this production machine.
$data = new \Swagger\Client\Model\ProductionMachine(); // \Swagger\Client\Model\ProductionMachine | 

try {
    $result = $apiInstance->productionMachineUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMachineUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this production machine. |
 **data** | [**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)|  |

### Return type

[**\Swagger\Client\Model\ProductionMachine**](../Model/ProductionMachine.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionCreate**
> \Swagger\Client\Model\MaterialParent productionMaterialConsumptionCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\MaterialParent(); // \Swagger\Client\Model\MaterialParent | 

try {
    $result = $apiInstance->productionMaterialConsumptionCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\MaterialParent**](../Model/MaterialParent.md)|  |

### Return type

[**\Swagger\Client\Model\MaterialParent**](../Model/MaterialParent.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionDelete**
> productionMaterialConsumptionDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this material parent.

try {
    $apiInstance->productionMaterialConsumptionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this material parent. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionList**
> object productionMaterialConsumptionList($order_item, $invoice_item, $offer_item, $created_by, $q, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item = "order_item_example"; // string | 
$invoice_item = "invoice_item_example"; // string | 
$offer_item = "offer_item_example"; // string | 
$created_by = "created_by_example"; // string | 
$q = "q_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->productionMaterialConsumptionList($order_item, $invoice_item, $offer_item, $created_by, $q, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_item** | **string**|  | [optional]
 **invoice_item** | **string**|  | [optional]
 **offer_item** | **string**|  | [optional]
 **created_by** | **string**|  | [optional]
 **q** | **string**|  | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionPdf**
> \SplFileObject productionMaterialConsumptionPdf($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this material parent.
$data = new \Swagger\Client\Model\Pdf(); // \Swagger\Client\Model\Pdf | 

try {
    $result = $apiInstance->productionMaterialConsumptionPdf($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this material parent. |
 **data** | [**\Swagger\Client\Model\Pdf**](../Model/Pdf.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionPdfSendToEmail**
> productionMaterialConsumptionPdfSendToEmail($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this material parent.
$data = new \Swagger\Client\Model\SendPDFToEmail(); // \Swagger\Client\Model\SendPDFToEmail | 

try {
    $apiInstance->productionMaterialConsumptionPdfSendToEmail($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionPdfSendToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this material parent. |
 **data** | [**\Swagger\Client\Model\SendPDFToEmail**](../Model/SendPDFToEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionRead**
> \Swagger\Client\Model\MaterialParent productionMaterialConsumptionRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this material parent.

try {
    $result = $apiInstance->productionMaterialConsumptionRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this material parent. |

### Return type

[**\Swagger\Client\Model\MaterialParent**](../Model/MaterialParent.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionMaterialConsumptionUpdate**
> \Swagger\Client\Model\MaterialParent productionMaterialConsumptionUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this material parent.
$data = new \Swagger\Client\Model\MaterialParent(); // \Swagger\Client\Model\MaterialParent | 

try {
    $result = $apiInstance->productionMaterialConsumptionUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionMaterialConsumptionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this material parent. |
 **data** | [**\Swagger\Client\Model\MaterialParent**](../Model/MaterialParent.md)|  |

### Return type

[**\Swagger\Client\Model\MaterialParent**](../Model/MaterialParent.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionTimeConsumptionCreate**
> \Swagger\Client\Model\ProductTimeConsumption productionTimeConsumptionCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ProductTimeConsumption(); // \Swagger\Client\Model\ProductTimeConsumption | 

try {
    $result = $apiInstance->productionTimeConsumptionCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionTimeConsumptionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)|  |

### Return type

[**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionTimeConsumptionDelete**
> productionTimeConsumptionDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this product time consumption.

try {
    $apiInstance->productionTimeConsumptionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionTimeConsumptionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this product time consumption. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionTimeConsumptionList**
> object productionTimeConsumptionList($q, $product, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$product = "product_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->productionTimeConsumptionList($q, $product, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionTimeConsumptionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **product** | **string**|  | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionTimeConsumptionPartialUpdate**
> \Swagger\Client\Model\ProductTimeConsumption productionTimeConsumptionPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this product time consumption.
$data = new \Swagger\Client\Model\ProductTimeConsumption(); // \Swagger\Client\Model\ProductTimeConsumption | 

try {
    $result = $apiInstance->productionTimeConsumptionPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionTimeConsumptionPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this product time consumption. |
 **data** | [**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)|  |

### Return type

[**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionTimeConsumptionRead**
> \Swagger\Client\Model\ProductTimeConsumption productionTimeConsumptionRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this product time consumption.

try {
    $result = $apiInstance->productionTimeConsumptionRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionTimeConsumptionRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this product time consumption. |

### Return type

[**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productionTimeConsumptionUpdate**
> \Swagger\Client\Model\ProductTimeConsumption productionTimeConsumptionUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this product time consumption.
$data = new \Swagger\Client\Model\ProductTimeConsumption(); // \Swagger\Client\Model\ProductTimeConsumption | 

try {
    $result = $apiInstance->productionTimeConsumptionUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->productionTimeConsumptionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this product time consumption. |
 **data** | [**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)|  |

### Return type

[**\Swagger\Client\Model\ProductTimeConsumption**](../Model/ProductTimeConsumption.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

