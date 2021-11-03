# Swagger\Client\StocksApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stocksAdjustmentNoteCreate**](StocksApi.md#stocksAdjustmentNoteCreate) | **POST** /stocks/adjustment-note/ | 
[**stocksAdjustmentNoteDelete**](StocksApi.md#stocksAdjustmentNoteDelete) | **DELETE** /stocks/adjustment-note/{id}/ | 
[**stocksAdjustmentNoteList**](StocksApi.md#stocksAdjustmentNoteList) | **GET** /stocks/adjustment-note/ | 
[**stocksAdjustmentNotePdf**](StocksApi.md#stocksAdjustmentNotePdf) | **POST** /stocks/adjustment-note/{id}/pdf/ | 
[**stocksAdjustmentNotePdfSendToEmail**](StocksApi.md#stocksAdjustmentNotePdfSendToEmail) | **POST** /stocks/adjustment-note/{id}/send-to-email/ | 
[**stocksAdjustmentNoteRead**](StocksApi.md#stocksAdjustmentNoteRead) | **GET** /stocks/adjustment-note/{id}/ | 
[**stocksAdjustmentNoteUpdate**](StocksApi.md#stocksAdjustmentNoteUpdate) | **PUT** /stocks/adjustment-note/{id}/ | 
[**stocksBalanceList**](StocksApi.md#stocksBalanceList) | **GET** /stocks/balance/ | 
[**stocksBalanceStockPdf**](StocksApi.md#stocksBalanceStockPdf) | **POST** /stocks/balance/stock_pdf/ | 
[**stocksBalanceStorageSheetPdf**](StocksApi.md#stocksBalanceStorageSheetPdf) | **POST** /stocks/balance/{id}/storage-sheet/ | 
[**stocksConsumptionNoteCreate**](StocksApi.md#stocksConsumptionNoteCreate) | **POST** /stocks/consumption-note/ | 
[**stocksConsumptionNoteDelete**](StocksApi.md#stocksConsumptionNoteDelete) | **DELETE** /stocks/consumption-note/{id}/ | 
[**stocksConsumptionNoteList**](StocksApi.md#stocksConsumptionNoteList) | **GET** /stocks/consumption-note/ | 
[**stocksConsumptionNotePdf**](StocksApi.md#stocksConsumptionNotePdf) | **POST** /stocks/consumption-note/{id}/pdf/ | 
[**stocksConsumptionNotePdfSendToEmail**](StocksApi.md#stocksConsumptionNotePdfSendToEmail) | **POST** /stocks/consumption-note/{id}/send-to-email/ | 
[**stocksConsumptionNoteRead**](StocksApi.md#stocksConsumptionNoteRead) | **GET** /stocks/consumption-note/{id}/ | 
[**stocksConsumptionNoteUpdate**](StocksApi.md#stocksConsumptionNoteUpdate) | **PUT** /stocks/consumption-note/{id}/ | 
[**stocksInventoryCreate**](StocksApi.md#stocksInventoryCreate) | **POST** /stocks/inventory/ | 
[**stocksInventoryDelete**](StocksApi.md#stocksInventoryDelete) | **DELETE** /stocks/inventory/{id}/ | 
[**stocksInventoryItemsList**](StocksApi.md#stocksInventoryItemsList) | **GET** /stocks/inventory/{parent_id}/items/ | 
[**stocksInventoryItemsPartialUpdate**](StocksApi.md#stocksInventoryItemsPartialUpdate) | **PATCH** /stocks/inventory/{parent_id}/items/{id}/ | 
[**stocksInventoryItemsRead**](StocksApi.md#stocksInventoryItemsRead) | **GET** /stocks/inventory/{parent_id}/items/{id}/ | 
[**stocksInventoryItemsUpdate**](StocksApi.md#stocksInventoryItemsUpdate) | **PUT** /stocks/inventory/{parent_id}/items/{id}/ | 
[**stocksInventoryList**](StocksApi.md#stocksInventoryList) | **GET** /stocks/inventory/ | 
[**stocksInventoryPdf**](StocksApi.md#stocksInventoryPdf) | **POST** /stocks/inventory/{id}/pdf/ | 
[**stocksInventoryPdfSendToEmail**](StocksApi.md#stocksInventoryPdfSendToEmail) | **POST** /stocks/inventory/{id}/send-to-email/ | 
[**stocksInventoryRead**](StocksApi.md#stocksInventoryRead) | **GET** /stocks/inventory/{id}/ | 
[**stocksInventoryUpdate**](StocksApi.md#stocksInventoryUpdate) | **PUT** /stocks/inventory/{id}/ | 
[**stocksMovementList**](StocksApi.md#stocksMovementList) | **GET** /stocks/movement/ | 
[**stocksProductStockList**](StocksApi.md#stocksProductStockList) | **GET** /stocks/product-stock/ | 
[**stocksReceptionNoteCreate**](StocksApi.md#stocksReceptionNoteCreate) | **POST** /stocks/reception-note/ | 
[**stocksReceptionNoteDelete**](StocksApi.md#stocksReceptionNoteDelete) | **DELETE** /stocks/reception-note/{id}/ | 
[**stocksReceptionNoteList**](StocksApi.md#stocksReceptionNoteList) | **GET** /stocks/reception-note/ | 
[**stocksReceptionNotePdf**](StocksApi.md#stocksReceptionNotePdf) | **POST** /stocks/reception-note/{id}/pdf/ | 
[**stocksReceptionNotePdfSendToEmail**](StocksApi.md#stocksReceptionNotePdfSendToEmail) | **POST** /stocks/reception-note/{id}/send-to-email/ | 
[**stocksReceptionNoteRead**](StocksApi.md#stocksReceptionNoteRead) | **GET** /stocks/reception-note/{id}/ | 
[**stocksReceptionNoteUpdate**](StocksApi.md#stocksReceptionNoteUpdate) | **PUT** /stocks/reception-note/{id}/ | 
[**stocksStockCreate**](StocksApi.md#stocksStockCreate) | **POST** /stocks/stock/ | 
[**stocksStockDelete**](StocksApi.md#stocksStockDelete) | **DELETE** /stocks/stock/{id}/ | 
[**stocksStockImportInitialStock**](StocksApi.md#stocksStockImportInitialStock) | **POST** /stocks/stock/{id}/import-initial-stock/ | 
[**stocksStockList**](StocksApi.md#stocksStockList) | **GET** /stocks/stock/ | 
[**stocksStockMaterialsBalance**](StocksApi.md#stocksStockMaterialsBalance) | **POST** /stocks/stock/{id}/materials_balance/ | 
[**stocksStockPartialUpdate**](StocksApi.md#stocksStockPartialUpdate) | **PATCH** /stocks/stock/{id}/ | 
[**stocksStockRead**](StocksApi.md#stocksStockRead) | **GET** /stocks/stock/{id}/ | 
[**stocksStockUpdate**](StocksApi.md#stocksStockUpdate) | **PUT** /stocks/stock/{id}/ | 
[**stocksTransferNoteCreate**](StocksApi.md#stocksTransferNoteCreate) | **POST** /stocks/transfer-note/ | 
[**stocksTransferNoteDelete**](StocksApi.md#stocksTransferNoteDelete) | **DELETE** /stocks/transfer-note/{id}/ | 
[**stocksTransferNoteList**](StocksApi.md#stocksTransferNoteList) | **GET** /stocks/transfer-note/ | 
[**stocksTransferNotePdf**](StocksApi.md#stocksTransferNotePdf) | **POST** /stocks/transfer-note/{id}/pdf/ | 
[**stocksTransferNotePdfSendToEmail**](StocksApi.md#stocksTransferNotePdfSendToEmail) | **POST** /stocks/transfer-note/{id}/send-to-email/ | 
[**stocksTransferNoteRead**](StocksApi.md#stocksTransferNoteRead) | **GET** /stocks/transfer-note/{id}/ | 
[**stocksTransferNoteUpdate**](StocksApi.md#stocksTransferNoteUpdate) | **PUT** /stocks/transfer-note/{id}/ | 


# **stocksAdjustmentNoteCreate**
> \Swagger\Client\Model\AdjustmentNoteModel stocksAdjustmentNoteCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\AdjustmentNoteModel(); // \Swagger\Client\Model\AdjustmentNoteModel | 

try {
    $result = $apiInstance->stocksAdjustmentNoteCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\AdjustmentNoteModel**](../Model/AdjustmentNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\AdjustmentNoteModel**](../Model/AdjustmentNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksAdjustmentNoteDelete**
> stocksAdjustmentNoteDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Proces verbal de ajustare stocuri.

try {
    $apiInstance->stocksAdjustmentNoteDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNoteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Proces verbal de ajustare stocuri. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksAdjustmentNoteList**
> object stocksAdjustmentNoteList($q, $status, $stock, $series, $date, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$status = "status_example"; // string | 
$stock = "stock_example"; // string | 
$series = "series_example"; // string | 
$date = "date_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksAdjustmentNoteList($q, $status, $stock, $series, $date, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **stock** | **string**|  | [optional]
 **series** | **string**|  | [optional]
 **date** | **string**|  | [optional]
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

# **stocksAdjustmentNotePdf**
> \SplFileObject stocksAdjustmentNotePdf($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Proces verbal de ajustare stocuri.
$data = new \Swagger\Client\Model\Pdf(); // \Swagger\Client\Model\Pdf | 

try {
    $result = $apiInstance->stocksAdjustmentNotePdf($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNotePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Proces verbal de ajustare stocuri. |
 **data** | [**\Swagger\Client\Model\Pdf**](../Model/Pdf.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksAdjustmentNotePdfSendToEmail**
> stocksAdjustmentNotePdfSendToEmail($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Proces verbal de ajustare stocuri.
$data = new \Swagger\Client\Model\SendPDFToEmail(); // \Swagger\Client\Model\SendPDFToEmail | 

try {
    $apiInstance->stocksAdjustmentNotePdfSendToEmail($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNotePdfSendToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Proces verbal de ajustare stocuri. |
 **data** | [**\Swagger\Client\Model\SendPDFToEmail**](../Model/SendPDFToEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksAdjustmentNoteRead**
> \Swagger\Client\Model\AdjustmentNoteModel stocksAdjustmentNoteRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Proces verbal de ajustare stocuri.

try {
    $result = $apiInstance->stocksAdjustmentNoteRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNoteRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Proces verbal de ajustare stocuri. |

### Return type

[**\Swagger\Client\Model\AdjustmentNoteModel**](../Model/AdjustmentNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksAdjustmentNoteUpdate**
> \Swagger\Client\Model\AdjustmentNoteModel stocksAdjustmentNoteUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Proces verbal de ajustare stocuri.
$data = new \Swagger\Client\Model\AdjustmentNoteModel(); // \Swagger\Client\Model\AdjustmentNoteModel | 

try {
    $result = $apiInstance->stocksAdjustmentNoteUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksAdjustmentNoteUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Proces verbal de ajustare stocuri. |
 **data** | [**\Swagger\Client\Model\AdjustmentNoteModel**](../Model/AdjustmentNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\AdjustmentNoteModel**](../Model/AdjustmentNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksBalanceList**
> object stocksBalanceList($product_id, $stock_id, $product_vendor_id, $product__category, $product__type, $quantity_lte, $quantity_gte, $ordering, $ids, $page, $page_size)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | 
$stock_id = "stock_id_example"; // string | 
$product_vendor_id = 8.14; // float | 
$product__category = "product__category_example"; // string | 
$product__type = 8.14; // float | 
$quantity_lte = 8.14; // float | 
$quantity_gte = 8.14; // float | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->stocksBalanceList($product_id, $stock_id, $product_vendor_id, $product__category, $product__type, $quantity_lte, $quantity_gte, $ordering, $ids, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksBalanceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**|  | [optional]
 **stock_id** | **string**|  | [optional]
 **product_vendor_id** | **float**|  | [optional]
 **product__category** | **string**|  | [optional]
 **product__type** | **float**|  | [optional]
 **quantity_lte** | **float**|  | [optional]
 **quantity_gte** | **float**|  | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksBalanceStockPdf**
> \SplFileObject stocksBalanceStockPdf($data)



Get a pdf file with all stock ,from internal=False stock, filtered by a vendor(supplier)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\StockOffer(); // \Swagger\Client\Model\StockOffer | 

try {
    $result = $apiInstance->stocksBalanceStockPdf($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksBalanceStockPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\StockOffer**](../Model/StockOffer.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksBalanceStorageSheetPdf**
> \SplFileObject stocksBalanceStorageSheetPdf($id)



Fișa de magazie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Balanță stoc.

try {
    $result = $apiInstance->stocksBalanceStorageSheetPdf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksBalanceStorageSheetPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Balanță stoc. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksConsumptionNoteCreate**
> \Swagger\Client\Model\ConsumptionNoteModel stocksConsumptionNoteCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ConsumptionNoteModel(); // \Swagger\Client\Model\ConsumptionNoteModel | 

try {
    $result = $apiInstance->stocksConsumptionNoteCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ConsumptionNoteModel**](../Model/ConsumptionNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\ConsumptionNoteModel**](../Model/ConsumptionNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksConsumptionNoteDelete**
> stocksConsumptionNoteDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon de consum.

try {
    $apiInstance->stocksConsumptionNoteDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNoteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon de consum. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksConsumptionNoteList**
> object stocksConsumptionNoteList($q, $date, $status, $stock, $deliverer, $receiver, $series, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$date = "date_example"; // string | 
$status = "status_example"; // string | 
$stock = "stock_example"; // string | 
$deliverer = "deliverer_example"; // string | 
$receiver = "receiver_example"; // string | 
$series = "series_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksConsumptionNoteList($q, $date, $status, $stock, $deliverer, $receiver, $series, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **stock** | **string**|  | [optional]
 **deliverer** | **string**|  | [optional]
 **receiver** | **string**|  | [optional]
 **series** | **string**|  | [optional]
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

# **stocksConsumptionNotePdf**
> \SplFileObject stocksConsumptionNotePdf($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon de consum.
$data = new \Swagger\Client\Model\Pdf(); // \Swagger\Client\Model\Pdf | 

try {
    $result = $apiInstance->stocksConsumptionNotePdf($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNotePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon de consum. |
 **data** | [**\Swagger\Client\Model\Pdf**](../Model/Pdf.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksConsumptionNotePdfSendToEmail**
> stocksConsumptionNotePdfSendToEmail($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon de consum.
$data = new \Swagger\Client\Model\SendPDFToEmail(); // \Swagger\Client\Model\SendPDFToEmail | 

try {
    $apiInstance->stocksConsumptionNotePdfSendToEmail($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNotePdfSendToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon de consum. |
 **data** | [**\Swagger\Client\Model\SendPDFToEmail**](../Model/SendPDFToEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksConsumptionNoteRead**
> \Swagger\Client\Model\ConsumptionNoteModel stocksConsumptionNoteRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon de consum.

try {
    $result = $apiInstance->stocksConsumptionNoteRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNoteRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon de consum. |

### Return type

[**\Swagger\Client\Model\ConsumptionNoteModel**](../Model/ConsumptionNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksConsumptionNoteUpdate**
> \Swagger\Client\Model\ConsumptionNoteModel stocksConsumptionNoteUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon de consum.
$data = new \Swagger\Client\Model\ConsumptionNoteModel(); // \Swagger\Client\Model\ConsumptionNoteModel | 

try {
    $result = $apiInstance->stocksConsumptionNoteUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksConsumptionNoteUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon de consum. |
 **data** | [**\Swagger\Client\Model\ConsumptionNoteModel**](../Model/ConsumptionNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\ConsumptionNoteModel**](../Model/ConsumptionNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryCreate**
> \Swagger\Client\Model\InventoryModel stocksInventoryCreate($data)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\InventoryModel(); // \Swagger\Client\Model\InventoryModel | 

try {
    $result = $apiInstance->stocksInventoryCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\InventoryModel**](../Model/InventoryModel.md)|  |

### Return type

[**\Swagger\Client\Model\InventoryModel**](../Model/InventoryModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryDelete**
> stocksInventoryDelete($id)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Inventar.

try {
    $apiInstance->stocksInventoryDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Inventar. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryItemsList**
> object stocksInventoryItemsList($parent_id, $q, $unit, $code, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = "parent_id_example"; // string | 
$q = "q_example"; // string | 
$unit = "unit_example"; // string | 
$code = "code_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksInventoryItemsList($parent_id, $q, $unit, $code, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |
 **q** | **string**|  | [optional]
 **unit** | **string**|  | [optional]
 **code** | **string**|  | [optional]
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

# **stocksInventoryItemsPartialUpdate**
> \Swagger\Client\Model\InventoryItemModel stocksInventoryItemsPartialUpdate($id, $parent_id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Articol inventar.
$parent_id = "parent_id_example"; // string | 
$data = new \Swagger\Client\Model\InventoryItemModel(); // \Swagger\Client\Model\InventoryItemModel | 

try {
    $result = $apiInstance->stocksInventoryItemsPartialUpdate($id, $parent_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryItemsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Articol inventar. |
 **parent_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\InventoryItemModel**](../Model/InventoryItemModel.md)|  |

### Return type

[**\Swagger\Client\Model\InventoryItemModel**](../Model/InventoryItemModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryItemsRead**
> \Swagger\Client\Model\InventoryItemModel stocksInventoryItemsRead($id, $parent_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Articol inventar.
$parent_id = "parent_id_example"; // string | 

try {
    $result = $apiInstance->stocksInventoryItemsRead($id, $parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryItemsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Articol inventar. |
 **parent_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InventoryItemModel**](../Model/InventoryItemModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryItemsUpdate**
> \Swagger\Client\Model\InventoryItemModel stocksInventoryItemsUpdate($id, $parent_id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Articol inventar.
$parent_id = "parent_id_example"; // string | 
$data = new \Swagger\Client\Model\InventoryItemModel(); // \Swagger\Client\Model\InventoryItemModel | 

try {
    $result = $apiInstance->stocksInventoryItemsUpdate($id, $parent_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Articol inventar. |
 **parent_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\InventoryItemModel**](../Model/InventoryItemModel.md)|  |

### Return type

[**\Swagger\Client\Model\InventoryItemModel**](../Model/InventoryItemModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryList**
> object stocksInventoryList($q, $date, $status, $stock, $series, $ordering, $ids, $page)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$date = "date_example"; // string | 
$status = "status_example"; // string | 
$stock = "stock_example"; // string | 
$series = "series_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksInventoryList($q, $date, $status, $stock, $series, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **stock** | **string**|  | [optional]
 **series** | **string**|  | [optional]
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

# **stocksInventoryPdf**
> \SplFileObject stocksInventoryPdf($id, $data)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Inventar.
$data = new \Swagger\Client\Model\Pdf(); // \Swagger\Client\Model\Pdf | 

try {
    $result = $apiInstance->stocksInventoryPdf($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Inventar. |
 **data** | [**\Swagger\Client\Model\Pdf**](../Model/Pdf.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryPdfSendToEmail**
> stocksInventoryPdfSendToEmail($id, $data)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Inventar.
$data = new \Swagger\Client\Model\SendPDFToEmail(); // \Swagger\Client\Model\SendPDFToEmail | 

try {
    $apiInstance->stocksInventoryPdfSendToEmail($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryPdfSendToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Inventar. |
 **data** | [**\Swagger\Client\Model\SendPDFToEmail**](../Model/SendPDFToEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryRead**
> \Swagger\Client\Model\InventoryModel stocksInventoryRead($id)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Inventar.

try {
    $result = $apiInstance->stocksInventoryRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Inventar. |

### Return type

[**\Swagger\Client\Model\InventoryModel**](../Model/InventoryModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksInventoryUpdate**
> \Swagger\Client\Model\InventoryModel stocksInventoryUpdate($id, $data)



Inventar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Inventar.
$data = new \Swagger\Client\Model\InventoryModel(); // \Swagger\Client\Model\InventoryModel | 

try {
    $result = $apiInstance->stocksInventoryUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksInventoryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Inventar. |
 **data** | [**\Swagger\Client\Model\InventoryModel**](../Model/InventoryModel.md)|  |

### Return type

[**\Swagger\Client\Model\InventoryModel**](../Model/InventoryModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksMovementList**
> object stocksMovementList($q, $stock, $stock_reference, $product, $document_serial, $document_number, $document_type, $ordering, $ids, $page)



Mișcări de stoc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$stock = "stock_example"; // string | 
$stock_reference = "stock_reference_example"; // string | 
$product = "product_example"; // string | 
$document_serial = "document_serial_example"; // string | 
$document_number = "document_number_example"; // string | 
$document_type = "document_type_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksMovementList($q, $stock, $stock_reference, $product, $document_serial, $document_number, $document_type, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksMovementList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **stock** | **string**|  | [optional]
 **stock_reference** | **string**|  | [optional]
 **product** | **string**|  | [optional]
 **document_serial** | **string**|  | [optional]
 **document_number** | **string**|  | [optional]
 **document_type** | **string**|  | [optional]
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

# **stocksProductStockList**
> object stocksProductStockList($q, $category, $type, $name, $code, $code_ean, $type_category, $active, $quantity_lte, $quantity_gte, $internal_stock, $partner, $ordering, $ids, $page, $size)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$category = "category_example"; // string | 
$type = "type_example"; // string | 
$name = "name_example"; // string | 
$code = "code_example"; // string | 
$code_ean = "code_ean_example"; // string | 
$type_category = "type_category_example"; // string | 
$active = "active_example"; // string | 
$quantity_lte = 8.14; // float | 
$quantity_gte = 8.14; // float | 
$internal_stock = "internal_stock_example"; // string | 
$partner = 8.14; // float | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.
$size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->stocksProductStockList($q, $category, $type, $name, $code, $code_ean, $type_category, $active, $quantity_lte, $quantity_gte, $internal_stock, $partner, $ordering, $ids, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksProductStockList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **category** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **code_ean** | **string**|  | [optional]
 **type_category** | **string**|  | [optional]
 **active** | **string**|  | [optional]
 **quantity_lte** | **float**|  | [optional]
 **quantity_gte** | **float**|  | [optional]
 **internal_stock** | **string**|  | [optional]
 **partner** | **float**|  | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **size** | **int**| Number of results to return per page. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksReceptionNoteCreate**
> \Swagger\Client\Model\ReceptionNoteModel stocksReceptionNoteCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ReceptionNoteModel(); // \Swagger\Client\Model\ReceptionNoteModel | 

try {
    $result = $apiInstance->stocksReceptionNoteCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ReceptionNoteModel**](../Model/ReceptionNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\ReceptionNoteModel**](../Model/ReceptionNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksReceptionNoteDelete**
> stocksReceptionNoteDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Nir.

try {
    $apiInstance->stocksReceptionNoteDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNoteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Nir. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksReceptionNoteList**
> object stocksReceptionNoteList($q, $date, $stock, $supplier, $delegate, $currency, $status, $series, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$date = "date_example"; // string | 
$stock = "stock_example"; // string | 
$supplier = "supplier_example"; // string | 
$delegate = "delegate_example"; // string | 
$currency = "currency_example"; // string | 
$status = "status_example"; // string | 
$series = "series_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksReceptionNoteList($q, $date, $stock, $supplier, $delegate, $currency, $status, $series, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **stock** | **string**|  | [optional]
 **supplier** | **string**|  | [optional]
 **delegate** | **string**|  | [optional]
 **currency** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **series** | **string**|  | [optional]
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

# **stocksReceptionNotePdf**
> \SplFileObject stocksReceptionNotePdf($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Nir.
$data = new \Swagger\Client\Model\Pdf(); // \Swagger\Client\Model\Pdf | 

try {
    $result = $apiInstance->stocksReceptionNotePdf($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNotePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Nir. |
 **data** | [**\Swagger\Client\Model\Pdf**](../Model/Pdf.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksReceptionNotePdfSendToEmail**
> stocksReceptionNotePdfSendToEmail($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Nir.
$data = new \Swagger\Client\Model\SendPDFToEmail(); // \Swagger\Client\Model\SendPDFToEmail | 

try {
    $apiInstance->stocksReceptionNotePdfSendToEmail($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNotePdfSendToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Nir. |
 **data** | [**\Swagger\Client\Model\SendPDFToEmail**](../Model/SendPDFToEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksReceptionNoteRead**
> \Swagger\Client\Model\ReceptionNoteModel stocksReceptionNoteRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Nir.

try {
    $result = $apiInstance->stocksReceptionNoteRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNoteRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Nir. |

### Return type

[**\Swagger\Client\Model\ReceptionNoteModel**](../Model/ReceptionNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksReceptionNoteUpdate**
> \Swagger\Client\Model\ReceptionNoteModel stocksReceptionNoteUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Nir.
$data = new \Swagger\Client\Model\ReceptionNoteModel(); // \Swagger\Client\Model\ReceptionNoteModel | 

try {
    $result = $apiInstance->stocksReceptionNoteUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksReceptionNoteUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Nir. |
 **data** | [**\Swagger\Client\Model\ReceptionNoteModel**](../Model/ReceptionNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\ReceptionNoteModel**](../Model/ReceptionNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockCreate**
> \Swagger\Client\Model\Stock stocksStockCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Stock(); // \Swagger\Client\Model\Stock | 

try {
    $result = $apiInstance->stocksStockCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Stock**](../Model/Stock.md)|  |

### Return type

[**\Swagger\Client\Model\Stock**](../Model/Stock.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockDelete**
> stocksStockDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Stoc.

try {
    $apiInstance->stocksStockDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Stoc. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockImportInitialStock**
> stocksStockImportInitialStock($id, $file)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Stoc.
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->stocksStockImportInitialStock($id, $file);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockImportInitialStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Stoc. |
 **file** | **\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockList**
> object stocksStockList($q, $quantitative, $location, $manager, $internal, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$quantitative = "quantitative_example"; // string | 
$location = "location_example"; // string | 
$manager = "manager_example"; // string | 
$internal = "internal_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksStockList($q, $quantitative, $location, $manager, $internal, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **quantitative** | **string**|  | [optional]
 **location** | **string**|  | [optional]
 **manager** | **string**|  | [optional]
 **internal** | **string**|  | [optional]
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

# **stocksStockMaterialsBalance**
> object stocksStockMaterialsBalance($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Stoc.
$data = new \Swagger\Client\Model\StockBalance(); // \Swagger\Client\Model\StockBalance | 

try {
    $result = $apiInstance->stocksStockMaterialsBalance($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockMaterialsBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Stoc. |
 **data** | [**\Swagger\Client\Model\StockBalance**](../Model/StockBalance.md)|  |

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockPartialUpdate**
> \Swagger\Client\Model\Stock stocksStockPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Stoc.
$data = new \Swagger\Client\Model\Stock(); // \Swagger\Client\Model\Stock | 

try {
    $result = $apiInstance->stocksStockPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Stoc. |
 **data** | [**\Swagger\Client\Model\Stock**](../Model/Stock.md)|  |

### Return type

[**\Swagger\Client\Model\Stock**](../Model/Stock.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockRead**
> \Swagger\Client\Model\Stock stocksStockRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Stoc.

try {
    $result = $apiInstance->stocksStockRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Stoc. |

### Return type

[**\Swagger\Client\Model\Stock**](../Model/Stock.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksStockUpdate**
> \Swagger\Client\Model\Stock stocksStockUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Stoc.
$data = new \Swagger\Client\Model\Stock(); // \Swagger\Client\Model\Stock | 

try {
    $result = $apiInstance->stocksStockUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksStockUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Stoc. |
 **data** | [**\Swagger\Client\Model\Stock**](../Model/Stock.md)|  |

### Return type

[**\Swagger\Client\Model\Stock**](../Model/Stock.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksTransferNoteCreate**
> \Swagger\Client\Model\TransferNoteModel stocksTransferNoteCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\TransferNoteModel(); // \Swagger\Client\Model\TransferNoteModel | 

try {
    $result = $apiInstance->stocksTransferNoteCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TransferNoteModel**](../Model/TransferNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\TransferNoteModel**](../Model/TransferNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksTransferNoteDelete**
> stocksTransferNoteDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon predare/transfer/restituire.

try {
    $apiInstance->stocksTransferNoteDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNoteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon predare/transfer/restituire. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksTransferNoteList**
> object stocksTransferNoteList($q, $date, $status, $stock_from, $stock_to, $series, $deliverer, $receiver, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$date = "date_example"; // string | 
$status = "status_example"; // string | 
$stock_from = "stock_from_example"; // string | 
$stock_to = "stock_to_example"; // string | 
$series = "series_example"; // string | 
$deliverer = "deliverer_example"; // string | 
$receiver = "receiver_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->stocksTransferNoteList($q, $date, $status, $stock_from, $stock_to, $series, $deliverer, $receiver, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **stock_from** | **string**|  | [optional]
 **stock_to** | **string**|  | [optional]
 **series** | **string**|  | [optional]
 **deliverer** | **string**|  | [optional]
 **receiver** | **string**|  | [optional]
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

# **stocksTransferNotePdf**
> \SplFileObject stocksTransferNotePdf($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon predare/transfer/restituire.
$data = new \Swagger\Client\Model\Pdf(); // \Swagger\Client\Model\Pdf | 

try {
    $result = $apiInstance->stocksTransferNotePdf($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNotePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon predare/transfer/restituire. |
 **data** | [**\Swagger\Client\Model\Pdf**](../Model/Pdf.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksTransferNotePdfSendToEmail**
> stocksTransferNotePdfSendToEmail($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon predare/transfer/restituire.
$data = new \Swagger\Client\Model\SendPDFToEmail(); // \Swagger\Client\Model\SendPDFToEmail | 

try {
    $apiInstance->stocksTransferNotePdfSendToEmail($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNotePdfSendToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon predare/transfer/restituire. |
 **data** | [**\Swagger\Client\Model\SendPDFToEmail**](../Model/SendPDFToEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksTransferNoteRead**
> \Swagger\Client\Model\TransferNoteModel stocksTransferNoteRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon predare/transfer/restituire.

try {
    $result = $apiInstance->stocksTransferNoteRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNoteRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon predare/transfer/restituire. |

### Return type

[**\Swagger\Client\Model\TransferNoteModel**](../Model/TransferNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocksTransferNoteUpdate**
> \Swagger\Client\Model\TransferNoteModel stocksTransferNoteUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Bon predare/transfer/restituire.
$data = new \Swagger\Client\Model\TransferNoteModel(); // \Swagger\Client\Model\TransferNoteModel | 

try {
    $result = $apiInstance->stocksTransferNoteUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->stocksTransferNoteUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Bon predare/transfer/restituire. |
 **data** | [**\Swagger\Client\Model\TransferNoteModel**](../Model/TransferNoteModel.md)|  |

### Return type

[**\Swagger\Client\Model\TransferNoteModel**](../Model/TransferNoteModel.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

