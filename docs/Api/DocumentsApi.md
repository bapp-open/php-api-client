# Swagger\Client\DocumentsApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsDocumentsCreate**](DocumentsApi.md#documentsDocumentsCreate) | **POST** /documents/documents/ | 
[**documentsDocumentsDelete**](DocumentsApi.md#documentsDocumentsDelete) | **DELETE** /documents/documents/{id}/ | 
[**documentsDocumentsDocumentsReportPdf**](DocumentsApi.md#documentsDocumentsDocumentsReportPdf) | **POST** /documents/documents/documents-report-pdf/ | 
[**documentsDocumentsDownloadArchive**](DocumentsApi.md#documentsDocumentsDownloadArchive) | **POST** /documents/documents/download_archive/ | 
[**documentsDocumentsList**](DocumentsApi.md#documentsDocumentsList) | **GET** /documents/documents/ | 
[**documentsDocumentsMarkAs**](DocumentsApi.md#documentsDocumentsMarkAs) | **POST** /documents/documents/{id}/mark_as/ | 
[**documentsDocumentsPartialUpdate**](DocumentsApi.md#documentsDocumentsPartialUpdate) | **PATCH** /documents/documents/{id}/ | 
[**documentsDocumentsPdfPagesPreview**](DocumentsApi.md#documentsDocumentsPdfPagesPreview) | **POST** /documents/documents/{id}/pdf-preview/ | 
[**documentsDocumentsPdfPagesSplit**](DocumentsApi.md#documentsDocumentsPdfPagesSplit) | **POST** /documents/documents/{id}/pdf-split/ | 
[**documentsDocumentsRead**](DocumentsApi.md#documentsDocumentsRead) | **GET** /documents/documents/{id}/ | 
[**documentsDocumentsUpdate**](DocumentsApi.md#documentsDocumentsUpdate) | **PUT** /documents/documents/{id}/ | 
[**documentsEmployeeEmailDelete**](DocumentsApi.md#documentsEmployeeEmailDelete) | **DELETE** /documents/employee-email/ | 
[**documentsEmployeeEmailRead**](DocumentsApi.md#documentsEmployeeEmailRead) | **GET** /documents/employee-email/ | 
[**documentsTypesList**](DocumentsApi.md#documentsTypesList) | **GET** /documents/types | 


# **documentsDocumentsCreate**
> \Swagger\Client\Model\AccountingDocument documentsDocumentsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\AccountingDocument(); // \Swagger\Client\Model\AccountingDocument | 

try {
    $result = $apiInstance->documentsDocumentsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)|  |

### Return type

[**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsDelete**
> documentsDocumentsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.

try {
    $apiInstance->documentsDocumentsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsDocumentsReportPdf**
> documentsDocumentsDocumentsReportPdf($data)



Raport documente lunare/Raport documente lunare care nu apar pe extrasul de cont

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\DocumentsReportPdf(); // \Swagger\Client\Model\DocumentsReportPdf | 

try {
    $apiInstance->documentsDocumentsDocumentsReportPdf($data);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsDocumentsReportPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DocumentsReportPdf**](../Model/DocumentsReportPdf.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsDownloadArchive**
> object documentsDocumentsDownloadArchive($data, $document_date_year, $document_date_month)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \stdClass; // object | 
$document_date_year = "document_date_year_example"; // string | Year
$document_date_month = "document_date_month_example"; // string | Month

try {
    $result = $apiInstance->documentsDocumentsDownloadArchive($data, $document_date_year, $document_date_month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsDownloadArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **object**|  |
 **document_date_year** | **string**| Year |
 **document_date_month** | **string**| Month |

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsList**
> object documentsDocumentsList($partner, $document_type, $document_date, $document_date_null, $document_date_month, $document_date_year, $value, $currency, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner = "partner_example"; // string | 
$document_type = "document_type_example"; // string | 
$document_date = "document_date_example"; // string | 
$document_date_null = "document_date_null_example"; // string | 
$document_date_month = 8.14; // float | 
$document_date_year = 8.14; // float | 
$value = 8.14; // float | 
$currency = "currency_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->documentsDocumentsList($partner, $document_type, $document_date, $document_date_null, $document_date_month, $document_date_year, $value, $currency, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner** | **string**|  | [optional]
 **document_type** | **string**|  | [optional]
 **document_date** | **string**|  | [optional]
 **document_date_null** | **string**|  | [optional]
 **document_date_month** | **float**|  | [optional]
 **document_date_year** | **float**|  | [optional]
 **value** | **float**|  | [optional]
 **currency** | **string**|  | [optional]
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

# **documentsDocumentsMarkAs**
> \Swagger\Client\Model\AccountingDocumentMark documentsDocumentsMarkAs($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\AccountingDocumentMark(); // \Swagger\Client\Model\AccountingDocumentMark | 

try {
    $result = $apiInstance->documentsDocumentsMarkAs($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsMarkAs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\AccountingDocumentMark**](../Model/AccountingDocumentMark.md)|  |

### Return type

[**\Swagger\Client\Model\AccountingDocumentMark**](../Model/AccountingDocumentMark.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsPartialUpdate**
> \Swagger\Client\Model\AccountingDocument documentsDocumentsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\AccountingDocument(); // \Swagger\Client\Model\AccountingDocument | 

try {
    $result = $apiInstance->documentsDocumentsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)|  |

### Return type

[**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsPdfPagesPreview**
> \SplFileObject documentsDocumentsPdfPagesPreview($id, $data)



Generates pdf preview for page or range of pages. Pages are 0-indexed, ranges are specified with number-number, both edges being inclusive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\\Swagger\Client\Model\Data(); // \Swagger\Client\Model\Data | 

try {
    $result = $apiInstance->documentsDocumentsPdfPagesPreview($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsPdfPagesPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\Data**](../Model/.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsPdfPagesSplit**
> object documentsDocumentsPdfPagesSplit($id, $data)



Creates new documents for every page or range of pages. Pages are 0-indexed, ranges are specified with number-number, both edges being inclusive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\\Swagger\Client\Model\Data(); // \Swagger\Client\Model\Data | 

try {
    $result = $apiInstance->documentsDocumentsPdfPagesSplit($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsPdfPagesSplit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\Data**](../Model/.md)|  |

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsRead**
> \Swagger\Client\Model\AccountingDocument documentsDocumentsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.

try {
    $result = $apiInstance->documentsDocumentsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |

### Return type

[**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDocumentsUpdate**
> \Swagger\Client\Model\AccountingDocument documentsDocumentsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\AccountingDocument(); // \Swagger\Client\Model\AccountingDocument | 

try {
    $result = $apiInstance->documentsDocumentsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDocumentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)|  |

### Return type

[**\Swagger\Client\Model\AccountingDocument**](../Model/AccountingDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsEmployeeEmailDelete**
> documentsEmployeeEmailDelete()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->documentsEmployeeEmailDelete();
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsEmployeeEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsEmployeeEmailRead**
> \Swagger\Client\Model\EmailAlias documentsEmployeeEmailRead()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->documentsEmployeeEmailRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsEmployeeEmailRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EmailAlias**](../Model/EmailAlias.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsTypesList**
> documentsTypesList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->documentsTypesList();
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsTypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

