# Swagger\Client\SalaryApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salaryContractBonusBonusReset**](SalaryApi.md#salaryContractBonusBonusReset) | **POST** /salary/contract-bonus/bonus_reset/ | 
[**salaryContractBonusCreate**](SalaryApi.md#salaryContractBonusCreate) | **POST** /salary/contract-bonus/ | 
[**salaryContractBonusDelete**](SalaryApi.md#salaryContractBonusDelete) | **DELETE** /salary/contract-bonus/{id}/ | 
[**salaryContractBonusList**](SalaryApi.md#salaryContractBonusList) | **GET** /salary/contract-bonus/ | 
[**salaryContractBonusPartialUpdate**](SalaryApi.md#salaryContractBonusPartialUpdate) | **PATCH** /salary/contract-bonus/{id}/ | 
[**salaryContractBonusRead**](SalaryApi.md#salaryContractBonusRead) | **GET** /salary/contract-bonus/{id}/ | 
[**salaryContractBonusUpdate**](SalaryApi.md#salaryContractBonusUpdate) | **PUT** /salary/contract-bonus/{id}/ | 
[**salaryContractCreate**](SalaryApi.md#salaryContractCreate) | **POST** /salary/contract/ | 
[**salaryContractCreateRevision**](SalaryApi.md#salaryContractCreateRevision) | **POST** /salary/contract/{id}/create_revision/ | 
[**salaryContractDocuments**](SalaryApi.md#salaryContractDocuments) | **POST** /salary/contract/{id}/documents/ | 
[**salaryContractList**](SalaryApi.md#salaryContractList) | **GET** /salary/contract/ | 
[**salaryContractPartialUpdate**](SalaryApi.md#salaryContractPartialUpdate) | **PATCH** /salary/contract/{id}/ | 
[**salaryContractRead**](SalaryApi.md#salaryContractRead) | **GET** /salary/contract/{id}/ | 
[**salaryContractUpdate**](SalaryApi.md#salaryContractUpdate) | **PUT** /salary/contract/{id}/ | 
[**salaryContractUploadDocument**](SalaryApi.md#salaryContractUploadDocument) | **POST** /salary/contract/{id}/upload_document/ | 
[**salaryEmployeeDetailsCreate**](SalaryApi.md#salaryEmployeeDetailsCreate) | **POST** /salary/employee-details/ | 
[**salaryEmployeeDetailsList**](SalaryApi.md#salaryEmployeeDetailsList) | **GET** /salary/employee-details/ | 
[**salaryEmployeeDetailsPartialUpdate**](SalaryApi.md#salaryEmployeeDetailsPartialUpdate) | **PATCH** /salary/employee-details/{employee_id}/ | 
[**salaryEmployeeDetailsRead**](SalaryApi.md#salaryEmployeeDetailsRead) | **GET** /salary/employee-details/{employee_id}/ | 
[**salaryEmployeeDetailsUpdate**](SalaryApi.md#salaryEmployeeDetailsUpdate) | **PUT** /salary/employee-details/{employee_id}/ | 
[**salaryEmployeeDocumentsCreate**](SalaryApi.md#salaryEmployeeDocumentsCreate) | **POST** /salary/employee-documents/ | 
[**salaryEmployeeDocumentsDelete**](SalaryApi.md#salaryEmployeeDocumentsDelete) | **DELETE** /salary/employee-documents/{id}/ | 
[**salaryEmployeeDocumentsList**](SalaryApi.md#salaryEmployeeDocumentsList) | **GET** /salary/employee-documents/ | 
[**salaryEmployeeDocumentsPartialUpdate**](SalaryApi.md#salaryEmployeeDocumentsPartialUpdate) | **PATCH** /salary/employee-documents/{id}/ | 
[**salaryEmployeeDocumentsRead**](SalaryApi.md#salaryEmployeeDocumentsRead) | **GET** /salary/employee-documents/{id}/ | 
[**salaryEmployeeDocumentsUpdate**](SalaryApi.md#salaryEmployeeDocumentsUpdate) | **PUT** /salary/employee-documents/{id}/ | 


# **salaryContractBonusBonusReset**
> object salaryContractBonusBonusReset()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->salaryContractBonusBonusReset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusBonusReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractBonusCreate**
> \Swagger\Client\Model\EmploymentContractBonus salaryContractBonusCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EmploymentContractBonus(); // \Swagger\Client\Model\EmploymentContractBonus | 

try {
    $result = $apiInstance->salaryContractBonusCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)|  |

### Return type

[**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractBonusDelete**
> salaryContractBonusDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Spor / indemnizație / alt adaos salarial.

try {
    $apiInstance->salaryContractBonusDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Spor / indemnizație / alt adaos salarial. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractBonusList**
> object salaryContractBonusList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->salaryContractBonusList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **salaryContractBonusPartialUpdate**
> \Swagger\Client\Model\EmploymentContractBonus salaryContractBonusPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Spor / indemnizație / alt adaos salarial.
$data = new \Swagger\Client\Model\EmploymentContractBonus(); // \Swagger\Client\Model\EmploymentContractBonus | 

try {
    $result = $apiInstance->salaryContractBonusPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Spor / indemnizație / alt adaos salarial. |
 **data** | [**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)|  |

### Return type

[**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractBonusRead**
> \Swagger\Client\Model\EmploymentContractBonus salaryContractBonusRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Spor / indemnizație / alt adaos salarial.

try {
    $result = $apiInstance->salaryContractBonusRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Spor / indemnizație / alt adaos salarial. |

### Return type

[**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractBonusUpdate**
> \Swagger\Client\Model\EmploymentContractBonus salaryContractBonusUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Spor / indemnizație / alt adaos salarial.
$data = new \Swagger\Client\Model\EmploymentContractBonus(); // \Swagger\Client\Model\EmploymentContractBonus | 

try {
    $result = $apiInstance->salaryContractBonusUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractBonusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Spor / indemnizație / alt adaos salarial. |
 **data** | [**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)|  |

### Return type

[**\Swagger\Client\Model\EmploymentContractBonus**](../Model/EmploymentContractBonus.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractCreate**
> \Swagger\Client\Model\EmploymentContract salaryContractCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EmploymentContract(); // \Swagger\Client\Model\EmploymentContract | 

try {
    $result = $apiInstance->salaryContractCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)|  |

### Return type

[**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractCreateRevision**
> bool salaryContractCreateRevision($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Contract muncă.
$data = new \Swagger\Client\Model\EmploymentContractRevision(); // \Swagger\Client\Model\EmploymentContractRevision | 

try {
    $result = $apiInstance->salaryContractCreateRevision($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractCreateRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Contract muncă. |
 **data** | [**\Swagger\Client\Model\EmploymentContractRevision**](../Model/EmploymentContractRevision.md)|  |

### Return type

**bool**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractDocuments**
> \SplFileObject salaryContractDocuments($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Contract muncă.
$data = new \Swagger\Client\Model\\Swagger\Client\Model\Data(); // \Swagger\Client\Model\Data | 

try {
    $result = $apiInstance->salaryContractDocuments($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Contract muncă. |
 **data** | [**\Swagger\Client\Model\Data**](../Model/.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractList**
> object salaryContractList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->salaryContractList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **salaryContractPartialUpdate**
> \Swagger\Client\Model\EmploymentContract salaryContractPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Contract muncă.
$data = new \Swagger\Client\Model\EmploymentContract(); // \Swagger\Client\Model\EmploymentContract | 

try {
    $result = $apiInstance->salaryContractPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Contract muncă. |
 **data** | [**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)|  |

### Return type

[**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractRead**
> \Swagger\Client\Model\EmploymentContract salaryContractRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Contract muncă.

try {
    $result = $apiInstance->salaryContractRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Contract muncă. |

### Return type

[**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractUpdate**
> \Swagger\Client\Model\EmploymentContract salaryContractUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Contract muncă.
$data = new \Swagger\Client\Model\EmploymentContract(); // \Swagger\Client\Model\EmploymentContract | 

try {
    $result = $apiInstance->salaryContractUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Contract muncă. |
 **data** | [**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)|  |

### Return type

[**\Swagger\Client\Model\EmploymentContract**](../Model/EmploymentContract.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryContractUploadDocument**
> salaryContractUploadDocument($id, $document)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Contract muncă.
$document = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->salaryContractUploadDocument($id, $document);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryContractUploadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Contract muncă. |
 **document** | **\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDetailsCreate**
> \Swagger\Client\Model\EmployeeDetails salaryEmployeeDetailsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EmployeeDetails(); // \Swagger\Client\Model\EmployeeDetails | 

try {
    $result = $apiInstance->salaryEmployeeDetailsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDetailsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)|  |

### Return type

[**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDetailsList**
> object salaryEmployeeDetailsList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->salaryEmployeeDetailsList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDetailsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **salaryEmployeeDetailsPartialUpdate**
> \Swagger\Client\Model\EmployeeDetails salaryEmployeeDetailsPartialUpdate($employee_id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = "employee_id_example"; // string | 
$data = new \Swagger\Client\Model\EmployeeDetails(); // \Swagger\Client\Model\EmployeeDetails | 

try {
    $result = $apiInstance->salaryEmployeeDetailsPartialUpdate($employee_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDetailsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)|  |

### Return type

[**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDetailsRead**
> \Swagger\Client\Model\EmployeeDetails salaryEmployeeDetailsRead($employee_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = "employee_id_example"; // string | 

try {
    $result = $apiInstance->salaryEmployeeDetailsRead($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDetailsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDetailsUpdate**
> \Swagger\Client\Model\EmployeeDetails salaryEmployeeDetailsUpdate($employee_id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = "employee_id_example"; // string | 
$data = new \Swagger\Client\Model\EmployeeDetails(); // \Swagger\Client\Model\EmployeeDetails | 

try {
    $result = $apiInstance->salaryEmployeeDetailsUpdate($employee_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDetailsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)|  |

### Return type

[**\Swagger\Client\Model\EmployeeDetails**](../Model/EmployeeDetails.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDocumentsCreate**
> \Swagger\Client\Model\EmployeeDocument salaryEmployeeDocumentsCreate($employee, $document, $screenshot)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 56; // int | 
$document = "/path/to/file.txt"; // \SplFileObject | 
$screenshot = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->salaryEmployeeDocumentsCreate($employee, $document, $screenshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDocumentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee** | **int**|  |
 **document** | **\SplFileObject**|  |
 **screenshot** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmployeeDocument**](../Model/EmployeeDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDocumentsDelete**
> salaryEmployeeDocumentsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document angajat.

try {
    $apiInstance->salaryEmployeeDocumentsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDocumentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document angajat. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDocumentsList**
> object salaryEmployeeDocumentsList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->salaryEmployeeDocumentsList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDocumentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDocumentsPartialUpdate**
> \Swagger\Client\Model\EmployeeDocument salaryEmployeeDocumentsPartialUpdate($id, $employee, $document, $screenshot)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document angajat.
$employee = 56; // int | 
$document = "/path/to/file.txt"; // \SplFileObject | 
$screenshot = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->salaryEmployeeDocumentsPartialUpdate($id, $employee, $document, $screenshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDocumentsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document angajat. |
 **employee** | **int**|  |
 **document** | **\SplFileObject**|  |
 **screenshot** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmployeeDocument**](../Model/EmployeeDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDocumentsRead**
> \Swagger\Client\Model\EmployeeDocument salaryEmployeeDocumentsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document angajat.

try {
    $result = $apiInstance->salaryEmployeeDocumentsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDocumentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document angajat. |

### Return type

[**\Swagger\Client\Model\EmployeeDocument**](../Model/EmployeeDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryEmployeeDocumentsUpdate**
> \Swagger\Client\Model\EmployeeDocument salaryEmployeeDocumentsUpdate($id, $employee, $document, $screenshot)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Document angajat.
$employee = 56; // int | 
$document = "/path/to/file.txt"; // \SplFileObject | 
$screenshot = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->salaryEmployeeDocumentsUpdate($id, $employee, $document, $screenshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryApi->salaryEmployeeDocumentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Document angajat. |
 **employee** | **int**|  |
 **document** | **\SplFileObject**|  |
 **screenshot** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmployeeDocument**](../Model/EmployeeDocument.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

