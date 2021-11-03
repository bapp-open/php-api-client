# Swagger\Client\QualityApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**qualityAcceptanceList**](QualityApi.md#qualityAcceptanceList) | **GET** /quality/acceptance/ | 
[**qualityAcceptancePartialUpdate**](QualityApi.md#qualityAcceptancePartialUpdate) | **PATCH** /quality/acceptance/{id}/ | 
[**qualityAcceptanceRead**](QualityApi.md#qualityAcceptanceRead) | **GET** /quality/acceptance/{id}/ | 
[**qualityAcceptanceTriggerAcceptance**](QualityApi.md#qualityAcceptanceTriggerAcceptance) | **POST** /quality/acceptance/{id}/accept/ | 
[**qualityAcceptanceUpdate**](QualityApi.md#qualityAcceptanceUpdate) | **PUT** /quality/acceptance/{id}/ | 
[**qualityDocumentCategoryCreate**](QualityApi.md#qualityDocumentCategoryCreate) | **POST** /quality/document-category/ | 
[**qualityDocumentCategoryDelete**](QualityApi.md#qualityDocumentCategoryDelete) | **DELETE** /quality/document-category/{id}/ | 
[**qualityDocumentCategoryList**](QualityApi.md#qualityDocumentCategoryList) | **GET** /quality/document-category/ | 
[**qualityDocumentCategoryPartialUpdate**](QualityApi.md#qualityDocumentCategoryPartialUpdate) | **PATCH** /quality/document-category/{id}/ | 
[**qualityDocumentCategoryRead**](QualityApi.md#qualityDocumentCategoryRead) | **GET** /quality/document-category/{id}/ | 
[**qualityDocumentCategoryUpdate**](QualityApi.md#qualityDocumentCategoryUpdate) | **PUT** /quality/document-category/{id}/ | 
[**qualityDocumentCreateCreate**](QualityApi.md#qualityDocumentCreateCreate) | **POST** /quality/document-create/ | 
[**qualityDocumentDelete**](QualityApi.md#qualityDocumentDelete) | **DELETE** /quality/document/{id}/ | 
[**qualityDocumentPartialUpdate**](QualityApi.md#qualityDocumentPartialUpdate) | **PATCH** /quality/document/{id}/ | 
[**qualityDocumentRead**](QualityApi.md#qualityDocumentRead) | **GET** /quality/document/{id}/ | 
[**qualityDocumentTypeCreate**](QualityApi.md#qualityDocumentTypeCreate) | **POST** /quality/document-type/ | 
[**qualityDocumentTypeDelete**](QualityApi.md#qualityDocumentTypeDelete) | **DELETE** /quality/document-type/{id}/ | 
[**qualityDocumentTypeList**](QualityApi.md#qualityDocumentTypeList) | **GET** /quality/document-type/ | 
[**qualityDocumentTypePartialUpdate**](QualityApi.md#qualityDocumentTypePartialUpdate) | **PATCH** /quality/document-type/{id}/ | 
[**qualityDocumentTypeRead**](QualityApi.md#qualityDocumentTypeRead) | **GET** /quality/document-type/{id}/ | 
[**qualityDocumentTypeUpdate**](QualityApi.md#qualityDocumentTypeUpdate) | **PUT** /quality/document-type/{id}/ | 
[**qualityDocumentUpdate**](QualityApi.md#qualityDocumentUpdate) | **PUT** /quality/document/{id}/ | 
[**qualityRevisionCreate**](QualityApi.md#qualityRevisionCreate) | **POST** /quality/revision/ | 
[**qualityRevisionDelete**](QualityApi.md#qualityRevisionDelete) | **DELETE** /quality/revision/{id}/ | 
[**qualityRevisionList**](QualityApi.md#qualityRevisionList) | **GET** /quality/revision/ | 
[**qualityRevisionPartialUpdate**](QualityApi.md#qualityRevisionPartialUpdate) | **PATCH** /quality/revision/{id}/ | 
[**qualityRevisionRead**](QualityApi.md#qualityRevisionRead) | **GET** /quality/revision/{id}/ | 
[**qualityRevisionRevisionSendNotifications**](QualityApi.md#qualityRevisionRevisionSendNotifications) | **POST** /quality/revision/{id}/send-notifications/ | 
[**qualityRevisionUpdate**](QualityApi.md#qualityRevisionUpdate) | **PUT** /quality/revision/{id}/ | 
[**qualityRevisionViewRevisionStatus**](QualityApi.md#qualityRevisionViewRevisionStatus) | **POST** /quality/revision/{id}/view-status/ | 


# **qualityAcceptanceList**
> object qualityAcceptanceList($q, $revision, $accepted, $my_acceptance, $is_active, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$revision = "revision_example"; // string | 
$accepted = "accepted_example"; // string | 
$my_acceptance = "my_acceptance_example"; // string | 
$is_active = "is_active_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->qualityAcceptanceList($q, $revision, $accepted, $my_acceptance, $is_active, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityAcceptanceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **revision** | **string**|  | [optional]
 **accepted** | **string**|  | [optional]
 **my_acceptance** | **string**|  | [optional]
 **is_active** | **string**|  | [optional]
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

# **qualityAcceptancePartialUpdate**
> \Swagger\Client\Model\Acceptance qualityAcceptancePartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Acceptare document.
$data = new \Swagger\Client\Model\Acceptance(); // \Swagger\Client\Model\Acceptance | 

try {
    $result = $apiInstance->qualityAcceptancePartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityAcceptancePartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Acceptare document. |
 **data** | [**\Swagger\Client\Model\Acceptance**](../Model/Acceptance.md)|  |

### Return type

[**\Swagger\Client\Model\Acceptance**](../Model/Acceptance.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityAcceptanceRead**
> \Swagger\Client\Model\Acceptance qualityAcceptanceRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Acceptare document.

try {
    $result = $apiInstance->qualityAcceptanceRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityAcceptanceRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Acceptare document. |

### Return type

[**\Swagger\Client\Model\Acceptance**](../Model/Acceptance.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityAcceptanceTriggerAcceptance**
> qualityAcceptanceTriggerAcceptance($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Acceptare document.

try {
    $apiInstance->qualityAcceptanceTriggerAcceptance($id);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityAcceptanceTriggerAcceptance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Acceptare document. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityAcceptanceUpdate**
> \Swagger\Client\Model\Acceptance qualityAcceptanceUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Acceptare document.
$data = new \Swagger\Client\Model\Acceptance(); // \Swagger\Client\Model\Acceptance | 

try {
    $result = $apiInstance->qualityAcceptanceUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityAcceptanceUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Acceptare document. |
 **data** | [**\Swagger\Client\Model\Acceptance**](../Model/Acceptance.md)|  |

### Return type

[**\Swagger\Client\Model\Acceptance**](../Model/Acceptance.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentCategoryCreate**
> \Swagger\Client\Model\DocumentCategory qualityDocumentCategoryCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\DocumentCategory(); // \Swagger\Client\Model\DocumentCategory | 

try {
    $result = $apiInstance->qualityDocumentCategoryCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCategoryCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentCategoryDelete**
> qualityDocumentCategoryDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Categorie document.

try {
    $apiInstance->qualityDocumentCategoryDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Categorie document. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentCategoryList**
> object qualityDocumentCategoryList($name__icontains, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name__icontains = "name__icontains_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->qualityDocumentCategoryList($name__icontains, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCategoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name__icontains** | **string**|  | [optional]
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

# **qualityDocumentCategoryPartialUpdate**
> \Swagger\Client\Model\DocumentCategory qualityDocumentCategoryPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Categorie document.
$data = new \Swagger\Client\Model\DocumentCategory(); // \Swagger\Client\Model\DocumentCategory | 

try {
    $result = $apiInstance->qualityDocumentCategoryPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCategoryPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Categorie document. |
 **data** | [**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentCategoryRead**
> \Swagger\Client\Model\DocumentCategory qualityDocumentCategoryRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Categorie document.

try {
    $result = $apiInstance->qualityDocumentCategoryRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCategoryRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Categorie document. |

### Return type

[**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentCategoryUpdate**
> \Swagger\Client\Model\DocumentCategory qualityDocumentCategoryUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Categorie document.
$data = new \Swagger\Client\Model\DocumentCategory(); // \Swagger\Client\Model\DocumentCategory | 

try {
    $result = $apiInstance->qualityDocumentCategoryUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCategoryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Categorie document. |
 **data** | [**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentCategory**](../Model/DocumentCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentCreateCreate**
> qualityDocumentCreateCreate($name, $version, $file, $date_start, $code, $category, $type, $locations, $departments, $employees, $interval, $next_occurrence, $edition, $date_stop, $message)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$version = "version_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$date_start = new \DateTime("2013-10-20"); // \DateTime | 
$code = "code_example"; // string | 
$category = 56; // int | 
$type = 56; // int | 
$locations = "locations_example"; // string | 
$departments = "departments_example"; // string | 
$employees = "employees_example"; // string | 
$interval = 56; // int | 
$next_occurrence = new \DateTime("2013-10-20"); // \DateTime | 
$edition = "edition_example"; // string | 
$date_stop = new \DateTime("2013-10-20"); // \DateTime | 
$message = "message_example"; // string | 

try {
    $apiInstance->qualityDocumentCreateCreate($name, $version, $file, $date_start, $code, $category, $type, $locations, $departments, $employees, $interval, $next_occurrence, $edition, $date_stop, $message);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentCreateCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **version** | **string**|  |
 **file** | **\SplFileObject**|  |
 **date_start** | **\DateTime**|  |
 **code** | **string**|  | [optional]
 **category** | **int**|  | [optional]
 **type** | **int**|  | [optional]
 **locations** | **string**|  | [optional]
 **departments** | **string**|  | [optional]
 **employees** | **string**|  | [optional]
 **interval** | **int**|  | [optional]
 **next_occurrence** | **\DateTime**|  | [optional]
 **edition** | **string**|  | [optional]
 **date_stop** | **\DateTime**|  | [optional]
 **message** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentDelete**
> qualityDocumentDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.

try {
    $apiInstance->qualityDocumentDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentDelete: ', $e->getMessage(), PHP_EOL;
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

# **qualityDocumentPartialUpdate**
> \Swagger\Client\Model\Document qualityDocumentPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\Document(); // \Swagger\Client\Model\Document | 

try {
    $result = $apiInstance->qualityDocumentPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\Document**](../Model/Document.md)|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentRead**
> \Swagger\Client\Model\Document qualityDocumentRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.

try {
    $result = $apiInstance->qualityDocumentRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentTypeCreate**
> \Swagger\Client\Model\DocumentType qualityDocumentTypeCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\DocumentType(); // \Swagger\Client\Model\DocumentType | 

try {
    $result = $apiInstance->qualityDocumentTypeCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentTypeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentTypeDelete**
> qualityDocumentTypeDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Tip document.

try {
    $apiInstance->qualityDocumentTypeDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentTypeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Tip document. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentTypeList**
> object qualityDocumentTypeList($name__icontains, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name__icontains = "name__icontains_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->qualityDocumentTypeList($name__icontains, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name__icontains** | **string**|  | [optional]
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

# **qualityDocumentTypePartialUpdate**
> \Swagger\Client\Model\DocumentType qualityDocumentTypePartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Tip document.
$data = new \Swagger\Client\Model\DocumentType(); // \Swagger\Client\Model\DocumentType | 

try {
    $result = $apiInstance->qualityDocumentTypePartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentTypePartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Tip document. |
 **data** | [**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentTypeRead**
> \Swagger\Client\Model\DocumentType qualityDocumentTypeRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Tip document.

try {
    $result = $apiInstance->qualityDocumentTypeRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentTypeRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Tip document. |

### Return type

[**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentTypeUpdate**
> \Swagger\Client\Model\DocumentType qualityDocumentTypeUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Tip document.
$data = new \Swagger\Client\Model\DocumentType(); // \Swagger\Client\Model\DocumentType | 

try {
    $result = $apiInstance->qualityDocumentTypeUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentTypeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Tip document. |
 **data** | [**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityDocumentUpdate**
> qualityDocumentUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document.
$data = new \Swagger\Client\Model\Document(); // \Swagger\Client\Model\Document | 

try {
    $apiInstance->qualityDocumentUpdate($id, $data);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityDocumentUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document. |
 **data** | [**\Swagger\Client\Model\Document**](../Model/Document.md)|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionCreate**
> qualityRevisionCreate($document, $file, $date_start, $edition, $version, $date_stop, $message)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 56; // int | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$date_start = new \DateTime("2013-10-20"); // \DateTime | 
$edition = "edition_example"; // string | 
$version = "version_example"; // string | 
$date_stop = new \DateTime("2013-10-20"); // \DateTime | 
$message = "message_example"; // string | 

try {
    $apiInstance->qualityRevisionCreate($document, $file, $date_start, $edition, $version, $date_stop, $message);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **int**|  |
 **file** | **\SplFileObject**|  |
 **date_start** | **\DateTime**|  |
 **edition** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **date_stop** | **\DateTime**|  | [optional]
 **message** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionDelete**
> qualityRevisionDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Revizie document.

try {
    $apiInstance->qualityRevisionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Revizie document. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionList**
> object qualityRevisionList($document, $is_active, $all, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = "document_example"; // string | 
$is_active = "is_active_example"; // string | 
$all = "all_example"; // string | 
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->qualityRevisionList($document, $is_active, $all, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **string**|  | [optional]
 **is_active** | **string**|  | [optional]
 **all** | **string**|  | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionPartialUpdate**
> \Swagger\Client\Model\Revision qualityRevisionPartialUpdate($id, $document, $file, $date_start, $edition, $version, $date_stop, $message)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Revizie document.
$document = 56; // int | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$date_start = new \DateTime("2013-10-20"); // \DateTime | 
$edition = "edition_example"; // string | 
$version = "version_example"; // string | 
$date_stop = new \DateTime("2013-10-20"); // \DateTime | 
$message = "message_example"; // string | 

try {
    $result = $apiInstance->qualityRevisionPartialUpdate($id, $document, $file, $date_start, $edition, $version, $date_stop, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Revizie document. |
 **document** | **int**|  |
 **file** | **\SplFileObject**|  |
 **date_start** | **\DateTime**|  |
 **edition** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **date_stop** | **\DateTime**|  | [optional]
 **message** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Revision**](../Model/Revision.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionRead**
> \Swagger\Client\Model\Revision qualityRevisionRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Revizie document.

try {
    $result = $apiInstance->qualityRevisionRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Revizie document. |

### Return type

[**\Swagger\Client\Model\Revision**](../Model/Revision.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionRevisionSendNotifications**
> qualityRevisionRevisionSendNotifications($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Revizie document.

try {
    $apiInstance->qualityRevisionRevisionSendNotifications($id);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionRevisionSendNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Revizie document. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionUpdate**
> qualityRevisionUpdate($id, $document, $file, $date_start, $edition, $version, $date_stop, $message)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Revizie document.
$document = 56; // int | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$date_start = new \DateTime("2013-10-20"); // \DateTime | 
$edition = "edition_example"; // string | 
$version = "version_example"; // string | 
$date_stop = new \DateTime("2013-10-20"); // \DateTime | 
$message = "message_example"; // string | 

try {
    $apiInstance->qualityRevisionUpdate($id, $document, $file, $date_start, $edition, $version, $date_stop, $message);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Revizie document. |
 **document** | **int**|  |
 **file** | **\SplFileObject**|  |
 **date_start** | **\DateTime**|  |
 **edition** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **date_stop** | **\DateTime**|  | [optional]
 **message** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qualityRevisionViewRevisionStatus**
> \SplFileObject qualityRevisionViewRevisionStatus($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Revizie document.

try {
    $result = $apiInstance->qualityRevisionViewRevisionStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->qualityRevisionViewRevisionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Revizie document. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

